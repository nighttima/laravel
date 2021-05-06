@extends('layouts.app')
@section('title')
    form
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
    <form action="{{route('form-contact')}}" method="post">
        @csrf
        <div>
            <label for="title">Title</label><br>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="text">Text</label><br>
            <input type="text" name="text" id="text">
        </div>
        <div>
            <label for="date">Date of birth</label><br>
            <input type="date" name="date" id="date">
        </div>
        <br>
        <button type="submit">OK</button>
    </form>
@endsection
