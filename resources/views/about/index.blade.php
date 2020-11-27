@extends(backpack_view('blank'))
@section('css')

                <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endsection
@section("content")
<div class="card card-body">
	<h1>{{ __("base.settings")}}</h1>

	<center>
		<form action="{{ route('about.save') }}" method="post" enctype="multipart/form-data">
			@csrf
{{--{{ dd($settings) }}--}}
		<div class="col-sm-6" style="text-align: right;">
                <div class="card">
                  <div class="card-header">النبذة </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="company">العنوان</label>
                      <input class="form-control" id="company" name="title" type="text"  placeholder="Enter your company name" value="{{ old('title') ?? $about->title ?? "" }}">
                    </div>
                    <div class="form-group">
                      <label for="vat">الوصف</label>
                        <textarea class="form-control" id="editor" name="description" type="text" placeholder="description" >{{ old('description') ?? $about->description ?? "" }}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="street">الصورة الاولى</label>
                      <input class="form-control" id="street" name="image_1_file" type="file" placeholder="Enter street name">
                    </div>
                    <div class="form-group">
                      <label for="street">الصورة الحالية</label><br>
                        <img src="{{ $about ? asset('uploads/public/'.$about->image_1) : "" }}" width="100px">
                        </div>
                        <div class="form-group">
                          <label for="street">الصورة الثانية </label>
                          <input class="form-control" id="street" name="image_2_file" type="file" placeholder="Enter street name">
                        </div>
                        <div class="form-group">
                          <label for="street">الصورة الحالية</label><br>
                            <img src="{{ $about ? asset('uploads/public/'.$about->image_2) : "" }}" width="100px">
                            </div>
                            <div class="form-group">
                              <label for="street">الصورة الثالثة </label>
                              <input class="form-control" id="street" name="image_3_file" type="file" placeholder="Enter street name">
                            </div>
                            <div class="form-group">
                              <label for="street">الصورة الحالية</label><br>
                                <img src="{{$about ?  asset('uploads/public/'.$about->image_3) : "" }}" width="100px">
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
