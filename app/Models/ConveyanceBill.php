<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConveyanceBill extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    /* Bill-Employee relation */
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    /* Bill-BillType relation */
    public function billType(){
        return $this->belongsTo(BillType::class);
    }
}
