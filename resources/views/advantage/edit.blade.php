@extends(backpack_view('blank'))
@section('css')

                <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endsection
@section("content")
<div class="card card-body">
	<h1>{{ __("base.settings")}}</h1>

	<center>
		<form action="{{ route('advantages.update' , ['advantage' => $advantage->id]) }}" method="post" enctype="multipart/form-data">
			@csrf
{{--{{ dd($settings) }}--}}
		<div class="col-sm-6" style="text-align: right;">
                <div class="card">
                  <div class="card-header">تعديل على الميزة</div>
                  <div class="card-body">
                      <div class="form-group">
                          <label for="company">العنوان</label>
                          <input class="form-control" id="company" name="title" type="text" value="{{ old('title') ?? $advantage->title ?? ""}}" >
                      </div>
                    <div class="form-group">
                      <label for="company">اختصار الوصف</label>
                      <input class="form-control" id="company" name="slug" type="text"  value="{{ old('slug') ?? $advantage->slug ?? ""}}"  >
                    </div>
                    <div class="form-group">
                      <label for="vat">الوصف</label>
                        <textarea class="form-control" id="editor" name="description" >{{ $advantage->description }}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="street">صورة المؤته للفيديو</label>
                      <input class="form-control" id="street" name="image_file" type="file" placeholder="Enter street name" >
                    </div>
                      <div class="form-group">
                          <label for="street">الصورة القديمة</label>
<br>
                          <img src="{{ asset('uploads/public/')."/".$advantage->image }}" width="100px">
                      </div>
                      <div class="form-group">
                      <label for="street">الحالة</label><br>
                       <input type="checkbox" name="active" {{  $advantage->active == 1 ? "checked" : ""}} >    <label>اختار للنشر في الموقع</label>
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
<script>
			ClassicEditor
					.create( document.querySelector( '#editor' ) )
					.then( editor => {
							console.log( editor );
					} )
					.catch( error => {
							console.error( error );
					} );
	</script>
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
