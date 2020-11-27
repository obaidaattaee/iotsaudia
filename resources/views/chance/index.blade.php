@extends(backpack_view('blank'))

@section("content")
{{--{{ dd($chances) }}--}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"><i class="fa fa-align-justify"></i> الفرص المتاحة و دور الحكومة في انترنت الاشياء<a class="btn btn-info " style="text-align: left; float: left" href="{{ route('chances.create') }}">اضافة فرصة جديدة</a>
                </div>
                 <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-hover table-sm">
                        <thead>
                        <tr>
                            <th>العنوان</th>
                            <th>اختصار الوصف</th>
                            <th>الوصف</th>
                            <th>صورة</th>
                            <th>الحالة</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($chances as $chance)
                        <tr>
                            <td>{{ $chance->title }}</td>
                            <td>{{ $chance->slug }}</td>
                            <td>{{ $chance->description }}</td>
                            <td><img src="{{asset('uploads/public/'.$chance->image)}}" width="100px"></td>
                            <td>{{ $chance->active == 1 ? "فعال" : "ليس فعال " }}</td>
                            <td><a href="{{ route('chances.edit' , ['chance' => $chance->id]) }}"><i class="la la-eye la-lg mt-4"></i></a><a href="{{ route('chances.delete' , ['chance' => $chance->id]) }}"><i class="la la-trash la-lg mt-4"></i></a></td>


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
