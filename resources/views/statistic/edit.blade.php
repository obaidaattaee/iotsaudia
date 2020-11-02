@extends(backpack_view('blank'))

@section("content")
<div class="card card-body">
    <h1>اضافة فرصه جديدة</h1>

	<center>
		<form action="{{ route('statistics.update' , ['statistac' => $statistic->id]) }}" method="post" enctype="multipart/form-data">
			@csrf
{{--{{ dd($settings) }}--}}
		<div class="col-sm-6" style="text-align: right;">
                <div class="card">
                  <div class="card-header">تعديل على الفرصة</div>
                  <div class="card-body">
                      <div class="form-group">
                          <label for="company">العنوان</label>
                          <input class="form-control" id="company" name="title" type="text" value="{{ old('title') ?? $statistic->title ?? ""}}" >
                      </div>
                    <div class="form-group">
                      <label for="company">القيمة</label>
                      <input class="form-control" id="company" name="value" type="text"  value="{{ old('value') ?? $statistic->value ?? ""}}"  >
                    </div>
                      <div class="form-group">
                          <label for="company">الوحدة</label>
                          <input class="form-control" id="company" name="color" type="text"  value="{{ old('color') ?? $statistic->color ?? ""}}"  >
                      </div>
                      <div class="form-group">
                      <label for="street">الحالة</label><br>
                       <input type="checkbox" name="active" {{  $statistic->active == 1 ? "checked" : ""}} >&nbsp;&nbsp;&nbsp;&nbsp;<label>اختار للنشر في الموقع</label>
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
