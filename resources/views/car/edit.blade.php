@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="/car/{{ $car->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" class="form-control" type="text" name="name" value="{{ $car->name }}">
            </div>
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <div class="form-group">
                <label for="founded">Founded</label>
                <input id="founded" class="form-control" type="text" name="founded" value="{{ $car->founded }}">
            </div>
            @error('founded')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <div class="form-group">
                <label for="description">Description</label>
                <textarea cols="30" rows="10" class="form-control" type="text" name="description"> {{ $car->description }}</textarea>
            </div>
            @error('description')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <button type="submit" class="btn btn-primary my-1">Save</button>
    
        </form>
    </div>
@endsection