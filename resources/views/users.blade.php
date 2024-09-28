<h1>Users of this Website</h1>
@foreach ($users as $id => $user)
    <ul>
        <li>{{$user[1]}} <a href="{{route('user', $user[0])}}">Show Details</a></li>
    </ul>
@endforeach