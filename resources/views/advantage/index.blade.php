@extends(backpack_view('blank'))

@section("content")
{{--{{ dd($advantages) }}--}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"><i class="fa fa-align-justify"></i> مميزات انترنت الاشياء<a class="btn btn-info " style="text-align: left; float: left" href="{{ route('advantages.create') }}">اضافة ميزة جديدة</a>
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
                        @foreach($advantages as $advantage)
                        <tr>
                            <td>{{ $advantage->title }}</td>
                            <td>{{ $advantage->slug }}</td>
                            <td>{{ $advantage->description }}</td>
                            <td><img src="{{asset('uploads/public/'.$advantage->image)}}" width="100px"></td>
                            <td>{{ $advantage->active == 1 ? "فعال" : "ليس فعال " }}</td>
                            <td><a href="{{ route('advantages.edit' , ['advantage' => $advantage->id]) }}"><i class="la la-eye la-lg mt-4"></i></a><a href="{{ route('advantages.delete' , ['advantage' => $advantage->id]) }}"><i class="la la-trash la-lg mt-4"></i></a></td>


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
