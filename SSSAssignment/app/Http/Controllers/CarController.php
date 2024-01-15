<?php

namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\Manufacturer;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $manufacturer = Manufacturer::orderBy('name')->pluck('name', 'id')->prepend('All Manufacturer', '');
        if (request('manufacturer_id') == null) {
            $cars = Car::all();
        } else {
            $cars = Car::where('manufacturer_id', request('manufacturer_id'))->get();
        }
        return view('carviews.index', compact('cars', 'manufacturer'));
    }

    public function create() 
    {
        $cars = new Car();
        $manufacturer = Manufacturer::orderBy('name')->pluck('name', 'id')->prepend('All Manufacturer', '');
        return view('carviews.createcars', compact('cars', 'manufacturer'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'model' => 'required',
            'year' => 'required',
            'salesperson_email' => 'required|email',
            'manufacturer_id' => 'required|exists:manufacturers,id'
        ]);
        Car::create($request->all());
        return redirect()->route('carviews.index')->with('message', 'Car Added');
    }
}
