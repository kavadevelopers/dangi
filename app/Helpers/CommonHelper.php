<?php
namespace App\Helpers;

use App\Models\GlobalSettings;

class CommonHelper{


    // Globle Func
    public static function getsetting($key){
        return app(GlobalSettings::class)->get($key);
    }
}