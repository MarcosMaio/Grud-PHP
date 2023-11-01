<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Create a Employee</h1>
  <div>
    @if($errors->any())
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
    @endif
  </div>

  <form action="{{route('employee.store')}}" method="post">
    @csrf
    @method('post')
    <div>
      <label>Name</label>
      <input type="text" name="name" placeholder="Name" />
    </div>
    <div>
      <label>Email</label>
      <input type="email" name="email" placeholder="Email" />
    </div>
    <div>
      <label>Profession</label>
      <input type="text" name="profession" placeholder="Profession" />
    </div>
    <div>
      <label>Salary</label>
      <input type="text" name="salary" placeholder="Salary" />
    </div>
    <div>
      <input type="submit" value="Save a New Employee" />
    </div>
  </form>
</body>

</html>