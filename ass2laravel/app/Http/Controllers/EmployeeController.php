<?php

namespace App\Http\Controllers;

use App\Models\EmployeeModel;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $data = EmployeeModel::all();
        return view("employeeview.front",compact("data"));
    }

    public function show($id){
        $param = EmployeeModel::find($id);
        return view("employeeview.display", compact("param"));
    }
    public function create(){
        return view("employeeview.add");
    }
    public function store(Request $request){
        $this->validate($request,[
            "name"=> "required",
            "gender"=> "required",
            "salary"=> "required",
            "birth_date"=> "required",
            "hire_date"=> "required",
            "phone"=> "required",
        ]);
        EmployeeModel::create($request->all());
        return redirect()->route("emp.index");
    }

    public function edit($id){
        $data = EmployeeModel::find($id);
        return view("employeeview.change", compact("data"));
    }
    public function update(Request $request, $id){
        $this->validate($request,[
            "name"=> "required",
            "gender"=> "required",
            "salary"=> "required",
            "birth_date"=> "required",
            "hire_date"=> "required",
            "phone"=> "required",
        ]);
        EmployeeModel::find($id)->update($request->all());
        return redirect()->route("emp.index");
    }
    public function destroy($id){
        EmployeeModel::find($id)->delete();
        return redirect()->route("emp.index");
    }
}
