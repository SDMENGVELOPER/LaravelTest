

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<h1 class="text-center " style="margin-bottom: 20px">List all employee</h1>
<a href="{{ route("emp.create") }}" class="btn btn-info" style="margin-left: 84%; margin-bottom:20px;">Add New</a>
<table class="table mx-auto border"  style="width: 80%">
    <thead class="table-dark">
       <tr class="text-center">
            <th>#ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Salary</th>
            <th>Birth Of Date</th>
            <th>Hire Of Date</th>
            <th>Phone</th>
            <th>Action</th>
       </tr>
    </thead>
    <tbody>
        @foreach ($data as $x)
            <tr class="text-center">
                <td class="fw-bold">{{ $x->id }}</td>
                <td class="border">{{ $x->name }}</td>
                <td class="border">{{ $x->gender == "M" ? "Male" : "Female" }}</td>
                <td class="border">{{ $x->salary }}$</td>
                <td class="border">{{date('d-m-Y', strtotime($x->birth_date))}}</td>
                <td class="border">{{ date('d-m-Y', strtotime($x->hire_date)) }}</td>
                <td class="border">{{ $x->phone }}</td>
                <td class="border">
                    <form action="{{ route("emp.destroy", $x->id) }}" method="post">
                        @csrf
                        @method("DELETE")
                        <a href="{{ route("emp.show",$x->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route("emp.edit",$x->id) }}" class="btn btn-success">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
