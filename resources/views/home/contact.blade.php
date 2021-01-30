<!-- resources/views/child.blade.php -->
@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp

@extends('layouts.home')

@section('title','İletişim -' . $setting->title)


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
                                <h1>İletişim</h1>
                            </div>
                            <div class="clearfix"></div>

                            <ol class="breadcrumb">
                                <li><a href="{{route('home')}}">Home /</a></li>
                                <li class="active"><a style="color: black" href="{{route('iletisim')}}">İletişim</a>
                                </li>
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

                <div class="col md-6">
                    <div class="section-title row text-center">
                        <div class="col-md-8 offset-md-2">

                            <h3>İletişim Bilgileri</h3>
                        </div>
                    </div><!-- end title -->
                    {!! $setting->contact !!}
                </div>
                <div class="col md-6">


                    <div class="section-title row text-center">
                        <div class="col-md-8 offset-md-2">

                            <h3>Bize Ulaşın</h3>
                        </div>
                    </div><!-- end title -->
                    @include('home.message')


                    <div class="contact_form">

                        <form method="post" action="{{route('sendmessage')}}">
                            @csrf
                            <fieldset class="row row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="name" class="form-control" placeholder="Ad & Soyad">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" class="form-control" placeholder="Mail">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="phone" class="form-control" placeholder="Telefon">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="subject" class="form-control" placeholder="Konu">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="message" placeholder="Mesajınız .."></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block subt">
                                        Mesaj Gönder
                                    </button>
                                </div>
                            </fieldset>
                        </form>
                    </div>


                </div>

            </div>
        </div>
    </div>
@endsection
