<section>
    <h3 class="mb-6 font-bold border-b-4 border-blue-600">Още обяви за Автомобили и Джипове</h3>


    <div class="grid gap-8 lg:grid-cols-4">

        @forelse ( $similarCars as $similarCar )

        <a href="/frontcars/show/{{$similarCar->id}}/">
            <div class="flex flex-col bg-black/5 group flash-image">
                <div>
                    @if ($similarCar->carPhotos->isNotEmpty())
                    <div class="">
                        <img src="{{ asset('storage/' . $similarCar->carPhotos->first()->file_path) }}"
                            alt="Main Car Photo" class="object-cover  shadow-lg h-[200px] w-[300px]">
                    </div>
                    @endif

                    <div class="mt-5 font-bold group-hover:text-blue-600">{{ $similarCar->carBrand->brand_name
                        }} {{
                        $similarCar->carModel->model_name}} {{ $similarCar->car_version}}</div>
                    <div class="text-xl group-hover:text-blue-600">{{ $similarCar->car_price}} лв. ({{
                        $similarCar->car_km }} км)</div>
                </div>

                <div>

                    <div class="text-black/80">{{ $similarCar->region->region_name}}</div>
                    <div class="text-black/50">{{ $similarCar->created_at }}</div>

                </div>
            </div>
        </a>

        @empty
        @endforelse

    </div>

</section>