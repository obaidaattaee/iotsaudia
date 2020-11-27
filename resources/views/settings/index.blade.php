@extends(backpack_view('blank'))

@section("content")
<div class="card card-body">
	<h1>{{ __("base.settings")}}</h1>

	<center>
		<form action="{{ route('settings.save') }}" method="post" enctype="multipart/form-data">
			@csrf
{{--{{ dd($settings) }}--}}
		<div class="col-sm-6" style="text-align: right;">
                <div class="card">
                  <div class="card-header">الاعدادت </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="company">الجمله الترحيبية</label>
                      <input class="form-control" id="company" name="slider_title" type="text"  placeholder="Enter your company name" value="{{ $settings->slider_title ?? "" }}">
                    </div>
                    <div class="form-group">
                      <label for="vat">رابط الفيديو</label>
                      <input class="form-control" id="vat" name="video_link" type="text" placeholder="PL1234567890" value="{{ $settings->video_link ?? "" }}">
                    </div>
                    <div class="form-group">
                      <label for="street">صورة المؤته للفيديو</label>
                      <input class="form-control" id="street" name="video_background_image_file" type="file" placeholder="Enter street name" value="">
                    </div>

                      <div class="form-group">
                      <label for="street">الصورة الحالية</label><br>
                        <img src="{{ asset('uploads/public/'.$settings->video_background_image) ?? "" }}" width="100px">
                        </div>

                    <div class="form-group">
                      <label for="street">الشعار</label>
                      <input class="form-control" id="street" name="logo_image_file" type="file" placeholder="Enter street name">
                    </div>
                      <div class="form-group">
                          <label for="street">صورة الشعار الحالية</label><br>
                          <img src="{{ asset('uploads/public/'.$settings->logo_image) ?? "" }}" width="100px">
                      </div>
<div class="form-group">
                      <label for="street">نص المميزات </label>
                      <input class="form-control" name="advantage_title" id="street" type="text" placeholder="Enter street name" value="{{ old("advantage_title") ?? $settings->advantage_title ?? "" }}">
                    </div>
<div class="form-group">
                      <label for="street">البريد الالكتروني </label>
                      <input class="form-control" name="email_address" id="street" type="text" placeholder="Enter street name" value="{{ old("email_address") ?? $settings->email_address ?? "" }}">
                    </div>
<div class="form-group">
                      <label for="street">رقم الهاتف</label>
                      <input class="form-control" name="mobile_address" id="street" type="text" placeholder="Enter street name" value="{{ old("mobile_address") ?? $settings->mobile_address ?? "" }}">
                    </div>
<div class="form-group">
                      <label for="street">العنوان</label>
                      <input class="form-control" name="location" id="street" type="text" placeholder="Enter street name" value="{{ old("location") ?? $settings->location ?? "" }}">
                    </div>
                    <div class="form-group">
                      <label for="street">رابط فيسبوك</label>
                      <input class="form-control" name="facebook_address" id="street" type="text" placeholder="Enter street name" value="{{ old("facebook_address") ?? $settings->facebook_address ?? "" }}">
                    </div>
                    <div class="form-group">
                      <label for="street">صورة خريطة الموقع </label>
                      <input class="form-control" id="street" name="twitter" type="file" placeholder="Enter street name">
                    </div>
                    <div class="form-group">
                      <label for="street">الصورة الحالية</label><br>
                        <img src="{{ asset('uploads/public/'.$settings->twitter) ?? "" }}" width="100px">
                        </div>
  <div class="form-group">
                      <label for="street">الصوره الاولى في صفحة التواصل </label>
                      <input class="form-control" id="street" name="instagram" type="file" placeholder="Enter street name">
                    </div>
                    <div class="form-group">
                      <label for="street">الصورة الحالية</label><br>
                        <img src="{{ asset('uploads/public/'.$settings->instagram) ?? "" }}" width="100px">
                        </div>
  <div class="form-group">
                      <label for="street">الصورة الثانية في صفحة التواصل</label>
                      <input class="form-control" id="street" name="youtube" type="file" placeholder="Enter street name">
                    </div>
                    <div class="form-group">
                      <label for="street">الصورة الحالية</label><br>
                        <img src="{{ asset('uploads/public/'.$settings->youtube) ?? "" }}" width="100px">
                        </div>
                    <div class="form-group">
                    	<input type="submit" value="save" class="btn btn-success">
                    </div>
                    <!-- /.row-->

                  </div>
                </div>
              </div>
			</form>
	</center>
</div>




@endsection

@section('after_scripts')
    @if ($errors->any())

        <script>
            @foreach ($errors->all() as $error)
            new Noty({
                text: "<strong>{{ $error }}</strong>",
                type: "danger"
            }).show();
            @endforeach
        </script>
    @endif

@endsection
