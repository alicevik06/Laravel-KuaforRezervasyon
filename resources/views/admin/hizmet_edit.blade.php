@extends('layouts.admin')

@section('title', 'Hizmet Ekleme')

@section('content')

    <!-- MAIN CONTENT-->

    <div class="main-content">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <h3>Hizmet Düzenle</h3>
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
                                <strong><label style="color: white">Hizmet Düzenleme Formu</label></strong>

                            </div>

                            <div class="card-body">

                                <div class="card">

                                    <div class="card-body card-block">
                                        <form action=" {{route('admin_hizmet_update',['id' => $data->id])}} " method="post"
                                              class="form-horizontal" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Parent</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="category_id" class="form-control-sm form-control">

                                                        @foreach( $datalist as $rs )
                                                            <option value="{{ $rs->id }}" @if ($rs->id == $data->category_id) selected="selected" @endif >{{ $rs->title }}</option>
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
                                                    <input type="text" name="description"  value="{{$data->description}}"class="form-control">

                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Image</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" name="image"  class="form-control">
                                                    @if ($data->image)
                                                        <img src="{{Storage::url($data->image)}}" height="60" alt="">
                                                    @endif
                                                </div>

                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>price</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number"  name="price" value="{{$data->price}}" class="form-control">

                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>detail</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea class="ckeditor" name="detail" >{{$data->detail}}</textarea>
                                                    <script>
                                                        $(document).ready(function() {
                                                            $('#summernote').summernote();
                                                        });
                                                    </script>

                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Slug</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="slug"  value="{{$data->slug}}" class="form-control">

                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label"><b>Status</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="status" id="SelectLm"
                                                            class="form-control-sm form-control">
                                                        <option selected="selected">{{$data->status}}</option>
                                                        <option>True</option>
                                                        <option>False</option>
                                                    </select>
                                                </div>
                                            </div>


                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Update Hizmet
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
