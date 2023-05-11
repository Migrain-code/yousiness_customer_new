<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivitySponsor;
use Illuminate\Http\Request;

class ActivitySponsorController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$request->dd();
        $activitySponsor=new ActivitySponsor();
        $activitySponsor->activity_id=$request->input('activity_id');
        if (boolval($request->input('status')) == 1){
            $activities=ActivitySponsor::where('activity_id', $request->input('activity_id'))->update([
                'status'=>0,
            ]);
            $activitySponsor->status=boolval($request->input('status'));
        }

        $activitySponsor->image=$request->file('image')->store('activity_sponsor_images');
        if ($activitySponsor->save()){
            return to_route('admin.activity.edit', $request->input('activity_id'))->with('response', [
                'status'=>"success",
                'message'=>"Sponsor Eklendi",
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ActivitySponsor  $activitySponsor
     * @return \Illuminate\Http\Response
     */
    public function show(ActivitySponsor $activitySponsor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ActivitySponsor  $activitySponsor
     * @return \Illuminate\Http\Response
     */
    public function edit(ActivitySponsor $activitySponsor)
    {
        return view('admin.activity.sponsor_edit', compact('activitySponsor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ActivitySponsor  $activitySponsor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ActivitySponsor $activitySponsor)
    {
        if ($request->hasFile('image')){
            $activitySponsor->image=$request->file('image')->store('activity_sponsor_images');
        }
        if ($request->input('status')){

            ActivitySponsor::where('activity_id', $activitySponsor->activity_id)->update([
                'status'=>0,
            ]);

            $activitySponsor->status=boolval($request->input('status'));
        }

        if ($activitySponsor->save()){
            return to_route('admin.activity.edit', $activitySponsor->activity_id)->with('response', [
                'status'=>"success",
                'message'=>"Sponsor Bilgisi Güncellendi",
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ActivitySponsor  $activitySponsor
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActivitySponsor $activitySponsor)
    {
        if ($activitySponsor->delete()){
            return response()->json([
               'status'=>"success",
            ]);
        }
    }
}
