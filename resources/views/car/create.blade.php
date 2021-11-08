@extends('templates.app')
@section('content')
    <form action="/car" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Image</label>
            <input id="image" class="form-control" type="file" name="image">
        </div>
        @error('image')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}">
        </div>
        @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="form-group">
            <label for="founded">Founded</label>
            <input id="founded" class="form-control" type="text" name="founded" value="{{ old('founded') }}">
        </div>                     
        @error('founded')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="form-group">
            <label for="description">Description</label>
            <textarea cols="30" rows="10" class="form-control" type="text" name="description">{{ old('description') }}</textarea>
        </div>
        @error('description')
         <p class="text-danger">{{ $message }}</p>
        @enderror
        <button type="submit" class="btn btn-primary my-1">Save</button>

    </form>
@endsection