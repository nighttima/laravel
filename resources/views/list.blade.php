@extends('layouts.app')
@section('title')
    List
@endsection
@section('content')
    <div class="row align-content-center flex-column">
            @if(session('success'))
            <div class="">
                <div class="alert alert-success">
                    {{ session('success')}}
                </div>
            </div>
            @endif
        <div class="w-75 p-3">
            <a href="{{ route('form') }}"><button type="button" class="btn btn-success">Create</button></a>
        </div>
        <table class="table bg-light w-75">
            <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Text</th>
                <th scope="col">Date</th>
                <th scope="col">Change</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $value)
                <tr>
                    <td>{{ $value->title }}</td>
                    <td>{{ $value->text }}</td>
                    <td>{{ $value->date }}</td>
                    <td>
                        <a href="{{ route('form-show', $value->id) }}">
                            <button type="button"  class="btn btn-primary">Change</button>
                        </a>
                    </td>
                    <td>
                        <form action="{{route('form-delete-submit', $value->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
