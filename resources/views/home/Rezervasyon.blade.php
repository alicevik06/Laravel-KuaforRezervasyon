<!-- resources/views/child.blade.php -->
@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp

@extends('layouts.home')

@section('title',$setting->title)


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
                                <h1>About</h1>
                            </div>
                            <div class="clearfix"></div>

                            <ol class="breadcrumb">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li class="active">About</li>
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

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif

            <div class="col-1"></div>
            <div style="background-image: url(http://127.0.0.1:8000/assets/uploads/b1.jpg);"
                 class="col-10 contact_form ">


                <form >
                    @csrf

                    <fieldset class="row row-fluid">
                        <table class="text-center">
                            <tr>
                                <td><h2><b>Adı Soyadı</b></h2></td>
                                <td>
                                    <input type="text"   class="form-control"
                                           placeholder="Ad & Soyad" READONLY>
                                </td>
                            </tr>
                            <tr>
                                <td><h2><b>Telefon</b></h2></td>
                                <td>
                                    <input type="text"  class="form-control" placeholder="Telefon"
                                           readonly>
                                </td>

                            </tr>
                            <tr>
                                <td><h2><b>Talep Edilen Hizmet</b></h2></td>
                                <td>
                                    <select class="form-control"  >
                                        <option>Saç</option>
                                        <option>Sakal</option>
                                    </select>

                                </td>
                            </tr>
                            <tr>
                                <td><h2><b>Tarih</b></h2></td>
                                <td>
                                    <input style="width: 400px" type="date"    >

                                </td>

                            </tr>
                            <tr>
                                <td><h2><b>Saat</b></h2></td>
                                <td>
                                    <input style="width: 400px"   type="time" ><br>

                                </td>
                            </tr>
                            <tr>

                                <th><h2><b>Rezervasyon Notu</b></h2></th>
                                <td>
                                    <textarea  style="width: 400px;" class="form-control" ></textarea>

                                </td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>

                                    <button type="submit"
                                            class="btn btn-light btn-radius btn-brd grd1 btn-block subt">
                                        Rezervasyon Talebi Gönder

                                    </button>
                                </td>

                            </tr>

                        </table>
                    </fieldset>
                </form>


            </div>

        </div>
    </div>
</div>
@endsection

