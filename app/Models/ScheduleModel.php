<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleModel extends Model
{
    use HasFactory;
    protected $table = "schedule";
    protected $fillable = ['user_id','home_address','service_id','room_patients','reason','date','time_id'];
    public function time(){
        return $this->belongsTo(TimeScheduleModel::class,'time_id');
    }
    public function service(){
        return $this->belongsTo(ServiceModel::class,'service_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
