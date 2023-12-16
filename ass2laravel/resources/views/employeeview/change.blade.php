
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h1 class="text-center">Update Employee</h1>

<form action="{{ route("emp.update",$data->id) }}" method="post" class="mx-auto" style="width: 40%">
    @csrf
    @method("PUT")
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label px-2 fw-bold">Name</label>
      <input type="text" class="form-control" name="name" id="" aria-describedby="emailHelp" value="{{ $data->name }}">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label px-2 fw-bold">Gender</label>
      {{-- <input type="text" class="form-control" name="gender" id="" value="{{ $data->gender }}"> --}}
      <select class="form-select" aria-label="Default select example" name="gender" id="gender" >
        <option selected >{{  $data->gender }}</option>
        <option value="M">M</option>
        <option value="F">F</option>
      </select>
    </div>
    <div class="mb-3">
      <label class="form-label px-2 fw-bold" for="exampleCheck1">Salary</label>
      <input type="text" class="form-control" name="salary" id="" value="{{ $data->salary }}">
    </div>
    <div class="mb-3">
        <label class="form-label px-2 fw-bold" for="exampleCheck1">Birth of Date</label>
        <input type="datetime-local" id="" name="birth_date" class="form-control" value="{{ $data->birth_date }}">
    </div>
    <div class="mb-3">
        <label class="form-label px-2 fw-bold" for="exampleCheck1">Hire of Date</label>
        <input type="datetime-local" id="" name="hire_date" class="form-control" value="{{ $data->hire_date }}">
    </div>
    <div class="mb-3">
        <label class="form-label px-2 fw-bold" for="exampleCheck1">Phone</label>
        <input type="text" class="form-control" name="phone" id="" value="{{ $data->phone }}">
    </div>
    <a href="{{ route("emp.index") }}" class="btn btn-danger">Cancel</a>
    <button type="submit" class="btn btn-primary">Update</button>

</form>

