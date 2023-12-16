<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h1 class="text-center">Update Department</h1>
<form class="mx-auto" style="width: 40%" action="{{ route("dep.update", $depm->id) }}" method="post">
    @csrf
    @method("PUT")
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label fw-bold">Dep_Name</label>
      <input type="text" class="form-control" name="dep_name" id="dep_name" aria-describedby="emailHelp" value="{{ $depm->dep_name }}">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label fw-bold">Manager</label>
      <input type="text" class="form-control" name="manager" id="manager" value="{{ $depm->manager }}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label fw-bold">Emp_Name</label>
        <input type="number" class="form-control" name="employee_id" id="employee_id" value="{{ $depm->employee_id}}">
    </div>
    <a href="{{ route("dep.index") }}" class="btn btn-danger">Cancel</a>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
