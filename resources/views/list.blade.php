@extends('layouts.app')
@section('title')
    List
@endsection
@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success')}}
        </div>
    @endif
    <table class="table bg-light w-50 ">
        <thead>
            <tr>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Date</th>
                <th scope="col">Change</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $value)
                <tr>
                    <td>{{ $value->firstname }}</td>
                    <td>{{ $value->lastname }}</td>
                    <td>{{ $value->date }}</td>
                    <td>
                        <a href="{{ route('form-update', $value->id) }}">
                            <button type="button"  class="btn btn-primary">Change</button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('form-delete-submit', $value->id) }}">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
