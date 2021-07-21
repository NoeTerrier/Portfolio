<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = ['label'];

    public function images()
    {
        return $this->belongsToMany(ImageData::class, "images_zones");
    }
}
