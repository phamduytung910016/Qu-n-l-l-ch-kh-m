@extends('master.layout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">Lịch khám bệnh</h4>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                            @if (isset($data))
                                <thead>
                                    <tr>
                                        <th>Họ và tên</th>
                                        <th>Giới tính</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>Dịch vụ khám</th>
                                        <th>Ngày khám</th>
                                        <th>Giờ khám</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td><a href="/admin/getDetail/{{$item->id}}">{{ $item->user->name }}</a></td>
                                            <td>{{ $item->sex }}</td>
                                            <td>{{ $item->phone_number }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->service->name }}</td>
                                            <td>{{ $item->date }}</td>
                                            <td>{{ $item->time->time_schedule }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            @elseif (isset($userSchedules))
                                <thead>
                                    <tr>
                                        <th>Dịch vụ khám</th>
                                        <th>Ngày khám</th>
                                        <th>Giờ khám</th>
                                        <th>Lý do khám</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($userSchedules as $item)
                                        <tr>
                                            <td><a href="/user/getDetail/{{$item->id}}">{{ $item->service->name }}</a></td>
                                            <td>{{ $item->date }}</td>
                                            <td>{{ $item->time->time_schedule }}</td>
                                            <td>{{ $item->reason }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
