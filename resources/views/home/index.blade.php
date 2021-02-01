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

                <div class="row">
                    <div class="col-md-12">
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" href="#tab_a" data-toggle="tab">Our Mission</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab_b" data-toggle="tab">Why Us?</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab_c" data-toggle="tab">About Us</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab_a">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi scelerisque tortor mi, eget mattis velit sagittis id. Duis ornare mauris eu eros interdum, vitae finibus arcu ultricies. Donec vitae felis eleifend, dignissim erat a, pretium diam. Donec eu massa odio. Suspendisse et ornare lacus, pharetra imperdiet ligula.</p>
                                    <p>Vestibulum ac quam id lorem semper condimentum. Nulla vel ligula turpis. Nullam luctus, mi nec rhoncus gravida, tortor est semper purus, a feugiat sapien odio non urna. Fusce pellentesque neque ut nisi rhoncus imperdiet. Sed eu purus vel turpis consectetur convallis. Donec a dolor tellus. Phasellus dignissim erat nec ipsum condimentum sollicitudin. </p>
                                </div>
                                <div class="tab-pane fade" id="tab_b">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                    <ul>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>User Experince</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Full Devices</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Awesome Design</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Visual Impact</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>100% Sincronized</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Custom Support</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="tab_c">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                </div>
                            </div><!-- tab content -->
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



    </div>
@endsection

