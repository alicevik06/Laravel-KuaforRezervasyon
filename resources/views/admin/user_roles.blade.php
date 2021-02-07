<!-- Site Icons -->

<script src="{{ asset('assets') }}/admin/ckeditor/ckeditor.js"></script>





<!-- MAIN CONTENT-->

<div class="main-content">

    <div class="section__content section__content--p30">

            <div class="row">
                <div class="col-lg-12">

                    <div class="card">

                        <div style="background-color:royalblue " class="card-header">
                            <strong><label style="color: white">Kullanıcı Rol Denetimi </label></strong>
@include('home.message')
                        </div>

                        <div class="card-body">

                            <div class="card">

                                <div class="card-body card-block">
                                    <div class="card-body">
                                            <div class="col-2"></div>
                                            <div class="row m-t-30">
                                                <div class="col-md-12">
                                                    <!-- DATA TABLE-->
                                                    <div class="table-responsive m-b-40">
                                                        <table style="width: 700px;border: 1px solid black;"
                                                               class="table table-striped table-earning">

                                                            <tr bgcolor="#d3d3d3" >
                                                                <th>Id</th>
                                                                <td>{{ $data->id }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Adı & Soyadı</th>
                                                                <td>{{ $data->name }}</td>
                                                            </tr>
                                                            <tr bgcolor= #d3d3d3>
                                                                <th>Email</th>
                                                                <td>{{ $data->email }}</td>
                                                            </tr>
                                                           <tr>
                                                               <th>Roles</th>
                                                               <td>
                                                                   <table>
                                                                       @foreach($data->roles as $row)
                                                                           <tr>
                                                                               <td>{{$row->name}}</td>
                                                                               <td>
                                                                                   <a href="{{route('admin_user_role_delete', ['userid' => $data->id, 'roleid'=>$row->id])}}" onclick="return confirm('Silmek İstedğinize Emin misiniz?')">
                                                                                       <img  src="{{asset('assets/admin/images')}}/x-button.png" height="25">
                                                                                   </a>
                                                                               </td>
                                                                           </tr>
                                                                       @endforeach
                                                                   </table>
                                                               </td>
                                                           </tr>





                                                            <tr>
                                                                <td>Role Ekle</td>
                                                                <td>
                                                                    <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <select name="roleid">
                                                                            @foreach($datalist as $rs)
                                                                                <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        <button type="submit" class="btn btn-primary">Role Ekle</button>
                                                                    </form>
                                                                </td>
                                                            </tr>


                                                        </table>

                                                    </div>
                                                </div>
                                            </div>
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


    <!-- END PAGE CONTAINER-->
