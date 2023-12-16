<?php

namespace App\Http\Controllers;

use App\Models\DepartmentModel;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){

        $department = DepartmentModel::all();
        return view("departmentview.depFront",compact("department"));
    }

    public function show($id){
        $depm = DepartmentModel::find($id);
        return view("departmentview.depDisplay",compact("depm"));
    }

    public function create(){
        return view("departmentview.depAdd");
    }
    public function store(Request $request){
        $this->validate($request,[
            "dep_name"=> "required",
            "manager"=> "required",
            "employee_id"=> "required"

        ]);
        DepartmentModel::create($request->all());
        return redirect()->route("dep.index");
    }
    public function edit($id){
        $depm = DepartmentModel::find($id);
        return view("departmentview.depChange",compact("depm"));
    }
    public function update(Request $request, $id){
        $this->validate($request,[
            "dep_name"=> "required",
            "manager"=> "required",
            "employee_id"=> "required"
        ]);
        DepartmentModel::find($id)->update($request->all());
        return redirect()->route("dep.index");
    }
    public function destroy($id){
        DepartmentModel::find($id)->delete();
        return redirect()->route("dep.index");
    }

}
