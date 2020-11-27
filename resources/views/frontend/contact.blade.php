{{-- @extends("frontend.layouts.app")

@section('title' , "تواصل معنا")


@section('content')

    <div class="agency_heading minus-padd">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="agency_text" style="text-align: right">
                        <h3>خريطة الموقع</h3>
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
                <div class="col-12">
                    <h2 class="contact-title">ابق على تواصل</h2>
                </div>
<br/><br/><br/><br/><br/><br/><br/>
                <div class="col-lg-3 offset-lg-1">
                   
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>{{ $settings->email_address }}</h3>
                            <p>نستقبل في اي وقت</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="{{ asset('uploads/public/'.$settings->youtube) ?? "" }}" alt="" style="max-height: 100%; width: 100%"><br>
                    <img src="{{ asset('uploads/public/'.$settings->instagram) ?? "" }}" alt="" style="max-height: 100%;width: 100%; margin-top: 20px">
                </div>
            </div>
        </div>
    </section>

@endsection --}}
@extends("frontend.layouts.app")

@section('title' , $contact->title ?? "")


@section('content')
{{--{{ dd($about) }}--}}
    <div class="agency_heading" style="text-align: right;padding-bottom:0px">

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="agency_text">
                        <h3>{{ $contact->title ?? ""}}</h3>
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
               {!! $contact->description ?? "" !!}
                </h3>
            </div>
        </div>
    </section>

    <section class="contact-section" style="text-align: right">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <img src="{{  asset('uploads/public/'.$contact->image_1) ?? "" }}" alt="" style="max-height: 50%; width: 100%; margin-top: 20px""><br>
                 </div>
            </div>
        </div>
    </section>



@endsection
