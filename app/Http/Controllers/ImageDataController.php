<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\ImageData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageDataController extends Controller
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
            'name' => 'required|max:30',
            'description' => 'max:250',
            'image' => 'required|max:128000'
        ]);

        $count = 1;
        $url = str_replace("public", "storage", $request->image->store('public/images'), $count);

        $image_data = [
            'name'        => $request_data['name'],
            'description' => $request_data['description'],
            'url' => $url,
        ];

        /** @var ImageData */
        $image = ImageData::create($image_data);

        if ($request->has('zones')) {
            foreach ($request->zones as $id) {
                $image->zones()->attach($id);
            }
            $image->save();
        }

        return response()->redirectToRoute("admin.index")->with('success', 'Image Uploaded');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImagesData  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImageData $image)
    {

        $request_data = $request->validate([
            'name' => 'sometimes|max:30',
            'description' => 'sometimes|max:250',
            'image' => 'sometimes|max:128000'
        ]);

        if (isset($request_data['name'])) {
            $image->name = $request_data['name'];
        }
        if (isset($request_data['description'])) {
            $image->description = $request_data['description'];
        }
        if (isset($request_data['image'])) {
            $count = 1;
            $image->url = str_replace("storage", "public", $image->url, $count);
            Storage::delete($image->url);
            $image->url = str_replace("public", "storage", $request->image->store('public/images'), $count);
        }

        foreach ($image->zones as $id) {
            $image->zones()->detach($id);
        }
        if ($request->has('zones')) {
            foreach ($image->zones as $id) {
                $image->zones()->detach($id);
            }
            foreach ($request->zones as $id) {
                $image->zones()->attach($id);
            }
        }

        $image->save();
        return response()->redirectToRoute("admin.index")->with('success', 'Image Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImagesData  $img_data
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageData $image)
    {
        try {
            foreach ($image->zones as $zone) {
                $zone->images()->detach($image->id);
            }
            $count = 1;
            $image->url = str_replace("storage", "public", $image->url, $count);
            Storage::delete($image->url);
            $image->delete();
        } catch (Exception $e) {
            dd($e);
        }
        return response()->redirectToRoute("admin.index")->with('success', 'Image Deleted');
    }

    public function getInZoneUrls(String $zone)
    {
        $urls = [];
        foreach (ImageData::inZone($zone) as $image) {
            array_push($urls, url($image->url));
        }

        return json_encode($urls);
    }
}
