<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index()
    {
        return view("halaman/index");
    }
    function tentang (){
        
       $data =[
        'judul' =>' Halaman tentang',
        'tentang'=> [
            'umur' => '12',
            'hidup'=> 'balikpapan'
        ]

       ];
       return view("halaman/tentang")->with($data);
    }
    function kontak(){
        $data =[
            'judul'=>'ini adalah haalman',
            'kontak'=>[
                'email'=> 'upik@gamil.com',
                'fb' => 'apa kek'

        ]


            ];
        return view("halaman/kontak")->with($data);

    }
    function alamat(){
        return view("halaman/alamat");

    }
}
