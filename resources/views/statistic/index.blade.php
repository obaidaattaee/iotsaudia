@extends(backpack_view('blank'))

@section("content")
{{--{{ dd($statistics) }}--}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"><i class="fa fa-align-justify"></i> الاحصائيات في انترنت الاشياء<a class="btn btn-info " style="text-align: left; float: left" href="{{ route('statistics.create') }}">اضافة احصائية جديدة</a>
                </div>
                 <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-hover table-sm">
                        <thead>
                        <tr>
                            <th>العنوان</th>
                            <th>القيمة</th>
                            <th>لون القيمة</th>

                            <th>الحالة</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($statistics as $statistic)
{{--                            {{ dd($statistic) }}--}}
                        <tr>
                            <td>{{ $statistic->title }}</td>
                            <td>{{ $statistic->value }}</td>
                            <td>{{ $statistic->color }}</td>
                            <td>{{ $statistic->active == 1 ? "فعال" : "ليس فعال " }}</td>
                            <td><a href="{{ route('statistics.edit' , ['statistac' => $statistic->id]) }}"><i class="la la-eye la-lg mt-4"></i></a><a href="{{ route('statistics.delete' , ['statistac' => $statistic->id]) }}"><i class="la la-trash la-lg mt-4"></i></a></td>


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
