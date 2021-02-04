<div class="section">
    <div class="container">
        <div class="row">

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif

            <div class="col-1"></div>
            <div style="background-image: url(http://127.0.0.1:8000/assets/uploads/b1.jpg);"
                 class="col-10 contact_form ">


                <form wire:submit.prevent="store">
                    @csrf

                    <fieldset class="row row-fluid">
                        <table class="text-center">
                            <tr>
                                <td><h2><b>Adı Soyadı</b></h2></td>
                                <td>
                                    <input type="text" wire:model="name" class="form-control"
                                           placeholder="Ad & Soyad">

                                </td>
                            </tr>
                            <tr>
                                <td><h2><b>Telefon</b></h2></td>
                                <td>
                                    <input type="text" wire:model="phone" class="form-control" placeholder="Telefon">


                                </td>

                            </tr>
                            <tr>
                                <td><h2><b>Talep Edilen Hizmet </b></h2></td>
                                <td>
                                    <select wire:model="talephizmet" class="form-control">
                                        @foreach($data as $rs)
                                            <option>{{$rs->title}}</option>
                                        @endforeach
                                    </select>

                                </td>
                            </tr>
                            <tr>
                                <td><h2><b>Tarih</b></h2></td>
                                <td>
                                    <input style="width: 400px" wire:model="tarih" type="date">

                                </td>

                            </tr>
                            <tr>
                                <td><h2><b>Saat</b></h2></td>
                                <td>
                                    <input style="width: 400px" wire:model="saat" type="time"><br>

                                </td>
                            </tr>
                            <tr>

                                <th><h2><b>Rezervasyon Notu</b></h2></th>
                                <td>
                                    <textarea wire:model="Not" style="width: 400px;" class="form-control"></textarea>

                                </td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    @auth
                                        <button type="submit"
                                                class="btn btn-light btn-radius btn-brd grd1 btn-block subt">
                                            Rezervasyon Talebi Gönder
                                        </button>
                                    @else
                                        <a href="/login" class="btn btn-light btn-radius btn-brd grd1 btn-block subt">Rezervasyon
                                            için Giriş Yapınız</a>
                                    @endauth
                                </td>

                            </tr>

                        </table>
                    </fieldset>
                </form>


            </div>

        </div>
    </div>
</div>
