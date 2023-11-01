<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Employees</h1>
  <div>
    @if(session()->has('success'))
    <div>
      {{session('success')}}
    </div>
    @endif
  </div>
  <div>
    <div>
      <a href="{{route('employee.create')}}">Add a Employee</a>
    </div>
    <table border="1">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Profession</th>
        <th>Salary</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
      @foreach( $employees as $employee )
      <tr>
        <td>{{$employee->id}}</td>
        <td>{{$employee->name}}</td>
        <td>{{$employee->email}}</td>
        <td>{{$employee->profession}}</td>
        <td>{{$employee->salary}}</td>
        <td>
          <a href="{{route('employee.edit',['employee' => $employee])}}">Edit</a>
        </td>
        <td>
          <form method="post" action="{{route('employee.delete', ['employee' => $employee])}}">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" />
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
</body>

</html>