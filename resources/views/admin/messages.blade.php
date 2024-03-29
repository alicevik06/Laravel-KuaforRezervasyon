@extends('layouts.admin')

@section('title', 'İletişim Mesajları Listesi')

@section('content')

    <!-- MAIN CONTENT-->

    <div class="main-content">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <h3>Mesajlar</h3>

                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Mesajlar</a></li>
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
                                            <table style="width: 500px;border: 1px solid black;" class="table table-striped table-earning">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Adı & Soyadı</th>
                                                    <th>Email</th>
                                                    <th>Telefon</th>
                                                    <th>Konu</th>
                                                    <th>Mesaj</th>
                                                    <th>Admin Note</th>
                                                    <th class="text-center" colspan="3">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach( $datalist as $rs )
                                                <tr>
                                                    <td>{{ $rs->id }}</td>

                                                    <td>{{ $rs->name }}</td>
                                                    <td>{{ $rs->email }}</td>
                                                    <td>{{ $rs->phone }}</td>
                                                    <td>{{ $rs->subject }}</td>
                                                    <td>{{ $rs->message }}</td>
                                                    <td>{!! $rs->note  !!} </td>
                                                    <td>{{ $rs->status }}</td>
                                                    <td>
                                                        <button type="reset" class="btn btn-info text-center">
                                                        <a style="color: white" href="{{route('admin_message_edit',['id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600')">
                                                            Edit
                                                        </a>
                                                        </button>
                                                    </td>


                                                    <td>
                                                        <button type="reset" class="btn btn-danger text-center">
                                                            <a style="color: white" href="{{route('admin_message_delete',['id' => $rs->id])}}" onclick="return confirm('Silmek İstedğinize Emin misiniz?')">
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
