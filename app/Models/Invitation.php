<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invitation extends Model
{
    use HasFactory;

    public $timestamps = true;

    public $fillable = ['eventName', 'date', 'description'];


    //========= DB FUNCTIONS =========//
    public static function last()
    {

        return static::query()->latest()->first();
    }
}
