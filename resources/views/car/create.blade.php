@extends('templates.app')
@section('content')
    <form action="/car" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" class="form-control" type="text" name="name">
        </div>
        <div class="form-group">
            <label for="founded">Founded</label>
            <input id="founded" class="form-control" type="text" name="founded">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea cols="30" rows="10" class="form-control" type="text" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary my-1">Save</button>

    </form>
@endsection