<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Edit a Employee info</h1>
  <div>
    @if($errors->any())
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
    @endif
  </div>

  <form action="{{route('employee.update', ['employee' => $employee])}}" method="post">
    @csrf
    @method('put')
    <div>
      <label>Name</label>
      <input type="text" name="name" placeholder="Name" value="{{$employee->name}}" />
    </div>
    <div>
      <label>Email</label>
      <input type="email" name="email" placeholder="Email" value="{{$employee->email}}" />
    </div>
    <div>
      <label>Profession</label>
      <input type="text" name="profession" placeholder="Profession" value="{{$employee->profession}}" />
    </div>
    <div>
      <label>Salary</label>
      <input type="text" name="salary" placeholder="Salary" value="{{$employee->salary}}" />
    </div>
    <div>
      <input type="submit" value="Uptate" />
    </div>
  </form>
</body>

</html>