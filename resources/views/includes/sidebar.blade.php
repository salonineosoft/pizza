@php
$sid = session('sid');
@endphp
<div class="list-group mt-3">
 <img src="{{url('uploads/'.$sid->image)}}">
  <a href="changeimg" class="list-group-item list-group-item-action">Change Profile</a>
  <a href="showcate" class="list-group-item list-group-item-action">Category</a>
  <a href="showpro" class="list-group-item list-group-item-action">Products</a>
  <a href="changepass" class="list-group-item list-group-item-action disabled">Change Password</a>
</div>