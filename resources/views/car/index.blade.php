@extends('templates.app')
@section('content')
    {{-- {{ $cars->name  }} --}}
    <a class="btn btn-primary w-100 my-5" href="/car/create">Add</a>
    @foreach ($cars as $item)
    <div>
        <div class="d-flex justify-content-between pt-5">
            <h3>{{ $item->name }}</h3>
            <div>
               
                <form action="/car/{{ $item->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <a class="edit btn btn-success" href="car/{{ $item->id }}/edit">Edit</a>
                    <button class="delete btn btn-danger" type="submit">Delete</button>

                </form>
            </div>
        </div>
        <address class="text-secondary">{{ $item->founded }}</address>
        <p>
          {{ $item->description }}
        </p>
        <hr>
    </div>
    @endforeach
@endsection