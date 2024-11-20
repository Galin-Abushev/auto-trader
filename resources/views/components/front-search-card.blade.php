<div class="result-view">

    <div class="car-result">
        @if ($car->carPhotos->isNotEmpty())
        <div class="main-photo flash-image">
            <img src="{{ asset('storage/' . $car->carPhotos->first()->file_path) }}" alt="">
        </div>
        @endif

        <div class="small-photos">

            @foreach ($car->carPhotos->skip(1)->take(3) as $photo)


            <img src="{{ asset('storage/' . $photo->file_path) }}" class="flash-image" alt="Car Photo">


            @endforeach

        </div>




        <div class="car-info">
            <div class="">
                <strong>{{ $car->carBrand->brand_name}}</strong>
                <strong>{{ $car->carModel->model_name}}</strong>
                {{ $car->car_version}}
            </div>

            <div class="">
                Намира се в {{ $car->car_place}}
            </div>
            <div class="">
                {{ $car->car_price}} лв.
            </div>
            <div class="">
                Тел:{{ $car->contact_phone}}
            </div>
            <div class="">
                /частно лице/
            </div>
            <div class="">
                Изпрати E-мейл на продавача
            </div>
        </div>
    </div>
</div>