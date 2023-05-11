<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\BussinessPackagePropartie;
use App\Models\BussinessPackagePropartieList;
use Illuminate\Http\Request;

class BussinessPackagePropartieListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proparties = BussinessPackagePropartieList::latest()->get();
        return view('admin.package_propartie.index', compact('proparties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => "required",
        ], [], [
            'name' => "Özellik Adı",
        ]);
        $bussinessPackagePropartieList = new BussinessPackagePropartieList();
        $bussinessPackagePropartieList->name = $request->input('name');
        if ($bussinessPackagePropartieList->save()) {
            return to_route('admin.bussinessPackagePropartieList.index')->with('response', [
                'status'=>"success",
                'title'=>"Başarılı",
                'message'=>"Özellik Listeye Eklendi"
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\BussinessPackagePropartieList $bussinessPackagePropartieList
     * @return \Illuminate\Http\Response
     */
    public function show(BussinessPackagePropartieList $bussinessPackagePropartieList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\BussinessPackagePropartieList $bussinessPackagePropartieList
     * @return \Illuminate\Http\Response
     */
    public function edit(BussinessPackagePropartieList $bussinessPackagePropartieList)
    {

        return view('admin.package_propartie.edit', compact('bussinessPackagePropartieList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BussinessPackagePropartieList $bussinessPackagePropartieList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BussinessPackagePropartieList $bussinessPackagePropartieList)
    {
        $request->validate([
            'name' => "required",
        ], [], [
            'name' => "Özellik Adı",
        ]);
        $bussinessPackagePropartieList = new BussinessPackagePropartieList();
        $bussinessPackagePropartieList->name = $request->input('name');
        if ($bussinessPackagePropartieList->save()) {
            return to_route('admin.bussinessPackagePropartieList.index')->with('response', [
                'status'=>"success",
                'title'=>"Başarılı",
                'message'=>"Özellik Bilgisi Güncellendi"
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\BussinessPackagePropartieList $bussinessPackagePropartieList
     * @return \Illuminate\Http\Response
     */
    public function destroy(BussinessPackagePropartieList $bussinessPackagePropartieList)
    {
        if ($bussinessPackagePropartieList->delete()){
            BussinessPackagePropartie::where('propartie_id', $bussinessPackagePropartieList->id)->delete();
            return response()->json([
               'status'=>"success",
               'message'=>"Özellik Silindi"
            ]);
        }
    }
}
