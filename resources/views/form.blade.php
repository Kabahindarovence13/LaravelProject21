@extends('layouts.layout')
@section('content')
    <div class="flex-center position-ref full-height">
        <form action="{{route('save-form')}}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="Enter your name" class="col-sm-3 col-form-label">Enter your name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control"name="name" id="name" required>
                </div>
            </div>
            <div class="row b-3">
                <label for="pizza type" class="col-sm-3 col-form-label">Choose a pizza type</label>
                <div class="col-sm-9">
                    <select class="form-select" name="type" aria-label="select a pizza type" required>
                        <option value="">Select a pizza type</option>
                        @foreach($pizzas as $pizza)
                        <option value="{{$pizza->name}}">{{$pizza->name}}</option>
                        @endforeach

                    </select>
                </div>
            </div>
            <div class="row b-3">
                <label for="pizza base" class="col-sm-3 col-form-label" >Choose a base type</label>
                <div class="col-sm-9">
                    <select class="form-select" name="base" aria-label="select a pizza base" required>


                        <option value="">Select a pizza base</option>
                        @foreach($pizzas as $pizza)
                            <option value="{{$pizza->base}}">{{$pizza->base}}</option>
                        @endforeach
                        <option value="">1</option>


                    </select>
                </div>
            </div>


            <div class="row">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
