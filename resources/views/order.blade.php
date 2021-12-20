@include('includes.head')
@php
$sum = session('sum');
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <h3 class="text-center text-success">Your Order Details</h3>
<div class="row">
    @foreach($data as $i)
    <table class="table table-bordered">
        <tr>
            <td>{{$i->created_at}}</td>
            <td>
                <img src="{{url($i->image)}}" width="80px">
            </td>
            <td>
              {{$i->quantity}}
            </td>
            <td>
                {{$sum}}
            </td>

        </tr>
    </table>

    <!-- <a href="addcard/{{$i->id}}" class="btn btn-success">Add to cart</a> -->
  </div>
</div>
@endforeach
    </div>
</body>
</html>