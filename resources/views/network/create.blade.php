@extends('layouts.app')


@section('content')
    <div class="title m-b-md">
        Networks new
    </div>
    <form action="/networks" method="post">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name"  placeholder="Enter Name">
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type" id="exampleRadios1" value="1" checked>
                <label class="form-check-label" for="exampleRadios1">
                    Manual
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type" id="exampleRadios2" value="0">
                <label class="form-check-label" for="exampleRadios2">
                    Auto
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection