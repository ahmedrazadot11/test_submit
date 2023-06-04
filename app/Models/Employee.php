<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function company(){
        return $this->belongsTo(Company::class, 'company_id');
    }
}
