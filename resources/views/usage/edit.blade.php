@extends(backpack_view('blank'))

@section("content")
<div class="card card-body">
    <h1>اضافة فرصه جديدة</h1>

	<center>
		<form action="{{ route('usage.update' , ['usage' => $usage->id]) }}" method="post" enctype="multipart/form-data">
			@csrf
{{--{{ dd($settings) }}--}}
		<div class="col-sm-6" style="text-align: right;">
                <div class="card">
                  <div class="card-header">تعديل على الفرصة</div>
                  <div class="card-body">
                      <div class="form-group">
                          <label for="company">العنوان</label>
                          <input class="form-control" id="company" name="title" type="text" value="{{ old('title') ?? $usage->title ?? ""}}" >
                      </div>

                    <div class="form-group">
                      <label for="vat">الوصف</label>
                        <textarea class="form-control" id="summernote" name="descritpion" >{{ $usage->descritpion }}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="street">صورة المؤته للفيديو</label>
                      <input class="form-control" id="street" name="image_file" type="file" placeholder="Enter street name" >
                    </div>
                      <div class="form-group">
                          <label for="street">الصورة القديمة</label>
<br>
                          <img src="{{ asset('uploads/public/')."/".$usage->image }}" width="100px">
                      </div>
                      <div class="form-group">
                      <label for="street">الحالة</label><br>
                       <input type="checkbox" name="active" {{  $usage->active == 1 ? "checked" : ""}} >    <label>اختار للنشر في الموقع</label>
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
