<?php
namespace App\Http\Helpers;
use Hashids\Hashids;

class HashHelper {
    public static function encode($id) {
        $hashids = new Hashids('', 100);
        return $hashids->encode($id);
    }

    public static function decode($hash) {
        $hashids = new Hashids('', 100);
        return $hashids->decode($hash)[0];
    }
}