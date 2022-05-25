<?php

namespace App\Http\Controllers;

use App\Models\Activitie;
use App\Models\Category;
use Illuminate\Http\Request;

class ActivitieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Activitie::with('category')->paginate(4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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
            'data' => 'required',
            'local' => 'required',
            'preletores' => 'required',
            'id_categoria' => 'required'
        ]);

        $input = $request->all();
        
        return Activitie::create($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $activities = Activitie::with('category')->find($id); 
        return $activities;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $activitie = Activitie::find($id);
        $activitie->update($request->all());
        return $activitie;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Activitie::destroy($id);
    }
}
