@include('includes.head')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    img{
        margin-left:210px;
    }
     .backgroud{
        background-color:whitesmoke;
        width: 500px;
        margin-left: 270px;
    } 
    </style>
</head>
<body>
   <div class="text-right">
    <a href="register" class="btn btn-success mt-5">SignUp</a>
    <a href="" class="btn btn-success mt-5">Login</a>
   </div>
   <div class="backgroud">
    <img src="pizza1.jpg" width="90px">
    <h2 class="text-center text-success" >Login</h2>
    <div class="container">
    <form method="post" class="form py-5" action="loginpart"> 
        @csrf()
        @if(Session::has('msg'))
          <div class="text-danger font-weight-bold ">{{Session::get('msg')}}</div>
          @endif

    @if($errors->has('email'))
        <div class="alert alert-danger col-9">{{$errors->first('email')}}</div>
        @endif
        <input type="email"  class="form-control col-9 m-auto"name="email" placeholder="Email"><br>
        @if($errors->has('password'))
        <div class="alert alert-danger col-9">{{$errors->first('password')}}</div>
        @endif
        <input type="password" class="form-control col-9 m-auto" name="password" placeholder="Password">
        <div class="text-center mt-4">
        <input type="submit" class="btn btn-success">
        </div>
    </form>
    </div>
    </div>
</body>
</html>
