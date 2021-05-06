@extends('layouts.app')
@section('title')
    Change
@endsection
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('form-update-submit', $data->id)}}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label><br>
            <input type="text" value="{{ $data->title }}" name="title" id="title">
        </div>
        <div>
            <label for="text">Text</label><br>
            <input type="text" value="{{ $data->text }}" name="text" id="text">
        </div>
        <div>
            <label for="date">Date</label><br>
            <input type="date" value="{{ $data->date }}" name="date" id="date">
        </div>
        <br>
        <button type="submit">OK</button>
    </form>
@endsection
