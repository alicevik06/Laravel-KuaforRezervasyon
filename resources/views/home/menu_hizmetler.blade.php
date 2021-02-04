<!-- resources/views/child.blade.php -->
@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp

@extends('layouts.home')

@section('title',$data->title . " Hizmetleri" )


@section('description')
    {{ $data->description }}
@endsection

@section('keywords', $data->keywords)

@section('content')


    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="all-page-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="title title-1 text-center">
                            <div class="much">
                                <img src="{{ asset('assets') }}/uploads/mustache.png" alt=""/>
                            </div>

                            <div class="title--heading">
                                <h1>{{$data->title}}  Hizmetleri</h1>
                            </div>
                            <div class="clearfix"></div>

                            <ol class="breadcrumb">
                                <li><a href="{{route('home')}}">Home /</a></li>
                                <li class="active"> {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->title)}} </li>
                            </ol>
                        </div>
                        <!-- .title end -->
                    </div>
                </div>
            </div>
        </div><!-- end all-page-bar -->
    </div>
    <div  class="section">
        <div  class="container">
            <div class="row">

                <div style="background-image: url(http://127.0.0.1:8000/assets/uploads/b1.jpg);" id="services" class="section lb">
                    <div class="container">
                        <div class="section-title row text-center">
                            <div class="col-md-8 offset-md-2">
                                <h3>Hizmetlerimiz</h3>
                                <hr class="grd1">
                            </div>
                        </div><!-- end title -->

                        <div class="row">

                            @foreach($datalist as $rs)

                            <div class="col-md-4">
                                <div style="height: 300px"class="service-wrap text-center clearfix">
                                    <div  class="uptop">
                                        <img src="{{Storage::url($rs->image)}}" alt="" class="img-responsive img-rounded alignleft">
                                    </div>
                                    <h4>{{$rs->title}}</h4>
                                    <p>{{$rs->description}}</p>
                                    <a href="{{route('hizmet',['id'=>$rs->id,'slug'=>$rs->slug])}}" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Detaylı Bilgi..</a>
                                </div><!-- end issue -->

                            </div><!-- end col -->

                            @endforeach

                        </div>
                    </div><!-- end container -->
                </div><!-- e


            </div>
        </div>
    </div>
@endsection
