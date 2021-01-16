@extends('layouts.admin')

@section('title', 'Hizmet Ekleme')

@section('content')

    <!-- MAIN CONTENT-->

    <div style="width: 90%" class="main-content" >
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">

                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Setting Düzenle</a></li>
                    </ol>
                </div>
            </div>
        </div>




        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">

                            <div style="background-color: #ffc125;font-size: 18pt;" class="card-header text-center">
                                <strong><b><label  style="color: white">Ｓｅｔｔｉｎｇ Ｆｏｒｍ</label></b></strong>

                            </div>

                            <div class="card-body">

                                <div class="card">

                                    <div class="card-body card-block">
                                        <form action=" {{route('admin_setting_update')}} " method="post"
                                              class="form-horizontal" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">

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
                                                    <label><b>Company</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="company"  value="{{$data->company}}"class="form-control">

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
                                                    <label><b>Phone</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="phone"  value="{{$data->phone}}"class="form-control">

                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Fax</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="fax"  value="{{$data->fax}}"class="form-control">

                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>email</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="email"  value="{{$data->email}}"class="form-control">

                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Smtp Server</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="smtpserver"  value="{{$data->smtpserver}}"class="form-control">

                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Smtp Email</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="smtpemail"  value="{{$data->smtpemail}}"class="form-control">

                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Smtp Password</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" name="smtppassword"  value="{{$data->smtppassword}}"class="form-control">

                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Smtp Port</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="smtpport"  value="{{$data->smtpport}}"class="form-control">

                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Facebook</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="facebook"  value="{{$data->facebook}}"class="form-control">

                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Instagram</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="instagram"  value="{{$data->instagram}}"class="form-control">

                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Twitter</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="twitter"  value="{{$data->twitter}}"class="form-control">

                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Hakkımızda</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea class="ckeditor" name="aboutus" >{{$data->aboutus}}</textarea>
                                                    <script>
                                                        $(document).ready(function() {
                                                            $('#aboutus').summernote();
                                                        });
                                                    </script>

                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>İletişim</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea class="ckeditor" name="contact" >{{$data->contact}}</textarea>
                                                    <script>
                                                        $(document).ready(function() {
                                                            $('#contact').summernote();
                                                        });
                                                    </script>

                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Ekibimiz</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea class="ckeditor" name="ekip" >{{$data->ekip}}</textarea>
                                                    <script>
                                                        $(document).ready(function() {
                                                            $('#ekip').summernote();
                                                        });
                                                    </script>

                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Basında Biz</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea class="ckeditor" name="basinda_biz" >{{$data->basinda_biz}}</textarea>
                                                    <script>
                                                        $(document).ready(function() {
                                                            $('#basinda_biz').summernote();
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
                                            <i class="fa fa-dot-circle-o"></i> Update Setting
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
