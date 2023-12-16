<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    use HasFactory;

    protected $table = 'employee';
    protected $primary_key= 'id';
    protected $fillable = [
        "name",
        "gender",
        "salary",
        "birth_date",
        "hire_date",
        "phone"
    ];

    public function employee(){
        return $this->hasMany(DepartmentModel::class,"employee_id","id");
    }
}
