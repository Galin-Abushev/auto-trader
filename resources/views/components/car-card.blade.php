<div class="flex flex-col bg-black/5 group flash-image">
    <div>
        @if ($car->carPhotos->isNotEmpty())
        <div class="">
            <img src="{{ asset('storage/' . $car->carPhotos->first()->file_path) }}" alt="Main Car Photo"
                class="object-cover  shadow-lg h-[200px] w-[300px]">
        </div>
        @endif

        <div class="mt-5 font-bold group-hover:text-blue-600">{{ $car->carBrand->brand_name }} {{
            $car->carModel->model_name}} {{ $car->car_version}}</div>
        <div class="text-xl group-hover:text-blue-600">{{ $car->car_price}} лв. ({{ $car->car_km }} км)</div>
    </div>

    <div>

        <div class="text-black/80">{{ $car->region->region_name}}</div>
        <div class="text-black/50">{{ $car->created_at }}</div>

    </div>
</div>