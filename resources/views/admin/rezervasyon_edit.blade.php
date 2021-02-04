<!-- Site Icons -->










<script src="{{ asset('assets') }}/admin/ckeditor/ckeditor.js"></script>





<!-- MAIN CONTENT-->

<div class="main-content">

    <div class="section__content section__content--p30">

            <div class="row">
                <div class="col-lg-12">

                    <div class="card">

                        <div style="background-color:#ecab53 " class="card-header">
                            <strong><label style="color: white;font-size: 16pt;">Rezervasyon Değerlendirme Sayfası</label></strong>
@include('home.message')
                        </div>

                        <div class="card-body">

                            <div class="card">

                                <div class="card-body card-block">
                                    <form action=" {{route('admin_rezervasyon_update',['id' => $data->id])}} " method="post"
                                          class="form-horizontal" enctype="multipart/form-data">
                                        @csrf


                                        <div class="card-body">
                                            <div class="col-2"></div>
                                            <div class="row m-t-30">
                                                <div class="col-md-12">
                                                    <!-- DATA TABLE-->

                                                        <table style="width: 700px;"
                                                               class="table table-bordered table-striped">

                                                            <tr  >
                                                                <th>Id</th>
                                                                <td>{{ $data->id }}</td>
                                                            </tr>
                                                            <tr bgcolor="#eeeed1">
                                                                <th>Adı & Soyadı</th>
                                                                <td>{{ $data->name }}</td>
                                                            </tr>
                                                            <tr >
                                                                <th>Telefon</th>
                                                                <td>{{ $data->phone }}</td>
                                                            </tr>
                                                            <tr bgcolor= #eeeed1>
                                                                <th>Talep Edilen Hizmet</th>
                                                                <td>{{ $data->talephizmet }}</td>
                                                            </tr>
                                                            <tr >
                                                                <th>Tarih</th>
                                                                <td>{{ $data->tarih }}</td>
                                                            </tr>
                                                            <tr bgcolor= #eeeed1>
                                                                <th>Saat</th>
                                                                <td>{{ $data->saat }}</td>
                                                            </tr>
                                                            <tr  >
                                                                <th>Randevu Notu</th>
                                                                <td>
                                                                    {!! $data->Not!!}

                                                                </td>

                                                            </tr>
                                                            <tr bgcolor= #eeeed1>
                                                                <th>Status</th>
                                                                <td>
                                                                    <select name="status">
                                                                        <option selected>{{$data->status}}</option>
                                                                        <option>Onaylandı</option>
                                                                        <option>Reddedildi</option>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th style="font-size: 13pt">
                                                                    °°°·.°·..·°¯°·._.· 𝔸𝕔 𝕂𝕦𝕒𝕗𝕠𝕣 ·._.·°¯°·.·° .·°°°
                                                                </th>
                                                                <td class="text-center">
                                                                    <div class="card-footer">
                                                                        <button style="background-color: #ecab53;border-radius: 50px;height: 40px;font-size: 12pt;" type="submit"
                                                                                class="btn btn-info text-center">
                                                                            <b>Rezerve Düzenle</b>

                                                                        </button>

                                                                    </div>
                                                                </td>
                                                            </tr>


                                                        </table>


                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>

                            <div class="card-footer">



                            </div>
                        </div>

                    </div>
                </div>
            </div>

    </div>


    <!-- END PAGE CONTAINER-->
