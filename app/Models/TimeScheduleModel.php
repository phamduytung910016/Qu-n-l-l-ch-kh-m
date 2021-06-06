<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeScheduleModel extends Model
{
    use HasFactory;
    protected $table="time";
    protected $fillable =['time_schedule'];
}
