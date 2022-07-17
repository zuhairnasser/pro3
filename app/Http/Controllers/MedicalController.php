<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use App\Models\Medical;
use Illuminate\Http\Request;

class MedicalController extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth('sanctum')->user()->is_active == 1) {
            $med = Medical::with('city', 'type')->get();
            return $this->success(
                $med
            );
        } else
            return $this->error(
                'your acount is disabled contact the administrator',
                512
            );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (auth('sanctum')->user()->is_admin == 1) {
            $attr = $request->validate([
                'name' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'longitude' => 'required',
                'latitude' => 'required',
                'city_id' => 'required',
                'type_id' => 'required',
            ]);


            $med = Medical::create([
                'name' => $attr['name'],
                'location' => $attr['location'],
                'longitude' => $attr['longitude'],
                'latitude' => $attr['latitude'],
                'city_id' => $attr['city_id'],
                'type_id' => $attr['type_id'],
            ]);
            return $this->success(
                $med,
                'created successfuly',
            );
        } else
            return $this->error(
                'you dont have permission to display this data',
                520
            );
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
        //
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
        if (auth('sanctum')->user()->is_admin == 1) {
            $attr = $request->validate([
                'name' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'longitude' => 'required',
                'latitude' => 'required',
                'city_id' => 'required',
                'type_id' => 'required',
            ]);
            Medical::whereId($id)->update($attr);
            return $this->success(
                Medical::whereId($id),
                'updated successfuly'
            );
        } else
            return $this->error(
                'you dont have permission to display this data',
                520
            );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (auth('sanctum')->user()->is_admin == 1) {
            Medical::whereId($id)->delete();

            return $this->success(

                'city deleted successfuly'
            );
        } else
            return $this->error(
                'you dont have permission to display this data',
                520
            );
    }
}
