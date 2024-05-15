<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function introduce(){
        $data = [
            "nama" => "abdul jaelani",
            "alamat" => "Bandung",
            "agama" => "Islam",
            "jk" => "L",
            "hobi" => [
                "mancing", "ngurek", "menganyam"
            ]

        ];
        return view('latihan.perkenalan', compact('data'));
    }

    public function animals(){
        $animal = [
            'kucing', 'anjing', 'kelinci', 'sapi', 'babi', 'buaya'
        ];
        return view('latihan/animal', ['hewan' => $animal]);
    }
}
