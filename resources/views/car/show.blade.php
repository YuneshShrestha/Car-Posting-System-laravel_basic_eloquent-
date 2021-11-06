@extends('templates.app')
@section('content')
    <div class="data p-5 d-flex justify-content-center align-items-center w-100 h-100">
       <div>
        <h3>{{ $cars->name }}</h3>
        <address>{{ $cars->founded }}</address>
        <p>
            {{ $cars->description }}
        </p>
        <ul style="list-style: none">
            Models:
                @forelse ($cars->carmodels as $item)
                    <li style="padding-right: 2px;">{{ $item['model_name'] }} </li>
                @empty
                    <p>List is empty</p>
                @endforelse
        </ul>
       
       </div>
       
    </div>
@endsection