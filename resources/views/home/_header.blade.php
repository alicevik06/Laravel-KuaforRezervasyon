@php
    $parentCategories = \App\Http\Controllers\HomeController::menulist()
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
            <a class="navbar-brand" href="index.html">
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



                        <li class="nav-item active"><a class="nav-link" href="index.html">Anasayfa</a></li>
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
                        <li class="nav-item"><a class="nav-link" href="about.html">Hakkımızda</a></li>
                        <li class="nav-item"><a class="nav-link" href="barbers.html">Ekibimiz</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">İletişim</a></li>

                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End header -->
