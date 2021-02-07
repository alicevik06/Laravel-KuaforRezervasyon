@extends('layouts.admin')

@section('title', 'Hizmet Ekleme')

@section('content')

    <!-- MAIN CONTENT-->

    <div class="main-content">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <h3>Kullanıcı Düzenle</h3>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Hizmet Düzenle</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">

                            <div style="background-color:royalblue " class="card-header">
                                <strong><label style="color: white">Kullanıcı Düzenleme Formu</label></strong>
@include('home.message')
                            </div>

                            <div class="card-body">

                                <div class="card">

                                    <div class="card-body card-block">
                                        <form action=" {{route('admin_user_update',['id' => $data->id])}} " method="post"
                                              class="form-horizontal" enctype="multipart/form-data">
                                            @csrf

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Name</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="name" value="{{$data->name}}" class="form-control">

                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>E-mail</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="email" value="{{$data->email}}" class="form-control">

                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Phone</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="phone"  value="{{$data->phone}}"class="form-control">

                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Address</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="address"  value="{{$data->address}}"class="form-control">

                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Image</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" name="image"  class="form-control">
                                                    @if ($data->profile_photo_path)
                                                        <img src="{{Storage::url($data->profile_photo_path)}}" height="50" style="border-radius: 10px;">
                                                    @endif
                                                </div>

                                            </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Güncelle
                                        </button>

                                    </div>
                                    </form>
                                </div>

                            </div>

                            <div class="card-footer">

                                <strong>..</strong>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- END PAGE CONTAINER-->
@endsection
