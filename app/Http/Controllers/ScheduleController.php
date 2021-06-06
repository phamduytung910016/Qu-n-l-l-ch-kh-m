<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ServiceModel;
use Illuminate\Http\Request;
use App\Models\ScheduleModel;
use App\Notifications\SendMail;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterScheduleRequest;

class ScheduleController extends Controller
{
    private $schedule;
    private $service;
    private $user;
    public function __construct(ScheduleModel $schedule, ServiceModel $service, User $user)
    {
        $this->schedule = $schedule;
        $this->service = $service;
        $this->user = $user;
    }
    public function getRegisterSchedule()
    {
        $service = $this->service->all();
        return view('Schedule.register_schedual', compact('service'));
    }
    public function postRegisterSchedule(RegisterScheduleRequest $request)
    {
        $data = $this->schedule;
        $data->user_id = Auth::user()->id;
        $data->dob = $request->dob;
        $data->email = Auth::user()->email;
        $data->phone_number = $request->phone_number;
        $data->sex = $request->sex;
        $data->home_address = $request->home_address;
        $data->service_id = $request->service_id;
        $data->room_patients = $request->room_patients;
        $data->reason = $request->reason;
        $data->date = $request->date;
        $data->time_id = $request->time_id;
        $data->save();
        $user = $this->user::find(Auth::user()->id);
        $user->notify(new SendMail());
        return redirect('/user/get_register_schedule')->with('mail', 'Thông báo xác nhận lịch khám đã được gửi đến mail của bạn');
    }

    public function detail()
    {
        $data = $this->schedule->where('user_id', Auth::user()->id)->latest()->first();
        // dd($data);
        if ($data) {
            return view('Schedule.detail_schedual', compact('data'));
        }
        return back()->with('null', 'Bạn không có lịch khám nào');
    }

    public function list(){
        $userSchedules  = $this->schedule->where('user_id', Auth::user()->id)->latest()->get();
        return view('Schedule.list',compact('userSchedules'));
    }

    public function getDetail($id)
    {
        $data = $this->schedule->find($id);
        // dd($data);
        return view('Schedule.detail_schedual', compact('data'));

    }
}
