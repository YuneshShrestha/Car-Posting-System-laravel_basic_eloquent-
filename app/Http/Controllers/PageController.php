<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\HeadQuater;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('car.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Print Everything in request
        // $test=$request->all();

        // Print Everything except _token and name
        // 1.String
        // $test=$request->only('_token'); 
        // 2.Array
        // $test=$request->except(['_token','name']);

        // Inverse of except
        // $test=$request->only(['_token','name']);

        // Has() method
        // $test = $request->has('names');

        // Current Path
        // 1. dd($request->path());
        // 2. if($request->is('car')){
        //     dd('Yes the request is cars');
        // }

        // Current method
        // dd($request->isMethod('post'));

        // Prints complete url
        // dd($request->url());

        // Show Users IP
        dd($request->ip());
        $car = new Car();
        $car->name = $request->name;
        $car->founded = $request->founded;
        $car->description = $request->description;
        $car->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        // Trying to access all data from headquaters
        // $hq = HeadQuater::where('car_id','=',$id)->get();
        // var_dump($hq);

        // $products = Product::find($id);
        // print_r($products);
        $cars = Car::find($id);
        return view('car.show',compact('cars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
        return view('car.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car = Car::find($id);
        $car->name = $request->name;
        $car->founded = $request->founded;
        $car->description = $request->description;
        $car->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect('/');
    }
}
