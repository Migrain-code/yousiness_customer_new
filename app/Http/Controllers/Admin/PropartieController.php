<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Propartie;
use Illuminate\Http\Request;

class PropartieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proparties=Propartie::orderBy('name')->get();
        return view('admin.propartie.index', compact('proparties'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.propartie.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $propartie=new Propartie();
        $propartie->name=$request->input('name');
        $propartie->description=$request->input('description');
        if ($propartie->save()){
            return to_route('admin.propartie.index')->with('response', [
                'status'=>"success",
                'title'=>"Başarılı",
                'message'=>"Özellik Eklendi"
            ]);
        }
        return to_route('admin.propartie.index')->with('response', [
            'status'=>"danger",
            'title'=>"Hata",
            'message'=>"Bir hata sebebi ile Özellik Eklenemedi"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Propartie  $propartie
     * @return \Illuminate\Http\Response
     */
    public function show(Propartie $propartie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Propartie  $propartie
     * @return \Illuminate\Http\Response
     */
    public function edit(Propartie $propartie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Propartie  $propartie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propartie $propartie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Propartie  $propartie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propartie $propartie)
    {
        if ($propartie->delete()){
            return response()->json([
                'status'=>"success",
            ]);
        }
    }
}
