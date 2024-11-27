<?php

namespace App\Http\Controllers;

use App\Models\CarEngine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCarEngineRequest;
use App\Http\Requests\UpdateCarEngineRequest;

class CarEngineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carengines = CarEngine::with('createdBy')->get();

        return view('carengines.index', [
            'carengines' => CarEngine::all(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carengines.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $carEngineAttributes = $request->validate([
            'engine_name' => ['required', 'unique:car_engines,engine_name']
        ]);

        $data = CarEngine::create([
            'engine_name' => $request->input('engine_name'),
            'created_by' => Auth::id(),
            'status' => 0,
        ]);

        return redirect('/carengines');
    }
    /**
     * Display the specified resource.
     */
    public function show(CarEngine $carEngine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {

        $data = CarEngine::find($id);

        return view('carengines.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
            // validate
        request()->validate([
            'engine_name' => ['required', 'min:2']
        ]);
            // autorize
            // update
            $data = CarEngine::findOrFail($id);

            $data->update([
                'engine_name' => request('engine_name'),
                'status' => request('status')
            ]);
            // persist
            // redirect to the car index
            return redirect('/carengines');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $data = CarEngine::findOrFail($id);

        $data->delete();

        return redirect('/carengines');

    }
}
