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
        <div>
            <label for="firstname">Firstname</label><br>
            <input type="text" value="{{ $data->firstname }}" name="firstname" id="firstname">
        </div>
        <div>
            <label for="lastname">Lastname</label><br>
            <input type="text" value="{{ $data->lastname }}" name="lastname" id="lastname">
        </div>
        <div>
            <label for="date">Date of birth</label><br>
            <input type="date" value="{{ $data->date }}" name="date" id="date">
        </div>
        <br>
        <button type="submit">OK</button>
    </form>
@endsection
