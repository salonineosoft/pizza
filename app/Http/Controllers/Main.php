<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\menu;
use App\Models\cart;
use App\Models\show_order;

class Main extends Controller
{
    //
    public function login()
    {
        return view('login');

    }
    public function register()
    {
        return view('register');

    }
    public function home()
    {
        return view('home');

    }
    // public function insert(Request $req)
    // {
    //     menu::where('id',$req->id)->update([
    //           'quantity'=> $req->quantity

    //     ]);

    // }
    //registration page
    public function insertregis(Request $req)
    {
         $validateregis = $req->validate([
          'name'=>'required',
          'email'=>'required',
          'password'=>'required',
          'mobile'=>'required',
          'city'=>'required'
         ]);
         if($validateregis)
         {
             $name=$req->name;
             $email=$req->email;
             $password=$req->password;
             $mobile=$req->mobile;
             $city=$req->city;

             $main = new order();
             $main->name = $name;
             $main->email = $email;
             $main->password = $password;
             $main->mobile = $mobile;
             $main->city = $city;
            if($main->save())
            {
                return redirect('login');
            }          

         }
    } 
    //login page
    public function loginpart(Request $req)
    {
        $validateregis = $req->validate([ 
            'email'=>'required',
            'password'=>'required',
           
           ]);
           if($validateregis)
           {
               $email=$req->email;
               $password=$req->password;
               $data = order::where('email',$email)->first();
               if($data)
               {
                   $pass = $data->password;
                   if($pass==$password)
                   {
                     $req->session()->put('sid',$data);
                        //session(['sid'=>$password]);
                       return redirect('menu');
                   }
                   else{
                       return back()->with('msg','wrong password');
                   }
   
               }
               else{
                   return back()->with('msg','Email and Password does not match');
               }
           }
           else{
               return back()->with('msg','user not registerd');
           }
    }
    public function menu()
    {
        $menu=menu::all();
        return view('menu',compact('menu'));
    }
    public function addcard( Request $req,$id)
    {
        $menu = menu::where('id',$id)->first();
        //count on cart
        $orders = show_order::all();
       // $count=$orders->count();//in menu no of rows count method count all row
        $sum=$orders->sum('price');
       // session()->put('count',$count);
        session()->put('sum',$sum);

        $sid = session('sid');
      $data = new show_order();
      $data->quantity = $req->quantity;
      $data->cat_id = $req->cardid;
      $data->user_id = $sid->id;
      $data->image =$menu->image;
      $data->price = $menu->price;
      $data->name = $menu->name;
      $data->save();
      //count for cart
      $orders = show_order::all();
      $count=$orders->count();//in menu no of rows count method count all row
      session()->put('count',$count);
      return redirect('menu');

       
    }
    //show all orders
    public function show()
    {
        $sid = session('sid');
        $show = show_order::where('user_id',$sid->id)->get();
        return view('show',compact('show'));
    }
    // public function details()
    // {
    //     $sid = session('sid');
    //    $data = show_order::where('user_id',$sid->id)->get();
    //    return $data;
    //    foreach($data as $i)
    //    {
    //     $data = menu::all()->where('id',$i->quantity);
    //    }
    //}

    //logout
    public function logout(Request $req)
    {
        // session()->forget('sid');
        // return redirect('login');
       // Auth::logout();
       $req->session()->flush();
        return redirect('login');
    }

 public function del($id){
 show_order::find($id)->delete();
 $orders = show_order::all();
 $count=$orders->count();//in menu no of rows count method count all row
 session()->put('count',$count);
 return redirect('show');
 }
 public function checkout($tot){
    return view('checkout',['sum'=>$tot]);
    //return redirect('success');
}
public function payment(Request $req){
    $validatedData=$req->validate([
        'credit'=>'required',
    ]);
    if($validatedData){
        show_order::where('user_id',$req->uid)->delete();
       return view('success'); 
}
   
}
public function success(){
    return view('success');
}
public function order()
{
    $sid = session('sid');
    $data = show_order::all()->where('user_id',$sid->id);
    return view('order',compact('data'));
}
}