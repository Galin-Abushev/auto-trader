<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Region;
use App\Mail\QueryEmail;
use App\Models\CarBrand;
use App\Models\CarModel;
use App\Models\CarPhoto;
use App\Models\CarEngine;
use Illuminate\Http\Request;
use App\Models\CarEquipments;
use App\Models\CarsEquipments;
use App\Models\CarEquipmentGroups;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $cars = Car::orderBy('created_at', 'desc')->take(8)->get();

        return view('frontcars.index', [
            'cars' => $cars,

        ]);
    }

    public function adminindex(Request $request)
    {
        $carbrands = CarBrand::all();
        $carengines = CarEngine::all();
        $regions = Region::all();
        //$car_km = Car::all();

        $cars = Car::all();
       // var_dump(  $cars );
        //die;
        $selectedBrand = $request->input('brand_id');

        $selectedEngine = $request->input('engine_id');

        $selectedRegion = $request->input('region_id');

        $car_km_from = $request->input('car_km_from');
        $car_km_to = $request->input('car_km_to');

        $car_price_from = $request->input('car_price_from');
        $car_price_to   = $request->input('car_price_to');

        $car_version = $request->input('car_version');

        $query = Car::query();

        if ($selectedBrand) {
            $query->where('car_brand_id', $selectedBrand);
        }

        if ($selectedEngine) {
            $query->where('car_engine_id', $selectedEngine);
        }

        if ($selectedRegion) {
            $query->where('region_id', $selectedRegion);
        }

        // Търсене по км
        if ($car_km_from && $car_km_to) {
            if($car_km_to < $car_km_from){
                echo 'Моля въведете правилно ограничението за километри';
            }
            if($car_km_from == $car_km_to){
                $query->where('car_km', $car_km_from);
            } else {
                $query->whereBetween('car_km', [$car_km_from, $car_km_to]);
            }
        }

        if ($car_km_from && !$car_km_to){
            $query->where('car_km', '>=', $car_km_from);
        }

        if ($car_km_to && $car_km_from ){
            $query->where('car_km', '<=', $car_km_to);
        }

        // Търсене по цена
        if ($car_price_from && $car_price_to) {
            if($car_price_to < $car_price_from){
                echo 'Моля въведете правилно ограничението за цена';
            }
            if($car_price_from == $car_price_to){
                $query->where('car_price', $car_price_from);
            } else {
                $query->whereBetween('car_price', [$car_price_from, $car_price_to]);
            }
        }

        if ($car_price_from && !$car_price_to){
            $query->where('car_price', '>=', $car_price_from);
        }

        if ($car_price_to && !$car_price_from){
            $query->where('car_price', '<=', $car_price_to);
        }

        if ($car_version) {
            $query->where('car_version', 'LIKE', '%'.$car_version.'%');
        }

        $cars = $query->get();

        return view('admincars.index', compact('cars', 'carbrands',  'carengines', 'regions', 'selectedBrand', 'selectedEngine', 'selectedRegion', 'car_km_from', 'car_km_to', 'car_version' ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function admincreate()
    {
        return view('admincars.create', [
            'cars' => Car::all(),
            'carbrands' => CarBrand::all(),
            'carmodels' => CarModel::all(),
            'carengines' => CarEngine::all(),
            'regions' => Region::all(),
            'carequipmentgroups' => CarEquipmentGroups::all(),
            'carequipments' => CarEquipments::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function adminstore(Request $request)
    {
        $request->validate([
            'brand_id' => ['required'],
            'model_id' => ['required'],
            'engine_id' => ['required'],
            'region_id' => ['required'],
            'car_version' => ['required', 'max:70'],
            'car_price' => ['required', 'min:1'],
            'car_km' => ['required', 'min:1'],
            'car_place' => ['required', 'min:1'],
            'contact_mail' => ['required'],
            'contact_phone' => ['required'],
            'car_photos.*' => 'image|mimes:jpeg,png,jpg,gif',


        ]);

        $result = Car::create([
            'employer_id' =>  Auth::id(),
            'car_brand_id' => $request->input('brand_id'),
            'car_model_id' =>  $request->input('model_id'),
            'car_engine_id' =>  $request->input('engine_id'),
            'region_id' =>  $request->input('region_id'),
            'car_version' =>  $request->input('car_version'),
            'car_price' =>  $request->input('car_price'),
            'car_km' =>  $request->input('car_km'),
            'car_place' =>  $request->input('car_place'),
            'contact_mail' =>  $request->input('contact_mail'),
            'contact_phone' =>  $request->input('contact_phone'),


            'created_by' => Auth::id(),
            'status' => 1,
        ]);

        $car_id = $result->id;
        $carequipments = $request->input('carequipments');

        if(is_array($carequipments) && count($carequipments) > 0 && !empty( $car_id))
        {
            foreach ( $carequipments as $equipment_id)
            {
                CarsEquipments::create([
                    'car_equipments_id' => $equipment_id,
                    'car_id'   => $car_id
                ]);
            }

        }


        if ($request->hasFile('car_photos'))
        {
            foreach ($request->file('car_photos') as $photo)
            {
                // Store each photo in the 'public/cars' directory
                $filePath = $photo->store('cars', 'public');

                // Save the photo record in the photos table
                CarPhoto::create([
                    'car_id' => $result->id, // Associate the photo with the car
                    'file_path' => $filePath,
                ]);
            }
        }
        return redirect('/admincars');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $car = Car::findOrFail($id);

        $cars = Car::orderBy('created_at', 'desc')->take(4)->get();

        $carequipments = CarEquipments::all();
        $carequipmentgroups = CarEquipmentGroups::all();
        $carsequipments = CarsEquipments::all();
        //$car_equipment_ids = $car->carequipments->car_equipments_id->pluck('id')->toArray();
        //@dd($car->carequipments->pivot->car_equipments_id);

        $similarCars = Car::
        where('car_brand_id', $car->car_brand_id)
        ->where('car_model_id', $car->car_model_id)
        ->where('id', '!=', $car->id)
        ->limit(4)
        ->get();

        return view('frontcars.show',compact('car', 'cars', 'carequipments', 'carsequipments', 'carequipmentgroups', 'similarCars'));
        }

    /**
     * Show the form for editing the specified resource.
     */
    public function adminedit( $id)
    {
        $data = Car::findOrFail($id);

        $alabala = new CarPhoto();
        $carbrands = CarBrand::all();
        $carmodels = CarModel::all();
        $carengines = CarEngine::all();
        $regions = Region::all();
        $carequipments = CarEquipments::all();
        $carequipmentgroups = CarEquipmentGroups::all();

        $car_equipment_ids = $data->carequipments->pluck('id')->toArray();
       // @dd($data);
//ar_dump($car_equipment_ids);
//die;

        return view('admincars.edit', [
            'data' => $data,
            'carbrands' => $carbrands,
            'carmodels' => $carmodels,
            'carengines' => $carengines,
            'regions' => $regions,
            'carequipments' => $carequipments,
            'car_equipment_ids' => $car_equipment_ids,
            'carequipmentgroups' => $carequipmentgroups,
            'alabala' => $alabala,

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function adminupdate(Request $request, $id)
    {
        $data = Car::findOrFail($id);
        //dd($request->all());
            // validate
        $request->validate([
                'brand_id' => ['required'],
                'model_id' => ['required'],
                'engine_id' => ['required'],
                'region_id' => ['required'],
                'car_version' => ['required', 'max:70'],
                'car_price' => ['required', 'min:1'],
                'car_km' => ['required'],
                'car_place' => ['required'],
                'contact_mail' => ['required'],
                'contact_phone' => ['required'],
                'status' => ['required'],



            ]);
                // autorize
                // update
                $data->update([
                    'car_brand_id' => request('brand_id'),
                    'car_model_id' => request('model_id'),
                    'car_engine_id' => request('engine_id'),
                    'region_id' => request('region_id'),
                    'car_version' => request('car_version'),
                    'car_price' => request('car_price'),
                    'car_km' => request('car_km'),
                    'car_place' => request('car_place'),
                    'contact_mail' => request('contact_mail'),
                    'contact_phone' => request('contact_phone'),
                    'status' => request('status'),

                ]);

                //dd($request->all());
                $data->carequipments()->sync($request->input('carequipments', []));

                // persist
                // redirect to the car index
                return redirect('/admincars');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function admindestroy($id)
    {

        $data = Car::findOrFail($id);

        $data->delete();

        return redirect('/admincars');

    }

    public function search(Request $request)
    {
        $carbrands = CarBrand::all();
        $carengines = CarEngine::all();
        $regions = Region::all();
        $carequipmentgroups = CarEquipmentGroups::all();
        $carequipments = CarEquipments::all();
        //$car_km = Car::all();

        $data = Car::all();
       // var_dump(  $cars );
        //die;
        $selectedBrand = $request->input('brand_id');

        $selectedEngine = $request->input('engine_id');

        $selectedRegion = $request->input('region_id');

        $car_km_from = $request->input('car_km_from');
        $car_km_to = $request->input('car_km_to');

        $car_price_from = $request->input('car_price_from');
        $car_price_to   = $request->input('car_price_to');

        $car_version = $request->input('car_version');

        $query = Car::query();

        if ($selectedBrand) {
            $query->where('car_brand_id', $selectedBrand);
        }

        if ($selectedEngine) {
            $query->where('car_engine_id', $selectedEngine);
        }

        if ($selectedRegion) {
            $query->where('region_id', $selectedRegion);
        }

        // Търсене по км
        if ($car_km_from && $car_km_to) {
            if($car_km_to < $car_km_from){
                echo 'Моля въведете правилно ограничението за километри';
            }
            if($car_km_from == $car_km_to){
                $query->where('car_km', $car_km_from);
            } else {
                $query->whereBetween('car_km', [$car_km_from, $car_km_to]);
            }
        }

        if ($car_km_from && !$car_km_to){
            $query->where('car_km', '>=', $car_km_from);
        }

        if ($car_km_to && $car_km_from ){
            $query->where('car_km', '<=', $car_km_to);
        }

        // Търсене по цена
        if ($car_price_from && $car_price_to) {
            if($car_price_to < $car_price_from){
                echo 'Моля въведете правилно ограничението за цена';
            }
            if($car_price_from == $car_price_to){
                $query->where('car_price', $car_price_from);
            } else {
                $query->whereBetween('car_price', [$car_price_from, $car_price_to]);
            }
        }

        if ($car_price_from && !$car_price_to){
            $query->where('car_price', '>=', $car_price_from);
        }

        if ($car_price_to && !$car_price_from){
            $query->where('car_price', '<=', $car_price_to);
        }

        if ($car_version) {
            $query->where('car_version', 'LIKE', '%'.$car_version.'%');
        }

        $data = $query->get();

        return view('frontcars.search', compact('data', 'carbrands',  'carengines', 'regions', 'carequipmentgroups', 'carequipments', 'selectedBrand', 'selectedEngine', 'selectedRegion', 'car_km_from', 'car_km_to', 'car_version' ));
    }

    public function result(Request $request)
    {
        $carbrands = CarBrand::all();
        $carengines = CarEngine::all();
        $regions = Region::all();
        $carequipmentgroups = CarEquipmentGroups::all();
        $carequipments = CarEquipments::all();
        //$car_km = Car::all();

        $data = Car::all();
       // var_dump(  $cars );
        //die;
        $selectedBrand = $request->input('brand_id');

        $selectedEngine = $request->input('engine_id');

        $selectedRegion = $request->input('region_id');

        $car_km_from = $request->input('car_km_from');
        $car_km_to = $request->input('car_km_to');

        $car_price_from = $request->input('car_price_from');
        $car_price_to   = $request->input('car_price_to');

        $car_version = $request->input('car_version');

        $query = Car::query();

        if ($selectedBrand) {
            $query->where('car_brand_id', $selectedBrand);
        }

        if ($selectedEngine) {
            $query->where('car_engine_id', $selectedEngine);
        }

        if ($selectedRegion) {
            $query->where('region_id', $selectedRegion);
        }

        // Търсене по км
        if ($car_km_from && $car_km_to) {
            if($car_km_to < $car_km_from){
                echo 'Моля въведете правилно ограничението за километри';
            }
            if($car_km_from == $car_km_to){
                $query->where('car_km', $car_km_from);
            } else {
                $query->whereBetween('car_km', [$car_km_from, $car_km_to]);
            }
        }

        if ($car_km_from && !$car_km_to){
            $query->where('car_km', '>=', $car_km_from);
        }

        if ($car_km_to && $car_km_from ){
            $query->where('car_km', '<=', $car_km_to);
        }

        // Търсене по цена
        if ($car_price_from && $car_price_to) {
            if($car_price_to < $car_price_from){
                echo 'Моля въведете правилно ограничението за цена';
            }
            if($car_price_from == $car_price_to){
                $query->where('car_price', $car_price_from);
            } else {
                $query->whereBetween('car_price', [$car_price_from, $car_price_to]);
            }
        }

        if ($car_price_from && !$car_price_to){
            $query->where('car_price', '>=', $car_price_from);
        }

        if ($car_price_to && !$car_price_from){
            $query->where('car_price', '<=', $car_price_to);
        }

        if ($car_version) {
            $query->where('car_version', 'LIKE', '%'.$car_version.'%');
        }

        $data = $query->paginate(8);

        return view('frontcars.result', compact('data', 'carbrands',  'carengines', 'regions', 'carequipmentgroups', 'carequipments', 'selectedBrand', 'selectedEngine', 'selectedRegion', 'car_km_from', 'car_km_to', 'car_version' ));
    }

    public function sendQuery(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        // Get the car owner's email
        $carOwnerEmail = $request->car_owner_email;

        // Send the email
        Mail::to($carOwnerEmail)->send(
            new QueryEmail($validated['name'], $validated['email'], $validated['message'])
        );

        // Redirect back with a success message
        return back()->with('success', 'Your query has been sent successfully.');
    }

}
