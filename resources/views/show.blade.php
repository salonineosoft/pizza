@include('includes.head')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <table class="table table-bordered">
      <thead>
        <!-- <tr>
          <th scope="col">Image</th>
          <th scope="col">Name</th>
          <th scope="col">Price</th>
          <th scope="col">Action</th>
        </tr> -->
      </thead>
      <tbody>
      @php
   $total=0;
   $sum=0;
   @endphp
          @foreach($show as $i)
        <tr>
          <td>
              <img src="{{$i->image}}" width="79px">
          </td>
          <td>{{$i->name}}</td>
          <td>&#8377;{{$i->price}}</td>
          <td>{{$i->quantity}}</td>
          <td>
              <a href="del/{{$i->id}}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
    @php
     $sum=$sum+($i->price*$i->quantity);
    @endphp
        @endforeach
            <td></td>
            <td>Total</td>
            <td class="text-success"> &#8377;{{$sum}}</td>
        </tr>
        <th>
        <a href="/checkout/{{$sum}}" class="btn btn-primary">checkout>></a>
        </th>
      </tbody>
    </table>
</div>
</body>
</html>