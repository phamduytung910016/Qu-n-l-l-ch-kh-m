@extends('master.layout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-7">
                    <h1 class="page-title" style="font-size: 30px">Đặt lịch khám </h1>
                    <h4 style="color: red;">Số Điện Thoại CSKH:0912345xxx</h4>
                </div>
                <div class="col-sm-5 col-9 text-right m-b-20">
                    <a href="/user/detail" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i>
                        Chi tiết lịch khám</a>
                </div>
            </div>
            @if (session('mail'))
                <div class="alert alert-success alert-dismissible" style="width:50%;align-item:center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>{{ session('mail') }}</strong>
                </div>
            @endif
            @if (session('null'))
                <div class="alert alert-danger alert-dismissible" style="width:50%;align-item:center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>{{ session('null') }}</strong>
                </div>
            @endif
            <div class="row">
                <div class="col-md-6">
                    <div class="card-box">
                        <form action="/user/post_register_schedule" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input type="text" class="form-control" name="home_address">
                                    </div>
                                    <div class="form-group">
                                        <label style="color: cornflowerblue;">Dịch vụ khám<span
                                                style="color: red">*</span></label>
                                        @error('service_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <select class="select" name="service_id" required>
                                            <option value="">Lựa chọn</option>
                                            @foreach ($service as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label style="color: cornflowerblue;">Phòng khám</label>
                                        @error('home_address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <select class="select" name="room_patients" required>
                                            <option >Lựa chọn</option>
                                            <option value="Phòng khám A">Phóng khám A</option>
                                            <option value="Phòng khám B">Phóng khám B</option>
                                            <option value="Phòng khám C">Phóng khám C</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label style="color: cornflowerblue;">Ngày khám<span
                                                style="color: red">*</span></label>
                                        @error('date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <input type="date" class="form-control" name="date">
                                    </div>
                                    <div class="form-group">
                                        <label style="color: cornflowerblue;">Giờ khám<span
                                                style="color: red">*</span></label>
                                        @error('time_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <select class="select" name="time_id" required>
                                            <option value="1">8h-9h</option>
                                            <option value="2">9h-10h</option>
                                            <option value="3">10h-11h</option>
                                            <option value="4">11h-12h</option>
                                            <option value="5">13h-14h</option>
                                            <option value="6">14h-15h</option>
                                            <option value="7">15h-16h</option>
                                            <option value="8">16h-17h</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Lý do khám</label>
                                        <input type="text" class="form-control" name="reason">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Gửi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="{{ asset('sidebar-overlay') }}" data-reff=""></div>
@endsection
