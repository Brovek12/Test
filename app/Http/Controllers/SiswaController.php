<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index()
    {
        return '<h1> Saya siswa 1</h1>';
    }
    function detail ($id){
        return '<h1> Saya siswa dengan id </h1>';
    

    }
    function asalSekolah($as){
        return '<h1> Saya siswa asal Balikpapan </h1>';
    

    }
}
