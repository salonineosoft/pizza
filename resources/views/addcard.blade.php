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
    <form method="post" action="addcard" enctype="multipart/form-data">
        @csrf()
        <input type="hidden" class="form-control col-5" value="{{$data->name}}"name="name" placeholder="Name">
        <input type="hidden" class="form-control col-5" value="{{$data->price}}" name="price" placeholder="Price">
        <input type="hidden" class="form-control col-5" name="quantity" placeholder="Quantity">
        <input type="hidden" name="mid" value="{{$data->id}}"> 
        <input type="hidden" class="form-control col-5" value="{{$data->image}}" name="image">
        <input type="submit" value="Add">
    </form> 

</body>
</html>