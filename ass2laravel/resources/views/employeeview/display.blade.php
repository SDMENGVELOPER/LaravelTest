<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h1 class="text-center " style="margin-bottom: 20px">View Employee Detail</h1>
<table class="table table-striped table-hover mx-auto border" style="width: 80%">
    <thead>
        <tr>
            <th>#ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Salary</th>
            <th>Birth Of Date</th>
            <th>Hire Of Date</th>
            <th>Phone</th>
       </tr>
    </thead>
    <tbody>
        <tr>
            <td class="fw-bold">{{ $param->id }}</td>
            <td>{{ $param->name }}</td>
            <td>{{ $param->gender == "M" ? "Male" : "Female" }}</td>
            <td>{{ $param->salary }}$</td>
            <td>{{ $param->birth_date}}</td>
            <td>{{ $param->hire_date }}</td>
            <td>{{ $param->phone }}</td>
        </tr>
    </tbody>

</table>
<div class="mx-auto" style="width:80%">
    <a href="{{ route("emp.index") }}" class="btn btn-info" >Back</a>
</div>
