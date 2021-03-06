
@include('includes.head')
@php
$sid=session('sid');
@endphp
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<img src="{{url('pi.jpg')}}" height="50px" width="50px" class="rounded-circle"/>
  <a class="navbar-brand" href="#">Welcome: {{$sid->email}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/menu">Menu<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="show">Cart(0{{session('count') }})</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="order">orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/edit/{{$sid->id}}">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout">Logout</a>
      </li>
    </ul>
  </div>
</nav>