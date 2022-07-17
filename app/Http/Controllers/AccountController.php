<?php

namespace App\Http\Controllers;

use App\Models\AvailablePermissions;
use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('accounts.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = AvailablePermissions::getAvailablePermissions();
        return view('accounts.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'uname'=>'required',
            'email'=>'required|unique:users',
            'permission'=>'required|array',
            'password'=>'required|confirmed'
        ]);
        try {
            $user = new User();

            $permissions = [];

            foreach ($request->permission as $item) {
                $permissions[] = decrypt($item);
            }

            $permissions = implode(',', $permissions);


            $user->name = $request->uname;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->permissions = $permissions;
            $user->save();
            session()->flash('success', trans('messages.success.create'));
            return redirect('accounts');
        } catch (DecryptException $decryptException) {
            session()->flash('error', trans('messages.errors.create'));
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $user=User::find(decrypt($id));
            if(is_null($user)) throw new DecryptException();

            $permissions = AvailablePermissions::getAvailablePermissions();
            return view('accounts.edit', compact('user', 'permissions'));
        } catch (DecryptException $decryptException) {
            session()->flash('error', trans('messages.errors.general'));
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'uname'=>'required',
            'email'=>'required',
            'permission'=>'required|array',
            'password'=>'nullable|confirmed'
        ]);
        try {
            $user = User::find(decrypt($id));
            if(is_null($user)) throw new DecryptException();

            $usersCount = User::where('email', $request->email)
                ->where('id', '!=', $user->getKey())
                ->count();

            if($usersCount > 0) {
                session()->flash('error', trans('messages.errors.duplicated-email'));
                return back();
            }
            $user->name = $request->uname;
            $user->email = $request->email;
            if($request->has('password')) {
                $user->password = bcrypt($request->password);
            }

            $permissions = [];

            foreach ($request->permission as $item) {
                $permissions[] = decrypt($item);
            }

            $permissions = implode(',', $permissions);

            $user->permissions = $permissions;
            $user->save();
            session()->flash('success', trans('messages.success.update'));
            return redirect('accounts');
        } catch (DecryptException $decryptException) {
            session()->flash('error', trans('messages.errors.general'));
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $user = User::find(decrypt($id));
            if(is_null($user)) throw new DecryptException();

            $user->delete();
            session()->flash('success', trans('messages.success.delete'));
            return back();
        } catch (DecryptException $decryptException) {
            session()->flash('error', trans('messages.errors.general'));
            return back();
        }
    }
}
