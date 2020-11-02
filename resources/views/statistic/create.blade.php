@extends(backpack_view('blank'))

@section("content")
<div class="card card-body">
	<h1>اضافة فرصه جديدة</h1>

	<center>
		<form action="{{ route('statistics.save') }}" method="post" enctype="multipart/form-data">
			@csrf
{{--{{ dd($settings) }}--}}
		<div class="col-sm-6" style="text-align: right;">
                <div class="card">
                  <div class="card-header">اضافة احصائية جديده</div>
                  <div class="card-body">
                      <div class="form-group">
                          <label for="company">العنوان</label>
                          <input class="form-control" id="company" name="title" type="text"  >
                      </div>
                    <div class="form-group">
                      <label for="company"> القيمة</label>
                      <input class="form-control" id="company" name="value" type="text"   >
                    </div>
                    <div class="form-group">
                      <label for="company"> اللون</label>
                      <input class="form-control" id="company" name="color" type="text"   >
                    </div>


                      <div class="form-group">
                      <label for="street">الحالة</label><br>
                       <input type="checkbox" name="active">&nbsp;&nbsp;&nbsp;&nbsp;<label>اختار للنشر في الموقع</label>
                          </div>

                    <div class="form-group">
                        <button type="submit" value="save" class="btn btn-success" >حفظ</button>
                        <a href="{{ route('chances.index') }}" class="btn btn-info">رجوع</a>
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
