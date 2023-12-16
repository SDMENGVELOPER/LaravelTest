
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h3 class="text-center">Add New Employee</h3>

<form action="{{ route("emp.store") }}" method="post" class="mx-auto" style="width: 40%">
    @csrf
    @method("POST")
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label px-2 fw-bold">Name</label>
      <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label px-2 fw-bold">Gender</label>
      {{-- <input type="text" class="form-control" name="gender" id="gender"> --}}
      <select class="form-select" aria-label="Default select example" name="gender" id="gender">
        <option selected >Open this select gender</option>
        <option  value="M">M</option>
        <option  value="F">F</option>
      </select>
    </div>
    <div class="mb-3">
      <label class="form-label px-2 fw-bold" for="exampleCheck1">Salary</label>
      <input type="text" class="form-control" name="salary" id="salary">
    </div>
    <div class="mb-3">
        <label class="form-label px-2 fw-bold" for="exampleCheck1">Birth of Date</label>
        <input type="datetime-local" id="birth_date" name="birth_date" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label px-2 fw-bold" for="exampleCheck1">Hire of Date</label>
        <input type="datetime-local" id="hire_date" name="hire_date" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label px-2 fw-bold" for="exampleCheck1">Phone</label>
        <input type="text" class="form-control" name="phone" id="phone">
    </div>
    <a href="{{ route("emp.index") }}" class="btn btn-danger">Cancel</a>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
