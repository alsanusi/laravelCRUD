<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Full Name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Post</label>
                <input type="text" class="form-control" placeholder="Enter Post">
            </div>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input">
                    <label class="custom-file-label">Choose File</label>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Save Data</button>
        </form>
    </div>
</body>
</html>