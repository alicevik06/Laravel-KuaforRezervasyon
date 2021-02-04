<!-- resources/views/child.blade.php -->
@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp

@extends('layouts.home')

@section('title','User Profile')

<style>
    #personel {
        border-collapse: collapse;
        width: 100%;
    }

    #personel td, #personel th {
        border: 0px solid #ddd;
        padding: 8px;
    }

    #personel tr:nth-child(even){background-color: #f2f2f2;}

    #personel tr:hover {
        font-size: 14pt;
        background-color: #ee3b3b;
        color: white;
    }
    #personel td:hover {
        font-size: 14pt;
        background-color: #ee3b3b;
        color: white;
    }
    #personel a:hover {
        color: white;
    }

    #personel th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #2c3e50;
        color: white;
    }
</style>


@section('content')


    <!-- Page Content -->
    <div  id="page-content-wrapper">
        <div style="height: 300px"class="all-page-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="title title-1 text-center">
                            <div class="title--heading">
                                <h1>User Profile</h1>
                            </div>
                            <div class="clearfix"></div>

                            <ol class="breadcrumb">
                                <li><a href="{{route('home')}}">Home /</a></li>
                                <li class="active">User Profile</li>
                            </ol>

                            <div class="much">
                                <img src="uploads/mustache.png" alt=""/>
                            </div>


                        </div>
                        <!-- .title end -->
                    </div>
                </div>
            </div>
        </div><!-- end all-page-bar -->
    </div>
    <div class="section">

            <div class="row">
                <div class="col-2">

                </div>
                <div class="col-2">
@include('home.usermenu')
                </div>
                <div class="col-8">

                    <table id="tablo1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Adı</th>
                            <th>Telefon</th>
                            <th>Hizmet</th>
                            <th>Tarih</th>
                            <th>Saat</th>
                            <th>Status</th>
                            <th>Not</th>
                            <th colspan="3">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @include('home.message')
                        @foreach($datalist as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->name}}</td>
                                <td>{{$rs->phone}}</td>
                                <td>{{$rs->talephizmet}}</td>
                                <td>{{$rs->tarih}}</td>
                                <td>{{$rs->saat}}</td>
                                <td>{{$rs->status}}</td>
                                <td>{{$rs->Not}}</td>
                                <td>
                                <button type="reset" class="btn btn-danger text-center">
                                    <a style="color: white" href="" onclick="return confirm('Silmek İstedğinize Emin misiniz?')">
                                        Delete
                                    </a>
                                </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

            </div>

    </div>
@endsection
