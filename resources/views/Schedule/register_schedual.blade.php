@extends('master.layout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-7">
                    <h1 class="page-title" style="font-size: 30px">Đặt lịch khám </h1>
                    <h4 style="color: red;">Số Điện Thoại CSKH:0203361XXXX</h4>
                </div>
                <div class="col-sm-5 col-9 text-right m-b-20">
                    <a href="/user/detail" class="btn btn btn-primary btn-rounded float-right"><i
                            class="fa fa-plus"></i> Chi tiết lịch khám</a>
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
                <div class="col-md-12">
                    <div class="card-box">
                        <form action="/user/post_register_schedule" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Họ và tên<span style="color: red">*</span></label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->name }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Ngày sinh</label>
                                        <input type="date" class="form-control" name="dob">
                                    </div>
                                    <div class="form-group">
                                        <label class="display-block">Giới tính:</label>
                                        @error('sex')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sex" id="gender_male"
                                                value="nam">
                                            <label class="form-check-label" for="gender_male">Nam</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sex" id="gender_female"
                                                value="nữ">
                                            <label class="form-check-label" for="gender_female">Nữ</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Điện thoại<span style="color: red">*</span></label>
                                        @error('phone_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <input type="text" class="form-control" name="phone_number">
                                    </div>
                                    <div class="form-group">
                                        <label>Email<span style="color: red">*</span></label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ Auth::user()->email }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input type="home_address" class="form-control" name="home_address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="color: cornflowerblue;">Dịch vụ khám</label>
                                        <select class="select" name="service_id">
                                            <option>Dịch vụ khám</option>
                                            @foreach ($service as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label style="color: cornflowerblue;">Phòng khám</label>
                                        <select class="select" name="room_patients">
                                            <option>Select</option>
                                            <option value="Phòng khám A">Phóng khám A</option>
                                            <option value="Phòng khám B">Phóng khám B</option>
                                            <option value="Phòng khám C">Phóng khám C</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label style="color: cornflowerblue;">Ngày khám</label>
                                        @error('date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <input type="date" class="form-control" name="date">
                                    </div>
                                    <div class="form-group">
                                        <label style="color: cornflowerblue;">Giờ khám</label>
                                        @error('time_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <select class="select" name="time_id">
                                            <option>Select</option>
                                            <option value="1">6h-8h</option>
                                            <option value="2">8h-10h</option>
                                            <option value="3">13h-15h</option>
                                            <option value="4">15h-17h</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Lý do khám</label>
                                        <input type="text" class="form-control" name="reason">
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="{{ asset('sidebar-overlay') }}" data-reff=""></div>
@endsection
