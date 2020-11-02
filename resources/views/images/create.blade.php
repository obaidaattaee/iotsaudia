@extends(backpack_view('blank'))

@section("content")
<div class="card card-body">
	<h1>{{ __("base.settings")}}</h1>

	<center>
		<form action="{{ route('images.save') }}" method="post" enctype="multipart/form-data">
			@csrf
{{--{{ dd($settings) }}--}}
		<div class="col-sm-6" style="text-align: right;">
                <div class="card">
                  <div class="card-header">اضافة صورة جديده</div>

                    <div class="form-group">
                      <label for="street">صورة </label>
                      <input class="form-control" id="street" name="image_file" type="file" placeholder="Enter street name" value="">
                    </div>
                      <div class="form-group">
                      <label for="street">الحالة</label><br>
                       <input type="checkbox" name="active">&nbsp;&nbsp;&nbsp;&nbsp;<label>اختار للنشر في الموقع</label>
                          </div>

                    <div class="form-group">
                        <button type="submit" value="save" class="btn btn-success" >حفظ</button>
                        <a href="{{ route('advantages.index') }}" class="btn btn-info">رجوع</a>
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
