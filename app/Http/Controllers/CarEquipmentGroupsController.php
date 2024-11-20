<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarEquipmentGroups;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCarEquipmentGroupsRequest;
use App\Http\Requests\UpdateCarEquipmentGroupsRequest;

class CarEquipmentGroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $carequipmentGroups = CarEquipmentGroups::with('createdBy')->get();

    return view('carequipmentgroups.index', [
        'carequipmentgroups' => CarEquipmentGroups::all(),

    ]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carequipmentgroups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'group_name' => ['required', 'unique:car_equipment_groups,group_name']
        ]);
        $data = CarEquipmentGroups::create([
            'group_name' => $request->input('group_name'),
            'created_by' => Auth::id(),
            'status' => 0,
        ]);

        return redirect('/carequipmentgroups');
    }

    /**
     * Display the specified resource.
     */
    public function show(CarEquipmentGroups $carEquipmentGroups)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = CarEquipmentGroups::find($id);

        return view('carequipmentgroups.edit', ['data' => $data]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
            // validate
        request()->validate([
            'group_name' => ['required', 'min:2']
        ]);
            // autorize
            // update
            $data = CarEquipmentGroups::findOrFail($id);

            $data->update([
                'group_name' => request('group_name'),
                'status' => request('status')
            ]);
            // persist
            // redirect to the car index
            return redirect('/carequipmentgroups');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $data = CarEquipmentGroups::findOrFail($id);

        $data->delete();

        return redirect('/carequipmentgroups');

    }


}
