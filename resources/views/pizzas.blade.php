@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">

    <div class="content" style="margin-top:50%;">
      <div class="piza-menu-list">
        <div class="title m-b-md">
           pizza menu list
        </div>
      <div class="container">
        <div class="row">
            <div class="col align-self-start"> 
                <p>Pizza</p>
            </div>
            <div class="col align-self-start"> 
                <p>Type</p>
            </div>
            <div class="col align-self-start">  
                 <p>Base</p>
            </div>
            <div class="col align-self-start"> 
                 <p>Name</p> 
            </div>
            <div class="col align-self-start"> 
                 <p>Price</p> 
            </div>
          
         </div>

         <!--row 2-->
         @foreach($pizzas as $pizza)
         <div class="row">
            <div class="col align-self-start"> 
                <img src="{{$pizza->image}}" width="100px">
            </div>
            <div class="col align-self-start"> 
            {{$pizza->type}}
            </div>
            <div class="col align-self-start">  
             {{$pizza->base}}   
            </div>
            <div class="col align-self-start"> 
              {{$pizza->name}}
            </div>
            <div class="col align-self-start"> 
               {{$pizza->price}}   
            </div>
           
            <button class="btn2 btn-secondary"><a href="{{route('order',['pizza'=>$pizza->id])}}">Order</a></button>
         </div>
         @endforeach



      
       </div>
    </div>
</div>
  

@endsection

