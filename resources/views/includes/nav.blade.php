<!-- @if(Session::has('sid'))
<h1>{{Session::get('sid')}}</h1>
@endif -->
@php
$sid=session('sid');
@endphp

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <img src="pizza.jpg" width="70px">
      </li>
      <li>
      <a href="" class="btn btn-success">SignUp</a>
      </li>
     <li>
      <a href="" class="btn btn-success">Login</a>
     </li>
    </ul>
  </div>
</nav>