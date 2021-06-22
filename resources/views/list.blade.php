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
        <div class="w-75 row justify-content-lg-end p-3">
            <a href="{{ route('form') }}"><button type="button" class="btn btn-success m-1">Create</button></a>
{{--            <a href="{{route('form-data', $sort->)}}"><button type="button" class="btn btn-secondary m-1" formaction="">Sort</button></a>--}}
            <button type="button" class="btn btn-secondary m-1 sort" formaction="">Sort</button>
        </div>
        <table class="table bg-light w-75">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Text</th>
                <th scope="col col-date">Date</th>
                <th scope="col">Change</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $value)
                <tr>
                    <td>{{ $value->id}}</td>
                    <td>{{ $value->title }}</td>
                    <td>{{ $value->text }}</td>
                    <td class="cal-date">{{ $value->date }}</td>
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
    <div class="row justify-content-center">
        {{$data->links()}}
    </div>
@endsection
@section('custom_js')
    <script>
        $(document).ready(function (){
            $('.sort').click(function (){
                console.log('yes');
            })
        })
    </script>
@endsection
