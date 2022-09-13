<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datacontroller extends Controller
{
    function beranda() {
        $huruf = "aan";
        $angka1 = 123;
        $angka2 = 123;

        $json= array (
            'datahuruf' => $huruf,
            'dataangka1'=> $angka1,
            'dataangka2'=> $angka2,
        );
        return view('beranda', compact('json'));
    }


    public function data(){
        $huruf = "aan";
        $angka1 = 1323;
        $angka2 = 123;
        $json= array(
            'data1'=> $huruf,
            'data2'=> $angka1,
            'data3'=> $angka2,
        );
        return $json;
    }

}