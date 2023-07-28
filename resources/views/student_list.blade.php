<html>

<head>
    <title>View Student Records</title>
</head>

<body>
    <table border=1>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td><a href="edit/{{$student->id}}">Edit </a> </td>
            <td><a href="delete/{{$student->id}}">Delete </a></td>
        </tr>
        @endforeach
    </table>
    <a href="delete_all">Delete All</a>
</body>

</html>
