@extends('layouts.app')

@section('content')
    <div class="title m-b-md">
        Combination
    </div>
    <div>
        <a  href="/combinations/create">Create new</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">code</th>
            <th scope="col">network</th>
        </tr>
        </thead>
        <tbody>
        @foreach($combinations as $combination)
            <tr>
                <th scope="row">{{ $combination->id }}</th>
                <td>{{ $combination->name }}</td>
                <td>{{ $combination->code}}</td>
                <td>{{ $networks[$combination->network_id]->name}}</td>
                <td>
                    <a href="/combinations/{{ $combination->id }}/edit">edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection