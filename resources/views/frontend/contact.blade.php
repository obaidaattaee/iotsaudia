@extends("frontend.layouts.app")

@section('title' , "تواصل معنا")


@section('content')

    <div class="agency_heading minus-padd">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="agency_text" style="text-align: right">
                        <h3>تواصل معنا</h3>
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
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>{{ $settings->location }}</h3>

                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>{{ $settings->mobile_address }}</h3>
                            <p>الاحد الى الخميس 8ص - 5م</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>{{ $settings->email_address }}</h3>
                            <p>نستقبل في اي وقت</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">

                    <form class="form-contact contact_form" action="{{ route('contact.save') }}" method="post"  >
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ادخل الرساله'" placeholder=" الرساله"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ادخل اسمك'" placeholder="الاسم ">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'البريد الالكتوني '" placeholder="البريد الالكتروني">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'الموضوع'" placeholder="العنوان">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">ارسال</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
