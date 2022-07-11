@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="/home" method="post">
                @csrf
                <div class="form-group mb-2">
                    <label for="" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group mb-2">
                    <label for="" class="form-label">Description</label>
                    <input type="text" name="desc" class="form-control" required>
                </div>
                <div class="button-group">
                    <button class="btn btn-info">Submit</button>
                    <a href="/home" class="btn btn-warning">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection