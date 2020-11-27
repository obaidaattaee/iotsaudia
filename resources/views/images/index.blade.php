@extends(backpack_view('blank'))

@section("content")
{{--{{ dd($advantages) }}--}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"><i class="fa fa-align-justify"></i> صور عن انترنت الاشياء<a class="btn btn-info " style="text-align: left; float: left" href="{{ route('images.create') }}">اضافة صورة جديدة</a>
                </div>
                 <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-hover table-sm">
                        <thead>
                        <tr>
                            <th>صورة</th>
                            <th>الحالة</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($images as $image)
                        <tr>

                            <td><img src="{{asset('uploads/public/'.$image->image)}}" width="100px"></td>
                            <td>{{ $image->active == 1 ? "فعال" : "ليس فعال " }}</td>
                            <td><a href="{{ route('images.edit' , ['image' => $image->id]) }}"><i class="la la-eye la-lg mt-4"></i></a><a href="{{ route('images.delete' , ['image' => $image->id]) }}"><i class="la la-trash la-lg mt-4"></i></a></td>


                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
@endsection
