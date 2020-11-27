@extends("frontend.layouts.app")

@section('title' , "homepage")

@section('content')

    <!-- agency_heading_start -->
    <div class="agency_heading">
        <div class="container">
            <div class="row">
                <div class="col-xl-10" style="text-align: right;">
                    <div class="agency_text">
                        <h4 style="font-size: 32px;font-family: 'Cairo', sans-serif;">{{ $settings->slider_title }}</h4>

                    </div>
                </div>
            </div>
        </div>
        <div class="animated_shape">
            <div class="anim_1">
                <img src="img/about/1.png" alt="">
            </div>
            <div class="anim_2">
                <img src="img/about/2.png" alt="">
            </div>
        </div>
    </div>
    <!-- agency_heading_end -->

    <!-- video_area_start -->
    <div class="video_area">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-6" >
                    <div class="video_banner " >
                        <a class="popup-video" href="{{ $settings->video_link }}">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-6" >
                    <div class="single_instagram" >
                        <div >
                                        <a href="{{ asset('uploads/public/'.$settings->video_background_image) }}" class="img-pop-up">
                                            <img src="{{ asset("uploads/public/".$settings->video_background_image) }}" width="100%" height="100%" alt="">
                                        </a>
                                    </div>
                    </div>
                    {{-- <img src="{{ asset("uploads/public/".$settings->video_background_image) }}" width="100%" height="100%" alt=""> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- video_area_end -->

    <!-- "service_area_start -->
<div class="service_area black_bg">
    <h1 class="opacity_text d-none d-lg-block"></h1>
    <div class="container">
        <div class="row" style="text-align: right">
            <div class="col-xl-12">
                <div class="section_title white-color">
                    <h3>
                        استخدامات انترنت الاشياء
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($usages as $usage)
            <div class="col-xl-4 col-md-6">
                <div class="single_service text-center">
                    <div class="icon">
                        <img src="{{ asset('uploads/public/'.$usage->image) }}" alt="" width="150px" height="150px">
                    </div>
                    <h3>{{ $usage->title }}</h3>
                    <p>
                        {{ $usage->descritpion }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- brand_area_start -->
    <div class="brand_area">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>
    <!-- brand_area_end-->
</div>
    <!-- "service_area_end -->

    <!-- build_product_start -->
    <div class="build_product" style="padding-top:100px;">
        <div class="container">
            <div class="row" style="text-align: right;">
                <div class="col-xl-12">
                    <div class="section_title white-color">
                        <h3 style=" color: #0A0A0A">
                            {{$settings->advantage_title}}
                        </h3>
                    </div>
                </div>
            </div>
            @php $i = 1 @endphp
            @foreach($advantages as $advantage)
                <div style="padding-top:100px">

                <div class="row align-items-center" @if ( ($i % 2) == 0)
                    style="direction: ltr;"
                @endif >
                @php
                    $i++
                @endphp
                    <div class="col-xl-6 col-md-6">
                        <div class="build_img">
                            <img src="{{ asset('uploads/public/'.$advantage->image)}}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-md-6">
                        <div class="product_right" style="text-align: right;">
                            <div class="section_title">
                                <h3>{{ $advantage->title}}</h3>
                            </div>
                            <p>{{ $advantage->slug }}</p>
                                <a href="{{ route('advantage.single' , ['advantage' => $advantage->id]) }}" class="btn underline_text" style="background-color: #FFCB00;">اقرأ المزيد</a>
                        </div>

                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
    <!-- build_product_end -->

    <!-- counter_area_start -->
    <div class="counter_area" style="padding-top:100px;padding-bottom:100px">
        <h1 class="opacity_text d-none d-lg-block">
            Quick Fact
        </h1>
        <div class="container">
            <div class="row">
                @foreach($statistics as $statistic)
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter text-center">
                        <h3 class="counter">{{ $statistic->value }}</h3><p>{{ $statistic->color }}</p>
                        <span>{{ $statistic->title }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- counter_area_end -->

    <!-- instragram_area_start -->
    <div class="instragram_area">
        @foreach($images as $image)
        <div class="single_instagram" >
            <div >
                            <a href="{{ asset('uploads/public/'.$image->image) }}" class="img-pop-up">
                                <div class="single-gallery-image" style="background: url({{ asset('uploads/public/'.$image->image) }});"></div>
                            </a>
                        </div>
        </div>

        @endforeach
    </div>
    <!-- instragram_area_end -->
  


@endsection

@section('js')
    <script>
        $('#ModalForm').modal('show');
        // HIDE
        $('#ModalForm').modal('hide');

    </script>
@endsection
