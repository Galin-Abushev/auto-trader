<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarBrand;
use App\Models\CarPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CarPhotoController extends Controller
{


public function index($id)
{
    $data = Car::findOrFail($id);
    $carBrand = CarBrand::all();
    $alabala = new CarPhoto();


    $carPhotos = CarPhoto::all();
    return view('car-photo.index', compact('data', 'carBrand', 'alabala'));
}


public function store(Request $request, $id)
{
    $request->validate([
        'car_photos.*' => 'required|image|mimes:png,jpg,jpeg,webp'
    ]);

    if ($request->hasFile('car_photos'))
        {
            foreach ($request->file('car_photos') as $photo)
            {
                // Store each photo in the 'public/cars' directory
                $filePath = $photo->store('cars', 'public');

                // Save the photo record in the photos table
                CarPhoto::create([
                    'car_id' => $id, // Associate the photo with the car
                    'file_path' => $filePath,
                ]);
            }
        }
        return redirect('/admincars/photos/edit/'.$id);
}

public function edit($id)  {
    $data = Car::findOrFail($id);

    $carPhotos = CarPhoto::all();

    return view('car-photo.index', [
        'data' => $data,
        'carPhotos' => $carPhotos,



    ]);
}

public function destroy($id)  {

    $data = CarPhoto::findOrFail($id);

    $car_id = $data->car_id;

if(Storage::exists($data->file_path)){
    //Storage::disk('public')->delete($data->file_path);
    Storage::delete($data->file_path);

    $data->delete($id);
}
    return redirect('/admincars/photos/edit/'.$car_id);}

}
