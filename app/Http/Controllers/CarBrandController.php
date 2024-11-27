<?php

namespace App\Http\Controllers;

use App\Models\CarBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCarBrandRequest;
use App\Http\Requests\UpdateCarBrandRequest;
use App\Models\Status;

class CarBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $selectedBrand = $request->input('brand_id');


        if ($selectedBrand) {
            $filteredCarBrands = CarBrand::where('id', $selectedBrand)->get();
        } else {

            $filteredCarBrands = CarBrand::all();
        }

        $carbrands = CarBrand::with('createdBy')->get();

        return view('carbrands.index', compact('carbrands', 'filteredCarBrands', 'selectedBrand'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carbrands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand_name' => ['required', 'unique:car_brands,brand_name']
        ]);

        $data = CarBrand::create([
            'brand_name' => $request->input('brand_name'),
            'created_by' => Auth::id(),
            'status' => 0,
        ]);

        return redirect('/carbrands');
    }

    /**
     * Display the specified resource.
     */
    public function show(CarBrand $carBrand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {

        $data = CarBrand::find($id);

        return view('carbrands.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $status = Status::all();

            // validate
        request()->validate([
            'brand_name' => ['required', 'min:2']
        ]);
            // autorize
            // update
            $data = CarBrand::findOrFail($id);

            $data->update([
                'brand_name' => request('brand_name'),
                'status' => request('status')
            ]);
            // persist
            // redirect to the car index
            return redirect('/carbrands');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $data = CarBrand::findOrFail($id);

        $data->delete();

        return redirect('/carbrands');

    }



}
