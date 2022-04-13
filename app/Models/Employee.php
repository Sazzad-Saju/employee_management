<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Employee extends Authenticatable
{

    use HasApiTokens,HasFactory, SoftDeletes, Notifiable;

    protected $guard= 'employee';
    protected $guarded = [];

    /* Employee-designation relation */
    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }

    /* Employee-bloodGroup relation */
    public function bloodGroup()
    {
        return $this->belongsTo(BloodGroup::class);
    }

    /* Employee-department relation */
    public function department(){
        return $this->belongsTo(Department::class);
    }

    /* Employee-leaves relation */
    public function leaves()
    {
        return $this->hasMany(Leave::class);
    }

    /* Employee-loans relation */
    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    protected $hidden = [
        'password', 'remember_token',
    ];
}
