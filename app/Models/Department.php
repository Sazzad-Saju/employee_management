<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function head()
    {
        return $this->belongsTo(Employee::class,'employee_id');
    }

    public function parentDepartment()
    {
        return $this->belongsTo(Department::class,'parent_department_id');
    }
}
