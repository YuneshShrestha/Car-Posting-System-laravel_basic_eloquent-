@extends('templates.app')
@section('content')
    <div class="data p-5 d-flex justify-content-center align-items-center w-100 h-100">
       <div>
        <h3>{{ $cars->name }}</h3>
        <address>{{ $cars->founded }}</address>
        <p>HeadQauter: {{ $cars->headquater->headquater ?? 'N/A' }}, {{ $cars->headquater->country ?? 'N/A' }}</p>
        <p>
            {{ $cars->description }}
        </p>
        <table class="table table-bordered table-striped">
            <tr>
                <th>Model</th>
                <th>Engines</th>
            </tr>
            @forelse ($cars->carmodels as $model)
                <tr>
                    <td>{{ $model->model_name }}</td>
                    <td>
                        @foreach ($cars->engines as $engine)
                            @if ($model->id == $engine->model_id)
                                {{ $engine->engine_name  }} <br> 
                            @endif
                        @endforeach
                    </td>
                </tr>
            @empty
                
            @endforelse
        </table>
       
       </div>
       
    </div>
@endsection