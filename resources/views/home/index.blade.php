<!-- resources/views/child.blade.php -->

@extends('layouts.home')

@section('title', 'Sub Page Title')

@section('sidebar')
    <div style="background-color: yellow" class="col-sm-3 col-lg-2">
        <ul>
            <li>Bilgisayar</li>
            <li>Elektronik</li>
            <li>Ev eşyaları</li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="col-sm-9 col-lg-10">
    <h1>Slider </h1>
    aaaaaaaa
    <br>
    bbbbbbbbbbbbb
    <br>
    <h1>içeriklerimiz</h1>
    </div>
@endsection

