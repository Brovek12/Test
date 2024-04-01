@extends('layout/index')
@section('konten')
<h1>{{$judul}}</h1>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
    Laboriosam mollitia explicabo cupiditate consequatur amet? Velit unde vel delectus obcaecati odit.
</p>
<p>
    <ul>
        <li>{{ $tentang['umur'] }}</li>
        <li>{{ $tentang['hidup'] }}</li>
    </ul>
</p>
@endsection
      