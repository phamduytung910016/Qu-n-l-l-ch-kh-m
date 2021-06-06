<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\MedicalExamination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use App\Models\ScheduleModel;
use App\Models\ServiceModel;
use Database\Seeders\MedicalExaminationSeeder;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    private $user;
    private $service;
    private $schedule;

    public function __construct(User $user, ServiceModel $service, ScheduleModel $schedule)
    {
        $this->user = $user;
        $this->service = $service;
        $this->schedule = $schedule;
    }

    public function postLogin(Request $request)
    {
        $service = $this->service;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            switch (Auth::user()->rule) {
                case 0:
                    return redirect('/user/get_register_schedule');
                    break;
                case 1:
                    return redirect('/admin');
                    break;
                case 2:
                    dd('đăng nhập thành công');
                    break;
            }
        } else {
            return back()->with('thongbao', 'Tài khoản không có trong cơ sở dữ liệu');
        }
    }

    public function logOut()
    {
        Auth::logout();
        return redirect('/');
    }

    public function index()
    {
        return view('dashboard');
    }

    public function getRegister()
    {
        return view('register');
    }

    public function postRegister(RegisterRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $data['confirm_password'] = Hash::make($request->confirm_password);
        $this->user->create($data);
        return redirect('/');
    }

    public function listAppointments()
    {
        $data = $this->schedule->all();
        return view('Schedule.list', compact('data'));
    }
}
