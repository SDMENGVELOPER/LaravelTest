<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<h1 class="text-center">List all information Department</h1>
<a href="{{ route("dep.create")}}" class="btn btn-info" style="margin-bottom: 20px;margin-left:75%;">Add New</a>

<table class="table table-dark table-striped mx-auto" style="width: 70%">
    <thead class="text-center">
        <tr>
            <th>#Id</th>
            <th>Dep_Name</th>
            <th>Manager</th>
            <th>Emp_Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($department as $dep)
            <tr>
                <td class="fw-bold">{{ $dep->id }}</td>
                <td>{{ $dep->dep_name }}</td>
                <td>{{ $dep->manager }}</td>
                <td>{{ $dep->getDepartment->name }}</td>
                <td>
                   <form action="{{ route("dep.destroy", $dep->id) }}" method="post">
                    @csrf
                    @method("DELETE")
                        <a href="{{ route("dep.show", $dep->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route("dep.edit", $dep->id) }}" class="btn btn-success">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                   </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
