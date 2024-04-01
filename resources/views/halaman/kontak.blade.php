@extends('layout/index')
@section('konten')
<h1>{{ $judul }}</h1>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
    Laboriosam mollitia explicabo cupiditate consequatur amet? Velit unde vel delectus obcaecati odit.

    <p>
        <ul>
            <li> Email :: {{ $kontak['email'] }}</li>
            <li> Youtube :: {{ $kontak['fb'] }}</li>
        </ul>
    </p>
@endsection
        