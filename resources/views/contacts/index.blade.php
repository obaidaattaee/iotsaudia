@extends(backpack_view('blank'))

@section("content")
{{--{{ dd($usages) }}--}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"><i class="fa fa-align-justify"></i> الرسائل الواردة
                </div>
                 <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-hover table-sm">
                        <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>البريد الالكتروني</th>
                            <th>العنوان</th>
                            <th>الرسالة</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $usage)
                        <tr>
{{--                            {{ dd(  $usage) }}--}}
                            <td>{{ $usage->name }}</td>
                            <td>{{ $usage->email }}</td>
                            <td>{{ $usage->subject }}</td>
                            <td>{{ $usage->message }}</td>

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
