<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img" style="text-align: right;">
                            <a href="{{ route('home') }}" >
                                <img src="{{ asset('uploads/public/'.\App\Models\Settings::first()->logo_image)}}" alt="" width="150px">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
{{--                                    {{dd(\Route::current()->getName())}}--}}
                                    <li><a @if(\Route::current()->getName() == "home")class='active'@endif href="{{ route('home') }}">الرئيسية</a></li>
                                    <li><a @if(\Route::current()->getName() == "advantage")class='active'@endif href="{{ route('advantage') }}"> الفرص المتاحه و دور الحكومة</a></li>
                                    <li><a @if(\Route::current()->getName() == "usages")class='active'@endif href="{{ route('usages') }}">تطبيقات انترنت الاشياء</a></li>
                                    <li><a @if(\Route::current()->getName() == "about")class='active'@endif href="{{ route('about') }}">من نحن</a></li>
                                    <li><a @if(\Route::current()->getName() == "contact")class='active'@endif href="{{ route('contact') }}">تواصل معنا</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
