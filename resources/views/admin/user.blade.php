@extends('layouts.admin')

@section('title', 'Kullanıcı Listesi')

@section('content')

    <!-- MAIN CONTENT-->

    <div class="main-content">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <h3>Kullanıcılar</h3>
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
                                <div class="col-2"> <strong>Kullanıcı Listesi</strong></div>

                                    <div class="col-8"></div>
                                    <div class="col-2"> <a href="{{route('admin_hizmet_add')}}" type="submit" class="btn btn-primary btn-sm">Hizmet Ekle</a></div>

                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-40">
                                            <table style="border: 1px solid black;" class="table table-striped table-earning">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th></th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Address</th>
                                                    <th>Roles</th>
                                                    <th class="text-center" colspan="2">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach( $datalist as $rs )
                                                <tr>
                                                    <td>{{ $rs->id }}</td>
                                                    <td>
                                                        @if ($rs->profile_photo_path)
                                                            <img src="{{Storage::url($rs->profile_photo_path)}}"  style="border-radius: 50px;height: 75px;">
                                                        @endif
                                                    </td>
                                                    <td>{{ $rs->name }}</td>
                                                    <td>{{ $rs->email }}</td>
                                                    <td>{{ $rs->phone }}</td>
                                                    <td>{{ $rs->address }}</td>
                                                    <td>
                                                        @foreach($rs->roles as $row)
                                                            {{$row->name}},
                                                        @endforeach
                                                        <a href="{{route('admin_user_roles',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=100 left=300 width=800 ,height=600')">
                                                            <img  src="{{asset('assets/admin/images')}}/add-button.png" height="25">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('admin_user_edit',['id' => $rs->id])}}"><img style="height: 50px" src="{{asset('assets/admin/images')}}/3598.png" height="25"></a>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('admin_user_delete',['id' => $rs->id])}}" onclick="return confirm('Silmek İstediğine Eminmisin?')"><img style="height: 50px" src="{{asset('assets/admin/images')}}/1133.jpg" height="25"></a>
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
