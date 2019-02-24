@extends('layouts.includes')
    @section('content')
     <div class="container-fluid h-100 bg-dark">
         <div class="row h-100  align-items-center">
             <div class="col-md-5 m-auto col-sm-12 ">
                 <h1 class="text-center text-light">Hello, dear guest</h1>
                 <h3 class="text-center text-light">Before using our site
                you need log in or sign up</h3><br>
                <div class="row justify-content-around text-center">
                    <div class="col-md-4 col-sm-6">                        
                        <a href="{{route('login')}}"><button class="btn btn-success w-75">Log In</button></a>
                    </div><br>  <br>  <br>  
                    <div class="col-md-4 col-sm-6">
                        <a href="{{route('register')}}"><button class="btn btn-success w-75">Sign Up</button></a>
                    </div>
                </div>
             </div> 
         </div>
     </div>
    @endsection










   

