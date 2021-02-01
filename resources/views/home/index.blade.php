<!-- resources/views/child.blade.php -->
@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp

@extends('layouts.home')

@section('title',$setting->title)


@section('description')
    {{ $setting->description }}
@endsection

@section('keywords', $setting->keywords)



@section('content')
    <!-- Page Content -->
    @include('home._slider')

    <!-- Search Form -->
    <form action="{{route('getHizmet')}}" class="form-wrapper cf"  method="post">
        @csrf
        @livewire('search')
        <button style="height: 50px" type="submit">ARA</button>
    </form>
    @livewireScripts
    <!-- End Search Form -->



    <div id="page-content-wrapper">
        <div class="section wb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-left">
                        <div class="message-box">
                            <h4>Hoşgeldiniz</h4>
                            <h2>Saç Kesiminiz Size Özel Olmalıdır. Aynı Parmak İziniz Gibi</h2>
                            @foreach($aboutt as $rs)
                            <p> {!! $rs->aboutus !!} </p>

                            <a href="{{route('basindabiz')}}" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Basında Kalitemiz</a>
                            @endforeach
                        </div><!-- end messagebox -->
                    </div><!-- end col -->
                    <div class="col-md-6 text-center">
                        <div class="right-box">
                            <img class="img-fluid" src="{{ asset('assets') }}/uploads/about-img.jpg" alt="" />
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="hr1">

            </div><!-- end container -->
        </div><!-- end section -->

        <div id="pricing" class="section lb">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <small></small>
                        <h3>Erkek Bölümü Hizmetlerimiz</h3>
                    </div>
                </div><!-- end title -->
                <div class="row flex-items-xs-middle flex-items-xs-center">

                    <!-- Table #1  -->
                    <div class="col-xs-12 col-lg-4">
                        <div class="card text-center">
                            <div class="card-block">
                                <h4 class="card-title pricing-ti">
                                    Saç
                                </h4>
                                @foreach($ErkekSac as $rs)
                                <div class="line-pricing">
                                    <h5>{{$rs->title}}</h5>
                                    <p>{{$rs->description}}</p>
                                    <a href="#">{{$rs->price}}₺</a>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <!-- Table #1  -->
                    <div class="col-xs-12 col-lg-4">
                        <div class="card text-center">
                            <div class="card-block">
                                <h4 class="card-title pricing-ti">
                                    Sakal
                                </h4>
                                @foreach($ErkekSakal as $rs)
                                <div class="line-pricing">
                                    <h5>{{$rs->title}}</h5>
                                    <p>{{$rs->description}}</p>
                                    <a href="#">{{$rs->price}}₺</a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Table #1  -->
                    <div class="col-xs-12 col-lg-4">
                        <div class="card text-center">
                            <div class="card-block">
                                <h4 class="card-title pricing-ti">
                                    Bakım
                                </h4>
                                @foreach($ErkekBakim as $rs)
                                <div class="line-pricing">
                                    <h5>{{$rs->title}}</h5>
                                    <p>{{$rs->description}}</p>
                                    <a href="#">{{$rs->price}}₺</a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="pricing" class="section lb">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <small></small>
                        <h3>Bayan Bölümü Hizmetlerimiz</h3>
                    </div>
                </div><!-- end title -->
                <div class="row flex-items-xs-middle flex-items-xs-center">

                    <!-- Table #1  -->
                    <div class="col-xs-12 col-lg-6">
                        <div class="card text-center">
                            <div class="card-block">
                                <h4 class="card-title pricing-ti">
                                    Saç
                                </h4>
                                @foreach($KadinSac as $rs)
                                    <div class="line-pricing">
                                        <h5>{{$rs->title}}</h5>
                                        <p>{{$rs->description}}</p>
                                        <a href="#">{{$rs->price}}₺</a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>



                    <!-- Table #1  -->
                    <div class="col-xs-12 col-lg-6">
                        <div class="card text-center">
                            <div class="card-block">
                                <h4 class="card-title pricing-ti">
                                    Bakım
                                </h4>
                                @foreach($KadinBakim as $rs)
                                    <div class="line-pricing">
                                        <h5>{{$rs->title}}</h5>
                                        <p>{{$rs->description}}</p>
                                        <a href="#">{{$rs->price}}₺</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div id="pricing" class="section lb">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2 text-center">
                        <small></small>
                        <h3>Resim Galerisi</h3>
                    </div>
                </div><!-- end title -->
                <div class="row flex-items-xs-middle flex-items-xs-center ">



                    <!-- Table #1  -->
                    @foreach($resim as $rs)
                    <div class="col-xs-12 col-lg-6">
                        <div class="card text-center">
                            <div class="card-block">


                                    <div class="line-pricing">
                                        <img style="width: 500px;height: 300px;" class="text-center item  display-table overlay" src="{{Storage::url($rs->image)}}" alt="" class="img-responsive">
                                    </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


    </div>
@endsection

