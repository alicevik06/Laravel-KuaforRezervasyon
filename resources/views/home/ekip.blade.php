<!-- resources/views/child.blade.php -->
@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp

@extends('layouts.home')

@section('title','Ekibimiz -' . $setting->title)


@section('description')
    {{ $setting->description }}
@endsection

@section('keywords', $setting->keywords)

@section('content')


    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="all-page-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="title title-1 text-center">
                            <div class="much">
                                <img src="uploads/mustache.png" alt=""/>
                            </div>

                            <div class="title--heading">
                                <h1>Ekibimiz</h1>
                            </div>
                            <div class="clearfix"></div>

                            <ol class="breadcrumb">
                                <li><a href="{{route('home')}}">Home /</a></li>
                                <li class="active"><a style="color: black" href="{{route('aboutus')}}">Ekip</a></li>
                            </ol>
                        </div>
                        <!-- .title end -->
                    </div>
                </div>
            </div>
        </div><!-- end all-page-bar -->
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
        {!! $setting->ekip !!}
            </div>
        </div>
    </div>
@endsection
