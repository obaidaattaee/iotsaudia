@extends("frontend.layouts.app")

@section('title' , $about->title)


@section('content')
{{--{{ dd($about) }}--}}
    <div class="agency_heading" style="text-align: right;padding-bottom:0px">

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="agency_text">
                        <h3>{{ $about->title}}</h3>
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

    <section class="contact-section" style="text-align: right">
        <div class="container">

            <div class="row">
                <h3>
               {!! $about->description !!}
                </h3>
            </div>
        </div>
    </section>
    <section class="contact-section" style="text-align: right">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <img src="{{  asset('uploads/public/'.$about->image_1) ?? "" }}" alt="" style="max-height: 50%; width: 100%; margin-top: 20px""><br>
                    <img src="{{ asset('uploads/public/'.$about->image_2) ?? "" }}" alt="" style="max-height: 50%; width: 100%; margin-top: 20px""><br>
                    <img src="{{ asset('uploads/public/'.$about->image_3) ?? "" }}" alt="" style="max-height: 50%;width: 100%; margin-top: 20px">
                </div>
            </div>
        </div>
    </section>
@endsection
