<!-- Start Slider -->
<div id="home" class="parallax">
    <div id="full-width" class="owl-carousel owl-theme home-hero">

        @foreach($slider as $rs)
        <div class="text-center item slider-01 display-table overlay">
            <img style="height: 1300px" class="text-center item  display-table overlay" src="{{Storage::url($rs->image)}}" alt="" class="img-responsive">
            <div style="width: 350px;" class="display-table-cell">
                <div style="top:150px;" class="big-tagline text-center">
                    <h2><strong>{{$rs->title}}</strong><br>
                        </h2>
                    <p class="lead">Daha Fazla bilgi almak için tıklayınız.</p>
                    <a href="{{route('hizmet',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">Devam Edin</a>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>
<!-- end Slider -->
<!-- end section -->
