<html>
<head>
    <title>
      Resim Galerisi
    </title>
    <!-- Fontfaces CSS-->
    <link href="{{ asset('assets') }}/admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets') }}/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets') }}/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets') }}/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('assets') }}/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('assets') }}/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets') }}/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets') }}/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets') }}/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets') }}/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets') }}/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets') }}/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="{{ asset('assets') }}/admin/css/theme.css" rel="stylesheet" media="all">
</head>
<body>


        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">

                            <div style="background-color:royalblue " class="card-header">
                                <strong><label style="color: white">Hizmet : {{$data->title}}</label></strong>

                            </div>

                            <div class="card-body">

                                <div class="card">

                                    <div class="card-body card-block">
                                        <form action=" {{route('admin_image_store',['hizmet_id'=>$data->id])}} "
                                              method="post" class="form-horizontal" enctype="multipart/form-data">
                                            @csrf

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Title</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="title" class="form-control">

                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label><b>Image</b></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" name="image" class="form-control">

                                                </div>
                                            </div>

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Resim Ekle
                                                </button>
                                            </div>

                                        </form>

                                        <table style="width: 600px;border: 1px solid black;"
                                               class="table  table-striped table-earning">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Title</th>
                                                <th>İmage</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($images as $rs )
                                                    <tr>
                                                        <td>{{ $rs->id }}</td>
                                                        <td>{{ $rs->title }}</td>
                                                        <td>
                                                            @if ($rs->image)
                                                                <img style="max-height: 80px;width: 64px; "
                                                                     src="{{ Storage::url($rs->image)}}" alt="">
                                                            @endif
                                                        </td>
                                                        <td>
                                                        <a href="{{route('admin_image_delete',['id' => $rs->id,'hizmet_id'=>$data->id])}}" onclick="return confirm('Silmek İstedğinize Emin misiniz?')">
                                                            <img style="height: 32px;width: 32px;" src="{{asset('assets/admin/images')}}/delete.png"></a>


                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

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


</body>
</html>
