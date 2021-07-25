<?php

namespace App\Models;

use App\Models\Zone;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImageData extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = ['name', 'url', 'description'];

    public function zones()
    {
        return $this->belongsToMany(Zone::class, "images_zones");
    }


    //========= DB FUNCTIONS =========//
    public static function inZone($labelName)
    {
        return DB::table('images_zones')
            ->join('image_data', 'image_data_id', '=', 'image_data.id')
            ->join('zones', 'zone_id', '=', 'zones.id')
            ->where('label', $labelName)
            ->get();
    }
}
