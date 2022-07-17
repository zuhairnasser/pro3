<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use App\Models\User;

class UserController extends Controller
{
    use ApiResponser;
    public function index()
    {

        if (auth('sanctum')->user()->is_admin == 1) {
            $users = User::all();
            return $this->success(
                "Success",
                $users
            );
        } else
            return $this->error(
                'you dont have permission to display this data',
                520
            );
    }

    public function deactivate($id)
    {
        if (auth('sanctum')->user()->is_admin == 1) {
            $user =  User::find($id);
            $user->is_active = 0;
            $user->save();
            return $this->success(
                'updated successfuly'
            );
        } else
            return $this->error(
                'you dont have permission to display this data',
                520
            );
    }

    public function activate($id)
    {
        if (auth('sanctum')->user()->is_admin == 1) {

            $user =  User::find($id);
            $user->is_active = 1;
            $user->save();
            return $this->success(

                'updated successfuly'
            );
        } else
            return $this->error(
                'you dont have permission to display this data',
                520
            );
    }

    public function destroy($id)
    {
        if (auth('sanctum')->user()->is_admin == 1) {
            User::whereId($id)->delete();
            return $this->success(
                'User deleted successfuly'
            );
        } else
            return $this->error(
                'you dont have permission to display this data',
                520
            );
    }
}
