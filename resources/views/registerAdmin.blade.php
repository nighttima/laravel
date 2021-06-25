@extends('layouts.app')
@section('title')
    Registration
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card p-3">
                <form action="{{route('register-admin')}}" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label><br>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label><br>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label><br>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password-confirm" class="form-label">confirm password</label><br>
                        <input type="password" name="password_confirmation" class="form-control" id="password-confirm">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">OK</button>
                </form>
            </div>
        </div>
    </div>
@endsection
