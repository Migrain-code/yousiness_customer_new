<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BusinessInfo;
use Illuminate\Http\Request;

class BusinessInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos=BusinessInfo::latest()->get();
        return view('admin.info.index', compact('infos'));

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
    public function updateStatus(Request $request)
    {
        $message="";
        $info=BusinessInfo::find($request->id);
        if ($info->status == 1){
            $info->status=0;
            $message="Aranmadı olarak güncellendi";
        }
        else{
            $info->status=1;
            $message="Arandı olarak güncellendi";

        }
        if ($info->save()){
            return response()->json([
                'status'=>"success",
                'message'=>$message
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusinessInfo  $businessInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessInfo $businessInfo)
    {
        if ($businessInfo->delete()){
            return response()->json([
               'status'=>"success"
            ]);
        }
    }
}
