<h1>Create Employee Form</h1>

<form action="{{url('update/'.$employee->id)}}" method="post">
    <label>Name </label><input type="text" name="name" value="{{$employee->name}}">
    <label>Age </label><input type="text" name="age" value="{{$employee->age}}">
    <label>Phone </label><input type="text" name="phone" value="{{$employee->phone}}">
    <input type="submit" value="Update Employee">
    @csrf
</form>
