@extends('frontend.layouts.app')
@section('title' , $advantage->title)

@section('content')
    <div style="text-align: right">
    <div class="agency_heading minus-padd" style="padding-top: 150px">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="agency_text">
                            <h3>{{ $advantage->title}}</h3>
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

        <div class="app_design_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="app_banner">
                        <img src="{{ asset('uploads/public/'.$advantage->image) }}" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="pro_detaols_info">
        <div class="container">
            <div class="row" style="padding-top:80px; padding-bottom: 80px;">
                    <div class="col-xl-10 col-md-10">
                        <div class="details_info">
                        {!! $advantage->description !!}
                        </div>
                    </div>

                </div>
    </div>
@endsection
