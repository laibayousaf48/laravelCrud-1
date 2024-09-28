<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <style>
        nav .w-5{
            display: none;
        }
     </style>
</head>
<body>
   <div class="container">
    <div class="row">
        <div class="col-9">
    <h1>All Users List</h1>
    @if(session('message'))
    <h6 class="alert alert-success">
        {{ session('message') }}
    </h6>
@endif
    <a href="/addUser" class="btn btn-success btn-sm mb-3 ">Add New</a>
            <table class="table table-bordered table-striped ">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>View</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
                @foreach ($data as $id => $user )
                <tr>
                    <td> {{$user -> id}}</td>
                    <td>{{$user -> name}}</td>
                    <td> {{$user -> email}}</td>
                    <td> {{$user -> age}}</td>
                    <td> {{$user -> city}}</td>
                    <td class="text-center"> <a href="{{route('viewUser', $user->id)}}" class="btn btn-primary btn-sm">View</a></td>
                    <td class="text-center"> <a href="{{route('deleteUser', $user->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                    <td class="text-center"> <a href="{{route('updatepage', $user->id)}}" class="btn btn-warning btn-sm">Update</a></td>
                </tr>
                @endforeach
            </table>
            <div class="mt-5 flex">
                {{ $data->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
   </div>
</body>
</html>

<h3>
    
   
   
   
</h3>
    
