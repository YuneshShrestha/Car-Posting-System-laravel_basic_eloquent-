@extends('templates.app')
@section('content')
    <div class="data p-5 d-flex justify-content-center align-items-center w-100 h-100">
       <div>
        <h3>{{ $cars->name }}</h3>
        <address>{{ $cars->founded }}</address>
        {{-- <img src="{{ asset($cars->image) ?? asset('images/default.jpg') }}" alt="" class="img-thumbnail"> --}}
        {{-- @if (asset($cars->image) != '')
            <p>{{ $cars->image }}</p>
        @else
            <p>have</p>
        @endif --}}
       
        <img src="{{ (file_exists($cars->image)) ? asset($cars->image) : asset('images/default.jpg'); }}" alt="" class="img-thumbnail">
        <p>HeadQauter: {{ $cars->headquater->headquater ?? 'N/A' }}, {{ $cars->headquater->country ?? 'N/A' }}</p>
        <p>
            {{ $cars->description }}
        </p>
        <table class="table table-bordered table-striped">
            <tr>
                <th>Model</th>
                <th>Engines</th>
                <th>Production Date</th>
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
                    <td>
                        @forelse ($cars->production_date as $date)
                            @if ($date->model_id == $model->id)
                             {{ $date->production_date }}
                             @endif
                           @empty
                                N/A
                        @endforelse
                       
                      
                       
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No Data</td>
                </tr>
            @endforelse
        </table>
       <p>
           Product Types: <br>
           @forelse ($cars->products as $product)
               {{ $product->name }} <br>
           @empty
               <p>
                   No car product description
               </p>
           @endforelse
       </p>
       </div>
       
    </div>
@endsection