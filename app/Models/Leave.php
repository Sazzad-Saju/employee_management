<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Leave extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [

    ];

    /* Leave-Employee relation */
    public function employee()
    {
        return $this->belongsTo(Employee::class,'recommend_employee_id');
    }

    /* Leave-LeaveType relation */
    public function leaveType()
    {
        return $this->belongsTo(LeaveType::class);
    }
}
