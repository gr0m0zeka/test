@extends('layouts.app')


@section('content')
    <div class="title m-b-md">
        Adspend new
    </div>
    <form action="/adspends" method="post">
        @csrf
        <div class="form-group row">
            <label>Combination</label>
            <select class="selectpicker" name="combination_id">
                <option value="" disabled selected hidden>Not set</option>
                @foreach($combinations as $combination)
                    <option value="{{ $combination->id }}">{{ $combination->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group row">
            <label for="example-date-input" class="col-2 col-form-label">Date</label>
            <div class="col-10">
                <input class="form-control" type="date" value="" id="example-date-input" name="date">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">9.00 - 9.15</label>
            <div class="col-10">
                <input class="form-control" type="text" value="" name="amount_of_expenses[9.00 - 9.15]">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">9.15 - 9.30</label>
            <div class="col-10">
                <input class="form-control" type="text" value="" name="amount_of_expenses[9.15 - 9.30]">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">9.30 - 9.45</label>
            <div class="col-10">
                <input class="form-control" type="text" value="" name="amount_of_expenses[9.30 - 9.45]">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">9.45 - 10.00</label>
            <div class="col-10">
                <input class="form-control" type="text" value="" name="amount_of_expenses[9.45 - 10.00]">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection