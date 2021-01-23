@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp

<div style="height: 300px;" id="testimonials" class="parallax section db parallax-inner-bg">
    <div class="container">
        <div class="section-title row text-center">
            <div class="col-md-8 offset-md-2">

                <h3>Kalite Tesadüf değildir..</h3>
            </div>
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="text-center" >

                    <label style="color: white;font-size: 14pt;"><strong>Company : </strong> {{$setting->company}} </label><br>
                    <label style="color: white;font-size: 14pt;"><strong>Email : </strong> {{$setting->email}} </label><br>
                    <label style="color: white;font-size: 14pt;"><strong>Phone : </strong> {{$setting->phone}}      </label>
                    <label style="color: white;font-size: 14pt;"><strong>   Address : </strong> {{$setting->address}} </label>
                </div><!-- end carousel -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

<div class="copyrights">
    <div class="container">
        <div class="footer-distributed">
            <div class="footer-left">
                <strong>Sıkça Sorulan Sorular</strong><br>
                <a href="{{route('sss')}}"><img src="{{ asset('assets') }}/uploads/sss-icon.png" ></a><br>
                <p class="footer-links">

                        @if ($setting->instagram != null)<a href="{{$setting->instagram}}" target="_blank" ><img src="{{ asset('assets') }}/uploads/insta.png" ></a>@endif
                        @if ($setting->facebook != null)<a href="{{$setting->facebook}}"target="_blank"><img src="{{ asset('assets') }}/uploads/face.png" ></a>@endif
                        @if ($setting->twitter != null)<a href="{{$setting->twitter}}"target="_blank"><img src="{{ asset('assets') }}/uploads/twitter.png" ></a>@endif

                </p>
                <p class="footer-company-name">All Rights Reserved. &copy; 2021 {{$setting->company}}  | Design By : ALİ ÇEVİK</p>
            </div>
        </div>
    </div><!-- end container -->
</div><!-- end copyrights -->


<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

<!-- ALL JS FILES -->
<script src="{{ asset('assets') }}/js/all.js"></script>
<script src="{{ asset('assets') }}/js/responsive-tabs.js"></script>
<!-- ALL PLUGINS -->
<script src="{{ asset('assets') }}/js/custom.js"></script>
