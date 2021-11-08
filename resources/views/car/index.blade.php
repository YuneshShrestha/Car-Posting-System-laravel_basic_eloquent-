@extends('templates.app')
@section('content')
    <div>
            {{-- {{ $cars->name  }} --}}
    <a class="btn btn-primary w-100 my-5" href="/car/create">Add</a>
    @foreach ($cars as $item)
    <div>
        <div class="d-flex justify-content-between pt-5">
            <a href="car/{{ $item->id }}" class="h3 text-dark">{{ $item->name }}</a>
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
   <span> {{ $cars->links() }}</span>
   <style>
       .w-5{
           width: 25px;
       }
   </style>
    </div>
@endsection