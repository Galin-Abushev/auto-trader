<x-layout>
    <section>
        <h3 class="mb-6 font-bold border-b-4 border-blue-600 ">НОВО ТЪРСЕНЕ</h3>

        <div class="grid gap-4 sm:grid-cols-12 rounded-xl ">

            <div class="mb-4 col-span-8 min-h-[600px] popup-gallery">
                @if ($car->carPhotos->isNotEmpty())
                <div class="">
                    <a href="{{ asset('storage/' . $car->carPhotos->first()->file_path) }}" title="The Cleaner">
                        <img src="{{ asset('storage/' . $car->carPhotos->first()->file_path) }}" alt=""
                            class="object-cover shadow-lg h-[500px] w-[800px]">

                    </a>
                </div>
                @endif

                <div class="flex gap-1 mt-1 thumbnail-photos">

                    @foreach ($car->carPhotos->skip(1)->take(6) as $photo)

                    <div class="w-32 h-28">

                        <a href="{{ asset('storage/' . $photo->file_path) }}" title="The Cleaner" class="w-32 h-28">

                            <div class="object-cover w-full h-full shadow img-thumbnail flash-image "
                                style="background-image: url('{{ asset('storage/' . $photo->file_path) }}');">

                            </div>
                        </a>

                    </div>

                    @endforeach

                </div>

            </div>


            <div class="ml-4 rounded-sm border-b-4 border-2 border-neutral-200 col-span-4 max-h-[400px] gap-1 scrolling-div"
                style="position: relative; down: 200px; top: 1px; right: 5px; left: 5px; width: 317px; height: 400px;">
                <div class="mt-2 ml-4 mr-4">
                    <strong>{{ $car->carBrand->brand_name}}</strong>
                    <strong>{{ $car->carModel->model_name}}</strong>
                    {{ $car->car_version}}
                </div>

                <div class="mt-2 ml-4 font-medium mr-4italic">
                    Намира се в {{ $car->car_place}}
                </div>
                <div class="mt-2 ml-4 mr-4 text-4xl font-bold text-blue-500">
                    {{ $car->car_price}} лв.
                </div>
                <div class="mt-2 ml-4 mr-4 text-4xl font-bold">
                    Тел:{{ $car->contact_phone}}
                </div>
                <div class="mt-2 ml-12 mr-4 font-medium">
                    /частно лице/
                </div>
                <div class="mt-2 ml-12 mr-6 font-medium text-blue-500 border-b border-blue-500">
                    Изпрати E-мейл на продавача
                </div>
            </div>
        </div>

        <div class="grid gap-4 sm:grid-cols-12 rounded-xl ">
            <div
                class="grid gap-1 sm:grid-cols-12  mt-2 rounded-sm border-b-4 border-2 border-neutral-200  col-span-8 h-[250px]">
                <div class=" ml-6 mt-2 rounded-sm  col-span-4 h-[40px] gap-1">
                    <div class="grid sm:grid-cols-12 ">
                        <div class="h-[35px] w-[35px]  col-span-3 mt-3">
                            <img src="{{ Vite::asset('resources/images/engine.png')}}" alt="">

                        </div>
                        <div>
                            <div class="text-sm text-gray-500 ">Двигател
                            </div>
                            <div class="text-xl font-bold ">{{ $car->carEngine->engine_name}}
                            </div>
                        </div>
                    </div>

                </div>
                <div class=" ml-6 mt-2 rounded-sm  col-span-4  h-[40px] gap-1">
                    <div class="grid sm:grid-cols-12 ">
                        <div class="h-[35px] w-[35px]  col-span-3 mt-3">
                            <img src="{{ Vite::asset('resources/images/engine.png')}}" alt="">

                        </div>
                        <div>
                            <div class="text-sm text-gray-500 ">Мощност
                            </div>
                            <div class="w-[120px] text-xl font-bold ">{{ $car->car_km}} км.
                            </div>
                        </div>
                    </div>

                </div>
                <div class=" ml-6 mt-2 rounded-sm  col-span-4 h-[40px] gap-1">
                    <div class="grid sm:grid-cols-12 ">
                        <div class="h-[35px] w-[35px]  col-span-3 mt-3">
                            <img src="{{ Vite::asset('resources/images/engine.png')}}" alt="">

                        </div>
                        <div>
                            <div class="w-[120px] text-sm text-gray-500 ">Скоростна кутия
                            </div>
                            <div class="text-xl font-bold ">{{ $car->carEngine->engine_name}}
                            </div>
                        </div>
                    </div>

                </div>
                <div class=" ml-6 mt-2 rounded-sm  col-span-4 h-[40px] gap-1">
                    <div class="grid sm:grid-cols-12 ">
                        <div class="h-[35px] w-[35px]  col-span-3 mt-3">
                            <img src="{{ Vite::asset('resources/images/transmission.png')}}" alt="">

                        </div>
                        <div>
                            <div class="w-[120px] text-sm text-gray-500 ">Скоростна кутия
                            </div>
                            <div class="text-xl font-bold ">{{ $car->carEngine->engine_name}}
                            </div>
                        </div>
                    </div>

                </div>
                <div class=" ml-6 mt-2 rounded-sm  col-span-4 h-[40px] gap-1">
                    <div class="grid sm:grid-cols-12 ">
                        <div class="h-[35px] w-[35px]  col-span-3 mt-3">
                            <img src="{{ Vite::asset('resources/images/engine.png')}}" alt="">

                        </div>
                        <div>
                            <div class="w-[120px] text-sm text-gray-500 ">Пробег [км]
                            </div>
                            <div class="w-[120px] text-xl font-bold ">{{ $car->car_km}} км
                            </div>
                        </div>
                    </div>

                </div>

                <div
                    class="text-blue-500 text-center border-t-2 border-dashed grid ml-10 mr-10   rounded-sm  border-neutral-200  col-span-12 h-[40px]">
                    Технически характеристики и разход на гориво
                </div>
            </div>

        </div>

        <div class="grid gap-4 sm:grid-cols-12 rounded-xl ">
            <div
                class="grid gap-4 border text-blue-500 sm:grid-cols-12  mt-2 rounded-sm  border-neutral-200  col-span-8 h-[40px]">
                <div class=" ml-6 rounded-sm col-span-4  h-[40px] gap-1 ">
                    <div class="flex items-center sm:grid-cols-12">
                        <div class="h-[15px] w-[15px]  col-span-3 mt-3 ml-2">
                            <img src="{{ Vite::asset('resources/images/writemessage.png')}}" alt="">

                        </div>
                        <div>
                            <div class="grid col-span-9 mt-2 ml-10 text-sm ">Напиши бележка
                            </div>

                        </div>
                    </div>

                </div>
                <div class=" ml-6 border rounded-sm  col-span-4  h-[40px] gap-1">
                    <div class="flex items-center sm:grid-cols-12">
                        <div class="h-[15px] w-[15px]  col-span-3 mt-3 ml-10">
                            <img src="{{ Vite::asset('resources/images/writemessage.png')}}" alt="">

                        </div>
                        <div>
                            <div class="grid col-span-9 mt-2 ml-10 text-sm ">Дай оценка
                            </div>

                        </div>
                    </div>

                </div>
                <div class=" ml-6 rounded-sm  col-span-4  h-[40px] gap-1">
                    <div class="flex items-center sm:grid-cols-12">
                        <div class="h-[15px] w-[15px]  col-span-3 mt-3">
                            <img src="{{ Vite::asset('resources/images/writemessage.png')}}" alt="">

                        </div>
                        <div>
                            <div class="grid col-span-9 mt-2 ml-6 text-sm ">Съобщи за нередност
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

        <x-show.techdata :$car />

        <x-show.equipments :$car :$carequipmentgroups />

        <x-show.similar :$similarCars />
    </section>



</x-layout>