@extends(backpack_view('blank'))

@section("content")
{{--{{ dd($usages) }}--}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"><i class="fa fa-align-justify"></i> الفرص المتاحة في انترنت الاشياء<a class="btn btn-info " style="text-align: left; float: left" href="{{ route('usage.create') }}">اضافة فرصة جديدة</a>
                </div>
                 <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-hover table-sm">
                        <thead>
                        <tr>
                            <th>العنوان</th>
                            <th>الوصف</th>
                            <th>صورة</th>
                            <th>الحالة</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($usages as $usage)
                        <tr>
{{--                            {{ dd(  $usage) }}--}}
                            <td>{{ $usage->title }}</td>
                            <td>{{ $usage->descritpion }}</td>
                            <td><img src="{{asset('uploads/public/'.$usage->image)}}" width="100px"></td>
                            <td>{{ $usage->active == 1 ? "فعال" : "ليس فعال " }}</td>
                            <td><a href="{{ route('usage.edit' , ['usage' => $usage->id]) }}"><i class="la la-eye la-lg mt-4"></i></a><a href="{{ route('usage.delete' , ['usage' => $usage->id]) }}"><i class="la la-trash la-lg mt-4"></i></a></td>


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
