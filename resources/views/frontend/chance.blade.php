@extends('frontend.layouts.app')

@section('title' , "الفرص المتاحة و دور الحكومة ")

@section('content')
    <div class="agency_heading minus-padd" style="padding-top: 150px">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="agency_text" style="text-align: right">
                        <h3>الفرص المتاحة و دور الحكومه في انترنت الاشياء</h3>
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
    @php

        $i = 1

    @endphp
    <!-- video_area_start -->
    <div class="video_area">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-12" style="background-image: url('{{ asset("uploads/public/".$settings->video_background_image) }}')">
                    <div class="video_banner " style="background-image: url('{{ asset("uploads/public/".$settings->video_background_image) }} ')">
                        <a class="popup-video" href="{{ $settings->video_link }}">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video_area_end -->


    <div class="whole-wrap">
            <div class="container box_1170">
        @foreach ($chances as $chance)
        <div class="section-top-border text-right" @if (($i%2) == 0)
            dir="ltr"
        @endif>
@php
    $i++
@endphp
				<h3 class="mb-30">{{ $chance->title }}</h3>
				<div class="row">
					<div class="col-md-3">
						<img src="{{ asset('uploads/public/'.$chance->image)}}" alt="" class="img-fluid">
					</div>
					<div class="col-md-9 mt-sm-20">
						<p>{!! $chance->description !!} ...<a href="{{ route('chance.single' , ['chance' => $chance->id])}}" class="btn underline_text" style="background-color: #FFCB00;">اقرأ المزيد</a></p>

					</div>

				</div>
			</div>
    @endforeach
        </div>
	</div>


@endsection
