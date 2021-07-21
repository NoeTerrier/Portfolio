<?php

namespace App\Models;

use App\Models\Zone;
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
}
