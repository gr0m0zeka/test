@extends('layouts.app')


@section('content')
    <div class="title m-b-md">
        Combination {{ $combination->name }}
    </div>
    <form action="/combinations/{{ $combination->id }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put" />
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name"  placeholder="Enter Name" @if(isset($combination)) value="{{ $combination->name }}" @endif>
        </div>
        <div class="form-group">
            <label>Code</label>
            <input type="text" class="form-control" name="code"  placeholder="Enter Code" @if(isset($combination)) value="{{ $combination->code }}" @endif>
        </div>
        <div class="form-group">
            <select class="selectpicker" name="network_id">
                @foreach($networks as $network)
                    <option value="{{ $network->id }}" @if(isset($combination) && $network->id == $combination->network_id) selected @endif>{{ $network->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection