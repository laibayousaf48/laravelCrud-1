
@include('pages.header', ['name' => 'SALAR'])
<h1>Home page</h1>
<a href="{{route('blog')}}">Blog</a>
@php
    $users = ['Salar', 'Laiba', 'Imama']
@endphp
@foreach ($users as $user)
<ul>
    @if ($loop->even)
       <li style="color: cadetblue">{{$user}}</li> 
    @elseif($loop->odd)
        <li style="color: crimson">{{$user}}</li>
    @endif
@endforeach
</ul>
@include('pages.footer')