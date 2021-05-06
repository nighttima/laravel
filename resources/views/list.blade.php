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
@endsection
