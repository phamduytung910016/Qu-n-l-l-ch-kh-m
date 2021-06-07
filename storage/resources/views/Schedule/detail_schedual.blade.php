@extends('master.layout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title" style="font-size: 30px">Chi tiết lịch khám </h1>
                    <h4 style="color: red;">Số Điện Thoại CSKH:0912345xxx</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-box">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="color: cornflowerblue;">Dịch vụ khám</label>
                                        <select class="select" name="service_id">
                                            <option value="{{ $data->service_id }}">{{ $data->service->name }}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label style="color: cornflowerblue;">Phòng khám</label>
                                        <select class="select" name="room_patients">
                                            <option value="">{{ $data->room_patients }}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label style="color: cornflowerblue;">Ngày khám</label>
                                        <input type="date" class="form-control" name="date" value="{{ $data->date }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label style="color: cornflowerblue;">Giờ khám</label>
                                        <select class="select" name="time_id">
                                            <option value="">{{ $data->time->time_schedule }}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Lý do khám</label>
                                        <input type="text" class="form-control" name="reason" value="{{ $data->reason }}"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
