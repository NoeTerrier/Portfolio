<?php

namespace App\Http\Controllers;

use App\Models\ImageData;
use App\Models\Zone;
use Illuminate\Http\Request;
use Exception;

class ZoneController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Zone::create($request->validate(['label' => 'required|unique:zones|max:30']));
        return response()->redirectToRoute("admin.index")->with("success", "zone created");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zone $zone)
    {
        $request_data = $request->validate(['label' => 'sometimes|unique:zones|max:30']);

        if (isset($request_data['label'])) {
            $zone->label = $request_data['label'];
            $zone->save();
        }

        return response()->redirectToRoute("admin.index")->with('success', 'Zone updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zone $zone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zone $zone)
    {
        foreach ($zone->images as $image) {
            $image->zones()->detach($zone->id);
        }

        try {
            $zone->delete();
        } catch (Exception $e) {
            dd($e);
        }

        return response()->redirectToRoute("admin.index")->with('success', 'Zone Deleted');
    }
}
