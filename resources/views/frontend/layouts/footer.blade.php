<footer class="footer">
    @php
    $settings = \App\Models\Settings::first();
    @endphp
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                   
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            الروابط
                        </h3>
                        <ul>
                            
                            <li><a  href="{{ asset('uploads/public/'.$settings->twitter) ?? "" }}">خريطة الموقع</a></li>
                            <li><a @if(\Route::current()->getName() == "home")class='active'@endif href="{{ route('home') }}">الرئيسية</a></li>
                            <li><a @if(\Route::current()->getName() == "about")class='active'@endif href="{{ route('about') }}">نبذه تعريفيه</a></li>
                            <li><a @if(\Route::current()->getName() == "advantage")class='active'@endif href="{{ route('advantage') }}">الفرص المتاحة و دور الجهات الجكومية</a></li>
                            <li><a @if(\Route::current()->getName() == "usages")class='active'@endif href="{{ route('usages') }}">تطبيقات انترنت الاشياء</a></li>
                            <li><a @if(\Route::current()->getName() == "contact")class='active'@endif href="{{ route('contact') }}">تواصل معنا</a></li>
                       
                        </ul>

                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            تواصل معنا
                        </h3>
                        <p>
                            {{-- {{ $settings->location }} <br> --}}
                            <a target="_blank" href="{{ $settings->mobile_address }}">{{ $settings->mobile_address }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</footer>
