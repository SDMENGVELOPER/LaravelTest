<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentModel extends Model
{
    use HasFactory;

    protected $table = 'department';
    protected $PRIMARY_KEY = 'id';
    protected $fillable = [
        "dep_name",
        "manager",
        "employee_id"
    ];

    public function getDepartment(){
        return $this->belongsTo(EmployeeModel::class,'employee_id','id');
    }
}
