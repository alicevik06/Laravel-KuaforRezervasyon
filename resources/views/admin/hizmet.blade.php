@extends('layouts.admin')

@section('title', 'Hizmet Listesi')

@section('content')

    <!-- MAIN CONTENT-->

    <div class="main-content">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <h3>Hizmetler</h3>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Hizmetler</a></li>
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
                                <div class="col-2"> <strong>Hizmetler Listesi</strong></div>

                                    <div class="col-8"></div>

                                </div>
                            </div>

                            <div class="card-body">
                                <div class="col-2"> <a href="{{route('admin_hizmet_add')}}" type="submit" class="btn btn-primary btn-sm">Hizmet Ekle</a></div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-40">
                                            <table style="width: 500px;border: 1px solid black;" class="table table-striped table-earning">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Category</th>
                                                    <th>Title</th>
                                                    <th>Price</th>
                                                    <th>İmage</th>
                                                    <th>İmage Gallery</th>
                                                    <th>Status</th>
                                                    <th class="text-center" colspan="2">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach( $datalist as $rs )
                                                <tr>
                                                    <td>{{ $rs->id }}</td>
                                                    <td>{{ $rs->category_id }}</td>
                                                    <td>{{ $rs->title }}</td>
                                                    <td>{{ $rs->price }}</td>
                                                    <td>
                                                        @if ($rs->image)
                                                        <img style="max-height: 100%;width: 64px; " src="{{ Storage::url($rs->image)}}"  alt="">
                                                        @endif
                                                    </td>
                                                    <td><a href="{{route('admin_image_add',['hizmet_id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                            <img style="height: 64px;width: 64px;" src="{{asset('assets/admin/images')}}/gallery.jpg">
                                                        </a>
                                                    </td>
                                                    <td>{{ $rs->status }}</td>
                                                    <td>
                                                        <button type="reset" class="btn btn-info text-center">
                                                            <a style="color: white" href="{{route('admin_hizmet_edit',['id' => $rs->id])}}" >
                                                                Edit
                                                            </a>
                                                        </button></td>
                                                    <td>
                                                        <button type="reset" class="btn btn-danger text-center">
                                                            <a style="color: white" href="{{route('admin_hizmet_delete',['id' => $rs->id])}}" onclick="return confirm('Silmek İstedğinize Emin misiniz?')">
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
