<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Image CRUD Laravel - View</h1></br>
            <a href="/employee" class="btn btn-primary"> Add Employee Data </a>
            </br>
            </br>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Post</th>
                        <th scope="col">Image</th>
                        <th scope="col">Edit Data</th>
                        <th scope="col">Delet Data</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->post }}</td>
                        <td><img src="{{ asset('uploads/employee/' . $item->image) }}" width="100px" height="100px" alt="img"></td>
                        <td><a href="/editdata/{{ $item->id }}" class="btn btn-info"> Edit Data</a></td>
                        <td><a href="/deletedata/{{ $item->id }}" class="btn btn-danger"> Delete Data</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
