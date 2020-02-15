<?php

namespace App\Http\Controllers;

use App\Ruangan;
use App\Studio;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $studio = Studio::all();
        foreach ($studio as $item)
        $id = $item->id;
        $total = Ruangan::all()->where('id_studio','=',$id)->count();
        return view('user.index',[
            'studio' => $studio,
            'total' => $total
        ]);
    }

    public function indexMitra(){
        return view('user.mitra');
    }

    public function detail(Studio $studio){
        $id = $studio->id;
        $studio = Studio::all()->where('id','=',$id);
        $ruangan = Ruangan::all()->where('id_studio','=',$id);
        $total = Ruangan::all()->where('id_studio','=',$id)->count();
        return view('user.detail',[
            'ruangan' => $ruangan,
            'studio' => $studio,
            'total' => $total
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function show(Studio $studio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function edit(Studio $studio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Studio $studio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Studio $studio)
    {
        //
    }
}
