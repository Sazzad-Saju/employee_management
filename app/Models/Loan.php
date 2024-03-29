<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loan extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    /* Loan-Employee relation */
    public function employee(){
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
