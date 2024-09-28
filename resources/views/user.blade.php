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
    <div class="my-3 py-4 row justify-content-center">
        <div class="card col-4 flex">
            <h1 class="text-center">Single User View</h1>
            @foreach ($data as $id => $user)
                <h3 class="">Name: {{ $user->name }}</h3>
                <h3 class="">Email: {{ $user->email }}</h3>
                <h3 class="">Age: {{ $user->age }}</h3>
                <h3 class="">City: {{ $user->city }}</h3>
            @endforeach
        </div>
    </div>
    
</body>

</html>
