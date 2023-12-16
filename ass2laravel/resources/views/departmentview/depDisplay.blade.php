<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h3 class="text-center" style="margin-bottom: 20px">Department Detail</h3>

<table class="table table-success table-striped mx-auto" style="width: 60%">
   <thead>
        <tr>
            <th>#Id</th>
            <th>Dep_Name</th>
            <th>Manager</th>
            <th>Emp_Name</th>
        </tr>
   </thead>
   <tbody>
       <tr>
            <td class="fw-bold">{{ $depm->id }}</td>
            <td>{{ $depm->dep_name }}</td>
            <td>{{ $depm->manager }}</td>
            <td>{{ $depm->getDepartment->name }}</td>
       </tr>
   </tbody>
</table>
<a href="{{ route("dep.index") }}" class="btn btn-primary" style="margin-left: 20%">BACK</a>
