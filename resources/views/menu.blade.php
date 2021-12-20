@include('includes.head')
@include('includes.navv')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
            margin-left: 69px;
        }
    </style>
</head>
<body>

    <div class="row">
    @foreach($menu as $i)
    
<div class="card ml-5 mt-3" style="width: 18rem;">
  <img class="card-img-top" src='{{asset("$i->image")}}' width="50px" height="170px">
  <div class="card-body">
    <h3 class="card-title text-center">{{$i->name}}</h3>
    <h5 class="card-text text-center">{{$i->price}}</h5>
    <form method="post" action="insert/{{$i->id}}">
        @csrf
    <input type="number" class="col-3" name="quantity">
    <input type="hidden" name="cardid" value="{{$i->id}}">
    <input type="submit" class="btn btn-primary" value="add to cart">
    </form>
    <!-- <a href="addcard/{{$i->id}}" class="btn btn-success">Add to cart</a> -->
  </div>
</div>
@endforeach
    </div>
</body>
</html>