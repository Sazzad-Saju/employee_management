<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendance extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded=[];

    /* Attendance-Employee relation */
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
