@extends('master.layout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title" style="font-size: 30px">Chi tiết lịch khám </h1>
                    <h4 style="color: red;">Số Điện Thoại CSKH:0203361XXXX</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Họ và tên<span style="color: red">*</span></label>
                                        <input type="text" class="form-control" value="{{ $data->user->name }}" disabled>
                                    </div>

                                    <div class="form-group">
                                        <label class="display-block">Giới tính:</label>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="gender_male"
                                                disabled>{{ $data->sex }}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Điện thoại<span style="color: red">*</span></label>
                                        <input type="text" class="form-control" name="phone_number"
                                            value="{{ $data->phone_number }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Email<span style="color: red">*</span></label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ Auth::user()->email }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input type="home_address" class="form-control" name="home_address"
                                            value="{{ $data->home_address }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                        <input type="date" class="form-control" name="date" value="{{ $data->date }}">
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
