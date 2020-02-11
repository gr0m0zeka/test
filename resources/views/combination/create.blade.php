@extends('layouts.app')


@section('content')
    <div class="title m-b-md">
        Combination new
    </div>
    <form action="/combinations" method="post">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name"  placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label>Code</label>
            <input type="text" class="form-control" name="code"  placeholder="Enter Code">
        </div>
        <div class="form-group">
            <label>Network</label>
            <select class="selectpicker" name="network_id">
                <option value="" disabled selected hidden>Not set</option>
            @foreach($networks as $network)
                    <option value="{{ $network->id }}">{{ $network->name }}</option>
            @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection