@extends('layouts.layout')
@section('content')

<div class="flex-center position-ref full-height">
    <div class="u-form">
        <form action="{{route('save-form')}}" method="POST">
            @csrf
            <input type="hidden" name="pizza_id" value="{{$pizza->id}}">
            <div class="mb-3 row">
                <label for="Enter your name" class="col-sm-3 col-form-label">Enter your name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control"name="name" id="name" required>
                </div>
            </div>
            <div class="row b-3">
                <label for="pizza type" class="col-sm-3 col-form-label">Choose a pizza type</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" value="{{$pizza->type}}" readonly>
                </div>
            </div>
            <div class="row b-3">
                <label for="pizza base" class="col-sm-3 col-form-label" >Choose a base type</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" value="{{$pizza->name}}" readonly>
                </div>
            </div>
            <div class="row">
            <button type="submit" class="btn btn-secondary">Submit</button>
            </div>
        </form>
    </div>
 </div>

@endsection
