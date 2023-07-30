<html>
    <head>
        <title>Student List</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h2>Student List</h2>
                <div class="col-md-12">
                    <table class="table table-striped">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>

                        @foreach ($students as $key=>$std)
                            <tr>
                                <td>{{$std->id}}</td>
                                <td>{{$std->name}}</td>
                                <td> <a href="#">Edit | Detete</a> </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-md-12">
                    {!! $students->appends(['short'=>'date'])->links() !!}
                </div>
            </div>
        </div>
    </body>
</html>
