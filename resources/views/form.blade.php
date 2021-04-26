@extends('layouts.app')
@section('title')
    form
@endsection
@section('content')
    <form action="{{route('form')}}" method="post">
        @csrf
        <div>
            <label for="firstname">Firstname</label><br>
            <input type="text" name="firstname" id="firstname">
        </div>
        <div>
            <label for="lastname">Lastname</label><br>
            <input type="text" name="lastname" id="lastname">
        </div>
        <div>
            <label for="date">Date of birth</label><br>
            <input type="date" name="date" id="date">
        </div>
        <br>
        <button type="submit">OK</button>
    </form>
@endsection
