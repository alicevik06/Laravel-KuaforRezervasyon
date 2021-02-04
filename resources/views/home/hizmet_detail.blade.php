<!-- resources/views/child.blade.php -->
@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp

@extends('layouts.home')

@section('title',$data->title)


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
                                <img src="uploads/mustache.png" alt=""/>
                            </div>

                            <div class="title--heading">
                                <h1>{{$data->title}}</h1>
                            </div>
                            <div class="clearfix"></div>

                            <ol class="breadcrumb">
                                <li><a href="{{route('home')}}">Home /</a></li>
                                <li class="active"> {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title)}} </li>
                                <li class="active">/ {{$data->title}}</li>

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

                <div id="page-content-wrapper">
                    <div class="section wb">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-7 text-left">
                                    <div style="height: 400px" class="message-box">

                                        <p>{!! $data->detail !!}</p>

                                        <a href="{{route('rezervasyon')}}" data-scroll
                                           class="btn btn-light btn-radius btn-brd grd1 effect-1">Randevu Al</a>

                                    </div><!-- end messagebox -->
                                </div><!-- end col -->
                                <div class="col-md-5 text-center">
                                    <div class="right-box">

                                        <img class="img-fluid" style="width: 600px;height: 400px;"
                                             src="{{Storage::url($data->image)}}" alt=""/>

                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <hr class="hr1">

                        </div><!-- end container -->
                    </div><!-- end section -->
                </div>

            </div>



            <div class="row">
                <div class="col-md-12">
                    <div class="about-tab">
                        <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" href="#tab_a" data-toggle="tab">Resim Galerisi</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab_b" data-toggle="tab">Rezervasyon</a></li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab_a">

                                <!-- Resim Galerisi -->
                                <div style="background-color: white" id="pricing" class="section lb">
                                    <div style="background-color: white" class="container">

                                        <div class="row flex-items-xs-middle flex-items-xs-center ">



                                            <!-- Table #1  -->
                                            @foreach($datalist as $rs)
                                                <div class="col-xs-12 col-lg-4">
                                                    <div class="card text-center">
                                                        <div class="card-block">


                                                            <div class="line-pricing">
                                                                <img style="width: 300px;height: 180px;" class="text-center item  display-table overlay" src="{{Storage::url($rs->image)}}" alt="" >
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <!--End Resim Galerisi -->

                            </div>
                            <div class="tab-pane fade" id="tab_b">

                                @livewire('rezervasyon', ['id'=>$data->id])
                                @livewireScripts
                            </div>

                        </div><!-- tab content -->
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->



        </div>
    </div>

@endsection
