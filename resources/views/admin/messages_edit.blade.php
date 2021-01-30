<!-- Site Icons -->










<script src="{{ asset('assets') }}/admin/ckeditor/ckeditor.js"></script>





<!-- MAIN CONTENT-->

<div class="main-content">

    <div class="section__content section__content--p30">

            <div class="row">
                <div class="col-lg-12">

                    <div class="card">

                        <div style="background-color:royalblue " class="card-header">
                            <strong><label style="color: white">Mesaj Detay Sayfası</label></strong>
@include('home.message')
                        </div>

                        <div class="card-body">

                            <div class="card">

                                <div class="card-body card-block">
                                    <form action=" {{route('admin_message_update',['id' => $data->id])}} " method="post"
                                          class="form-horizontal" enctype="multipart/form-data">
                                        @csrf


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
                                                                <th>Telefon</th>
                                                                <td>{{ $data->phone }}</td>
                                                            </tr>
                                                            <tr bgcolor= #d3d3d3>
                                                                <th>Konu</th>
                                                                <td>{{ $data->subject }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Mesaj</th>
                                                                <td>{{ $data->message }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Admin Note</th>
                                                                <td><textarea class="ckeditor"
                                                                              name="note">{!! $data->note!!} </textarea>
                                                                    <script>
                                                                        $(document).ready(function() {
                                                                            $('#summernote').summernote();
                                                                        });
                                                                    </script>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>

                                                                </td>
                                                                <td>
                                                                    <div class="card-footer">
                                                                        <button type="submit"
                                                                                class="btn btn-primary btn-sm">
                                                                            <i class="fa fa-dot-circle-o"></i> Mesaj
                                                                            Düzenle

                                                                        </button>

                                                                    </div>
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
