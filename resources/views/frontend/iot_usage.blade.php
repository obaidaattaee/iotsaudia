@extends('frontend.layouts.app')

@section('title' , "الفرص المتاحة و دور الحكومة ")

@section('content')
    <div class="agency_heading minus-padd" style="padding-top: 150px">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="agency_text" style="text-align: right">
                    <h3>تطبيقات المستخدمة في انترنت الاشياء</h3>
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
    <div class="works_area" style="padding-top:100px;padding-bottom:0px;">
        @php
            $arraies = $usages->chunk(ceil($usages->count() / 2)) ;

        @endphp

        <div class="container">
            <div class="row">
                @foreach ($arraies[0] as $value)
        {{-- {{  dd(            $value) }} --}}
                    <div class="col-xl-5 col-md-6" style="margin-left:15%">
                    <div class="single_work">
                        <div class="work_thumb">
                            <img src="{{ asset('uploads/public/'.$value->image)}}" alt="">
                            <div class="work_hover">
                                <div class="work_inner">
                                    <div >
                                                    <a href="{{ asset('uploads/public/'.$value->image) }}" class="img-pop-up">
                                                        <div class="single-gallery-image" style="background: url({{ asset('uploads/public/'.$value->image) }});">تكبير</div>
                                                    </a>
                                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="work_heading">
                            <h3>{{ $value->title }}</h3>
                        </div>
                    </div>

                </div>
                @endforeach
                @foreach ($arraies[1] as $value)
                    <div class="col-xl-5 col-md-6" style="margin-left:0px">
                    <div class="single_work">
                        <div class="work_thumb">
                            <img src="{{ asset('uploads/public/'.$value->image)}}" alt="">
                            <div class="work_hover">
                                <div class="work_inner">
                                    <div >
                                                    <a href="{{ asset('uploads/public/'.$value->image) }}" class="img-pop-up">
                                                        <div class="single-gallery-image" style="background: url({{ asset('uploads/public/'.$value->image) }});">تكبير</div>
                                                    </a>
                                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="work_heading">
                            <h3>{{ $value->title }}</h3>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>

        </div>
    </div>



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
