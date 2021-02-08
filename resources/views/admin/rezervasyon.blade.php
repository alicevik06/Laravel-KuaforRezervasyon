@extends('layouts.admin')

@section('title', 'Rezervasyonlar')

@section('content')

    <!-- MAIN CONTENT-->

    <div class="main-content">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <h3>Rezervasyonlar</h3>

                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Rezervasyonlar</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">

                            <div class="card-header">
                                <div class="row">
                                <div class="col-2">@include('home.message')</div>

                                    <div class="col-8"></div>

                                </div>
                            </div>

                            <div class="card-body">
                                <div class="col-2"></div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-40">
                                            <table style="width: 500px;border: 1px solid black;" class="table table-bordered table-striped">
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
                                                @foreach( $datalist as $rs )
                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <td>
                                                        <a style="text-decoration: none;color: #0f74a8" href="{{route('admin_user_show',['id' => $rs->user->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=720,height=300')">
                                                            {{$rs->name}}
                                                        </a>


                                                    </td>
                                                    <td>{{$rs->phone}}</td>
                                                    <td>{{$rs->talephizmet}}</td>
                                                    <td>{{$rs->tarih}}</td>
                                                    <td>{{$rs->saat}}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td>{{$rs->Not}}</td>
                                                    <td>
                                                        <button type="reset" class="btn btn-info text-center">
                                                        <a style="color: white" href="{{route('admin_rezervasyon_show',['id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=720,height=300')">
                                                            Edit
                                                        </a>
                                                        </button>
                                                    </td>


                                                    <td>
                                                        <button type="reset" class="btn btn-danger text-center">
                                                            <a style="color: white" href="{{route('admin_rezervasyon_delete',['id' => $rs->id])}}" onclick="return confirm('Silmek İstedğinize Emin misiniz?')">
                                                                Delete
                                                            </a>
                                                        </button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- END DATA TABLE-->
                                    </div>
                                </div>

                                </div>

                            <div class="card-footer">

                                <strong>Footer</strong>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- END PAGE CONTAINER-->
@endsection
