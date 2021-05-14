@extends('layouts.app')
@section('title')
    form
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card p-3">
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
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label><br>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Text</label><br>
                        <textarea name="text" class="form-control"  id="text" style="height: 100px"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label><br>
                        <input type="date" name="date" id="date">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">OK</button>
                </form>
            </div>
        </div>
    </div>
@endsection
