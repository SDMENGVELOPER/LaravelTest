<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h4 class="text-center fw-bold" style="margin-bottom: 20px">Add New Department</h4>

<form style="width: 35%" class="mx-auto" action="{{ route("dep.store") }}" method="post">
    @csrf
    @method("POST")
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">Dep_Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="dep_name" id="dep_name">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Manager</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="manager" id="manager">
      </div>
    </div>
    <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Emp_Name</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="employee_id" id="employee_id">
        </div>
    </div>
    <div style="width: 30%" class="mx-auto">
        <a href="{{ route("dep.index") }}" class="btn btn-danger">Cancel</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
