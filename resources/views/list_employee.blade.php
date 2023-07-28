<h3>Employee List</h3>

<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Phone</th>
        <th>Edit</th>
        <th>Delete</th>
    </thead>

        @foreach ($employees as $employee)
        <tbody>
            <tr>
                <td>{{$employee->id}}</td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->age}}</td>
                <td>{{$employee->phone}}</td>
                <td><a href="edit/{{$employee->id}}">Edit</a></td>
                <td><a href="delete/{{$employee->id}}">Delete</a></td>
            </tr>
        </tbody>
        @endforeach


</table>
