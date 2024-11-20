<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreRegionRequest;
use App\Http\Requests\UpdateRegionRequest;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regions = Region::with('createdBy')->get();

        return view('regions.index', [
            'regions' => Region::all(),

        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('regions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $regionAttributes = $request->validate([
            'region_name' => ['required', 'unique:regions,region_name']
        ]);
        $data = Region::create([
            'region_name' => $request->input('region_name'),
            'created_by' => Auth::id(),
            'status' => 0,
        ]);

        return redirect('/regions');
    }

    /**
     * Display the specified resource.
     */
    public function show(Region $region)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {

        $data = Region::find($id);

        return view('regions.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
            // validate
        request()->validate([
            'region_name' => ['required', 'min:2']
        ]);
            // autorize
            // update
            $data = Region::findOrFail($id);

            $data->update([
                'region_name' => request('region_name'),
                'status' => request('status')
            ]);
            // persist
            // redirect to the car index
            return redirect('/regions');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $data = Region::findOrFail($id);

        $data->delete();

        return redirect('/regions');

    }
}
