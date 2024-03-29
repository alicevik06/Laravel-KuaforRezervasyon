@extends('layouts.admin')

@section('title', 'Menü Düzenleme')

@section('content')

    <!-- MAIN CONTENT-->

    <div class="main-content">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <h3>Menu Düzenle</h3>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Add Menu</a></li>
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
                                <strong><label style="color: white">Menü Düzenleme Formu</label></strong>

                            </div>

                            <div class="card-body">

                                <div class="card">

                                    <div class="card-body card-block">
                                        <form action=" {{route('admin_category_update',['id' => $data->id] )}} " method="post"
                                              class="form-horizontal">
                                            @csrf
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Parent</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="parent_id" class="form-control-sm form-control">
                                                        <option value="0">Ana Kategori</option>
                                                        @foreach( $datalist as $rs )
                                                            <option value="{{ $rs->id }}" @if ($rs->id == $data->parent_id) selected="selected" @endif >
                                                                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}

                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Title</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="title" value="{{$data->title}}" class="form-control">

                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Keywords</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">

                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Description</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="description" value="{{$data->description}}" class="form-control">

                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Slug</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="slug" value="{{$data->slug}}" class="form-control">

                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label"><b>Status</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="status" id="SelectLm" class="form-control-sm form-control">
                                                        <option selected="selected">{{$data->status}}</option>
                                                        <option>False</option>
                                                        <option>True</option>
                                                    </select>
                                                </div>
                                            </div>


                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Update Menu
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
