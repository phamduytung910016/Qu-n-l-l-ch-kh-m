@extends('master.layout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title" style="font-size: 30px">Chi tiết tài khoản</h1>
                    <h4 style="color: red;">Số Điện Thoại CSKH:0203361XXXX</h4>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="card-box">
                        @if (session('edit'))
                            <div class="alert alert-success alert-dismissible" style="width:50%;align-item:center">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>{{ session('edit') }}</strong>
                            </div>
                        @endif
                        @if (Auth::user()->rule == 0)
                            <form action="/user/edit" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Họ và tên<span style="color: red">*</span></label>
                                            <input type="text" class="form-control" value="{{ $data->name }}" name="name">
                                        </div>

                                        {{-- <div class="form-group">
                                            <label class="display-block">Giới tính:</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-label" for="gender_male"
                                                    value="{{ $data->sex }}">
                                            </div>
                                        </div> --}}
                                        <div class="form-group">
                                            <label>Điện thoại<span style="color: red">*</span></label>
                                            <input type="text" class="form-control" name="phone_number"
                                                value="{{ $data->phone_number }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Email<span style="color: red">*</span></label>
                                            <input type="email" class="form-control" name="email"
                                                value="{{ $data->email }}" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Chỉnh sửa thông tin</button>
                                </div>
                            </form>
                        @elseif (Auth::user()->rule == 1)
                            <form action="/admin/edit" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Họ và tên<span style="color: red">*</span></label>
                                            <input type="text" class="form-control" value="{{ $data->name }}" name="name">
                                        </div>

                                        <div class="form-group">
                                            <label>Điện thoại<span style="color: red">*</span></label>
                                            <input type="text" class="form-control" name="phone_number"
                                                value="{{ $data->phone_number }}" name="phone_number">
                                        </div>
                                        <div class="form-group">
                                            <label>Email<span style="color: red">*</span></label>
                                            <input type="email" class="form-control" name="email"
                                                value="{{ $data->email }}" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Chỉnh sửa thông tin</button>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
