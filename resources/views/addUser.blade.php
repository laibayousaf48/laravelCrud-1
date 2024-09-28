<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <h1>Add User</h1>
                <form action="{{route('addNewUser')}}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="age">Age:</label>
                        <input type="number" name="age" class="form-control" id="age" placeholder="Enter your age" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="city">City:</label>
                        <input type="text" name="city" class="form-control" id="city" placeholder="Enter your city" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>