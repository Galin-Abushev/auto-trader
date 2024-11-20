<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarBrand;
use App\Models\CarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCarModelRequest;
use App\Http\Requests\UpdateCarModelRequest;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $carbrands = CarBrand::all();

        $selectedBrand = $request->input('brand_id');

        //$carmodels = CarModel::with('createdBy')->get();

        if ($selectedBrand) {
            $carmodels = CarModel::where('car_brand_id', $selectedBrand)->get();
        } else {
            $carmodels = CarModel::all();
        }

        return view('carmodels.index', compact('carmodels', 'carbrands', 'selectedBrand'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carmodels.create', [
            'carbrands' => CarBrand::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand_id' => ['required'],
            'model_name' => ['required']
        ]);

        CarModel::create([
            'car_brand_id' => $request->input('brand_id'),
            'model_name' =>  $request->input('model_name'),
            'created_by' => Auth::id(),
            'status' => 0,
        ]);

        return redirect('/carmodels');
    }

    /**
     * Display the specified resource.
     */
    public function show(CarModel $carModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $carbrand = CarBrand::find($id);
        $data = CarModel::find($id);

        return view('carmodels.edit', [
            'data' => $data,
            'carbrand' => $carbrand,
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $data = CarModel::findOrFail($id);

            // validate
            request()->validate([
                'model_name' => ['required']
            ]);
                // autorize
                // update

                $data->update([
                    'model_name' => request('model_name'),
                    'status' => request('status')

                ]);
                // persist
                // redirect to the car index
                return redirect('/carmodels');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $data = CarModel::findOrFail($id);

        $data->delete();

        return redirect('/carmodels');

    }
}
