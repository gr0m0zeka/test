@extends('layouts.app')

@section('content')
    <div class="title m-b-md">
        Networks
    </div>
    <div>
        <a  href="/networks/create">Create new</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">type</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($networks as $network)
        <tr>
            <th scope="row">{{ $network->id }}</th>
            <td>{{ $network->name }}</td>
            <td>{{ $network->type ? 'manual' : 'auto'}}</td>
            <td>
                <a href="/networks/{{ $network->id }}/edit">edit</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection