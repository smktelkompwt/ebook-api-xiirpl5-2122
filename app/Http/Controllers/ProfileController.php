<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index(){
        $data = [
            "status" => "200",
            "message" => "sukses versi 3 - post",
            "me" => [
                "name" => "AiC",
                "level" => "mitic"
            ]
        ];

        return $data;
    }
}
