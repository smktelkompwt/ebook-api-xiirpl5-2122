<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Wongtua;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return [
            "status" => "200",
            "message" => "Load data success",
            "data" => Wongtua::all()
        ];
        // return Wongtua::all();
        // return Wongtua::get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Wongtua::create([
            "name" => $request->name,
            "gender" => $request->gender,
            "umur" => $request->umur,
        ]);

        return [
            "status" => "201",
            "message" => "Create data success",
            "data" => $data
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data = Wongtua::where("id", $id)->get();
        $data = Wongtua::find($id);

        if($data){
            return [
                "status" => "200",
                "message" => "Load detail data success",
                "data" => $data
            ];
        }else{
            return [
                "status" => "405",
                "message" => "Data not found"
            ];
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
        $data = Wongtua::find($id);
        if($data){
            $data->name = $request->name;
            $data->gender = $request->gender;
            $data->umur = $request->umur;
            $data->save();

            return [
                "status" => "204",
                "message" => "Update data success",
            ];
        }else{
            return [
                "status" => "405",
                "message" => "Data not found"
            ];
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
        // Wongtua::destroy($id);

        $data = Wongtua::find($id);
        if($data){
            $data->delete();
            return [
                "status" => "204",
                "message" => "Remove success"
            ];
        }else{
            return [
                "status" => "404",
                "message" => "Data not found"
            ];
        }
    }
}
