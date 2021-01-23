@php
    $parentCategories = \App\Http\Controllers\HomeController::menulist();
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp

<!-- LOADER -->
<div id="preloader">
    <div class="cube-wrapper">
        <div class="cube-folding">
            <span class="leaf1"></span>
            <span class="leaf2"></span>
            <span class="leaf3"></span>
            <span class="leaf4"></span>
        </div>
        <div class="mus">
            <img src="{{ asset('assets') }}/images/lode-img.png" alt=""/>
        </div>
        <span class="loading" data-name="Loading">StyleBarber Loading</span>
    </div>
</div><!-- end loader -->
<!-- END LOADER -->

<div class="top-add alert alert-light alert-dismissible">

</div>
<!-- Start header -->
<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{ asset('assets') }}/images/logo.png" alt=""/>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbars-rs-food"
                    aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-rs-food">
                <ul class="navbar-nav ml-auto dropdown-menu">


                    <li class="nav-item active"><a class="nav-link" href="{{route('home')}}">Anasayfa</a></li>
                    <li class="nav-item active"><a class="nav-link" href="#">Hizmetlerimiz</a>
                        <ul>
                            @foreach($parentCategories as $rs)
                                <li style="width:168px;top:5px;" class="nav-item">
                                    <a class="nav-link" href="#">{{$rs->title}}</a>


                                    @if(count($rs->children))
                                        @include('home.categorytree',['children'=>$rs->children])
                                    @endif

                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('ekip')}}">Ekibimiz</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('aboutus')}}">Hakkımızda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('basindabiz')}}">Basında Biz</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('iletisim')}}">İletişim</a></li>


                </ul>
            </div>
        </div>

        <nav style="width: 230px;" class="navbar navbar-expand-lg navbar-light bg-light text-center">
            @auth
                <img style="width: 70px;height: 70px;" src="{{ asset('assets') }}/uploads/ussr.png">
            @endauth

            @guest
                <img style="width: 70px;height: 70px;" src="{{ asset('assets') }}/uploads/ussr.png">
            @endguest


            <div class=" navbar-collapse" id="navbars-rs-food">

                    <ul>
                        @auth

                            <li style="font-size: 14pt"><a class="nav-link" href="{{route('myprofile')}}">{{ Auth::user()->name }}</a>

                            </li>

                            <a href="{{route('logout')}}">
                                <button type="submit" value="SEND" id="submit"
                                        class="btn btn-light btn-radius btn-brd grd1 btn-block subt">Logout
                                </button>
                            </a>

                        @endauth
                        @guest
                            <a href="/login">
                                <button type="submit" value="SEND" id="submit"
                                        class="btn btn-light btn-radius btn-brd grd1 btn-block subt">Login
                                </button>
                            </a>
                            <a href="/register">
                                <button type="submit" value="SEND" id="submit"
                                        class="btn btn-light btn-radius btn-brd grd1 btn-block subt">Signin
                                </button>
                            </a>
                        @endguest
                    </ul>

            </div>
        </nav>


    </nav>
</header>
<!-- End header -->
