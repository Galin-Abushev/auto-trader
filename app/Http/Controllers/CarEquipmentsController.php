<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarEquipments;
use App\Models\CarEquipmentGroups;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCarEquipmentsRequest;
use App\Http\Requests\UpdateCarEquipmentsRequest;

class CarEquipmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carEquipments = CarEquipments::with('createdBy')->get();

        return view('carequipments.index', [
            'carequipmentgroups' => CarEquipmentGroups::all(),
            'carequipments' => CarEquipments::all(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carequipments.create', [
            'carequipmentgroups' => CarEquipmentGroups::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'group_id' => ['required'],
            'equipment_name' => ['required']
        ]);

        CarEquipments::create([
            'car_equipment_groups_id' => $request->input('group_id'),
            'equipment_name' =>  $request->input('equipment_name'),
            'created_by' => Auth::id(),
            'status' => 0,
        ]);

        return redirect('/carequipments');
    }

    /**
     * Display the specified resource.
     */
    public function show(CarEquipments $carEquipments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $carequipmentgroup = CarEquipmentGroups::all();

        $data = CarEquipments::find($id);

        return view('carequipments.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
            // validate
            request()->validate([
                'equipment_name' => ['required']
            ]);
                // autorize
                // update
                $data = CarEquipments::findOrFail($id);

                $data->update([
                    'equipment_name' => request('equipment_name'),
                    'status' => request('status')

                ]);
                // persist
                // redirect to the car index
                return redirect('/carequipments');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $data = CarEquipments::findOrFail($id);

        $data->delete();

        return redirect('/carequipments');

    }
}
