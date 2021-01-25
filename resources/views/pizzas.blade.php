@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
           pizza menu list
        </div>

        @foreach($pizzas as $pizza)
            <div>
               {{$pizza->name}}-{{$pizza->type}}-{{$pizza->base}}

            </div>
        @endforeach

        <button class="btn2"><a href="/pizzas/form">Order for a pizza</a></button>
    </div>
</div>
@endsection

