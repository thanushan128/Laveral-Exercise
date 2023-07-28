<html>

<head>
    <title>Student edit </title>
</head>

<body>
    <form action="/edit/{{ $student[0]->id }}" method="post">
        @csrf
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type='text' name='student_name' value='{{ $student[0]->name }}' />
                </td>
            </tr>
            <tr>
                <td colspan='2'>
                    <input type='submit' value="Update student" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
