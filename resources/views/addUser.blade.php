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
        <div class="row justify-content-center">
            <div class="col-5 card py-3 my-4">
                <h1>Add User</h1>
               {{-- @if ($errors->any())
               <ul class="alert alert-danger">
                @foreach ($errors as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
               @endif --}}
                <form action="{{route('addNewUser')}}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Name:</label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter your name" required>
                        <span class=" text-danger">
                            @error('name')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email:</label>
                        <input type="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter your email" required>
                        <span class=" text-danger">
                            @error('email')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="age">Age:</label>
                        <input type="number" name="age" value="{{old('age')}}" class="form-control @error('age') is-invalid @enderror" id="age" placeholder="Enter your age" required>
                        <span class=" text-danger">
                            @error('age')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="city">City:</label>
                        <input type="text" name="city" value="{{old('city')}}" class="form-control @error('city') is-invalid @enderror" id="city" placeholder="Enter your city" required>
                        <span class="text-danger">
                            @error('city')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>