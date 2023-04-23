<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;
use Exception;

class InvitationController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request_data = $request->validate([
            'eventName' => 'required|max:30',
            'description' => 'required|max:255',
            'date' => 'required'
        ]);

        $inv = Invitation::last();
        if (is_null($inv)) {
            Invitation::create($request_data);
        } else {
            $inv->eventName = $request_data['eventName'];
            $inv->description = $request_data['description'];
            $inv->date = $request_data['date'];
    
            $inv->save();
        }
    
        return response()->redirectToRoute("admin.index")->with('success', 'Invitation created');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invitation  $inv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invitation $inv)
    {
        $request_data = $request->validate([
            'eventName' => 'sometime|max:30',
            'description' => 'sometime|max:255',
            'date' => 'sometime'
        ]);

        if (isset($request_data['eventName'])) {
            $inv->eventName = $request_data['eventName'];
        }
        if (isset($request_data['description'])) {
            $inv->description = $request_data['description'];
        }
        if (isset($request_data['date'])) {
            $inv->date = $request_data['date'];
        }

        $inv->save();

        return response()->redirectToRoute("admin.index")->with('success', 'Invitation updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invitation $inv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invitation $inv)
    {
        try {
            $inv->delete();
        } catch (Exception $e) {
            dd($e);
        }

        return response()->redirectToRoute("admin.index")->with('success', 'Invitation deleted');
    }
}
