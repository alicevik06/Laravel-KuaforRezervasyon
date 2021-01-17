@extends('layouts.admin')

@section('title', 'Category List')

@section('content')

    <!-- MAIN CONTENT-->

    <div class="main-content">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <h3>Menüler(Kategoriler)</h3>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Menüler</a></li>
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
                                <div class="col-2"> <strong>Menu List</strong></div>
                                <div class="col-8"></div>
                                <div class="col-2"> <a href="{{route('admin_category_add')}}" type="submit" class="btn btn-primary btn-sm">Menü Ekle</a></div>
                                </div>
                            </div>

                            <div class="card-body">

                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-40">
                                            <table class="table table-borderless table-striped table-earning">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Parent</th>
                                                    <th>Title</th>
                                                    <th>Status</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach( $datalist as $rs )
                                                <tr>
                                                    <td>{{ $rs->id }}</td>

                                                    <td>
                                                        {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                                    </td>

                                                    <td>{{ $rs->title }}</td>
                                                    <td>{{ $rs->status }}</td>
                                                    <td>
                                                        <button type="reset" class="btn btn-info">
                                                            <a style="color: white" href="{{route('admin_category_edit',['id' => $rs->id])}}" >
                                                                Edit
                                                            </a>
                                                        </button></td>
                                                    <td>
                                                        <button type="reset" class="btn btn-danger">
                                                            <a style="color: white" href="{{route('admin_category_delete',['id' => $rs->id])}}" onclick="return confirm('Silmek İstedğinize Emin misiniz?')">
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
