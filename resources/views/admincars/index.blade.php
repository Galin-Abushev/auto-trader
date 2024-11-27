<x-layout>

    <div class="flex mb-2 ">
        <a href="/admincars/create" class="px-4 border-2 border-black rounded-xl ">+ Автомобил</a>
    </div>

    <x-forms.form class="items-start">

        <div class="flex mb-2 border-2 border-black rounded-xl">
            <div class="px-2 mb-2 text-xs">

                <x-forms.select class="w-40 bg-blue-200" id="brand_id" label="Марка" name="brand_id">
                    <option value="">-всички-</option>
                    @foreach ( $carbrands as $carbrand )
                    <option value="{{ $carbrand->id }}" {{ $selectedBrand==$carbrand->id ? 'selected' : '' }}>{{
                        $carbrand->brand_name}}</option>
                    @endforeach
                </x-forms.select>

            </div>


            <div class="px-2 mb-2 text-xs">

                <x-forms.select class="w-40 bg-blue-200" id="engine_id" label="Двигател" name="engine_id">
                    <option value="">-всички-</option>
                    @foreach ( $carengines as $carengine )

                    <option value="{{ $carengine->id }}" {{ $selectedEngine==$carengine->id ? 'selected' : '' }}>{{
                        $carengine->engine_name}}</option>

                    @endforeach

                </x-forms.select>
            </div>

            <div class="px-2 mb-2 text-xs">
                <x-forms.select class="w-40 bg-blue-200" id="region_id" label="Регион" name="region_id">
                    <option value="">-всички-</option>

                    @foreach ( $regions as $region )
                    <option value="{{ $region->id }}" {{ $selectedRegion==$region->id ? 'selected' : '' }}>{{
                        $region->region_name}}</option>

                    @endforeach
                </x-forms.select>
            </div>

            <div class="px-2 mb-2 text-xs">
                <x-forms.input type="number" name="car_km_from" label="Километри от:" id="car_km_from"
                    value="{{ request('car_km_from') }}" placeholder="КМ от">
                </x-forms.input>
            </div>

            <div class="px-2 mb-2 text-xs">
                <x-forms.input type="number" name="car_km_to" label="Километри до:" id="car_km_to"
                    value="{{ request('car_km_to') }}" placeholder="КМ до">
                </x-forms.input>
            </div>

            <div class="px-2 mb-2 text-xs">
                <x-forms.input type="number" name="car_price_from" label="Цена от:" id="car_price_from"
                    value="{{ request('car_price_from') }}" placeholder="Цена от">
                </x-forms.input>
            </div>

            <div class="px-2 mb-2 text-xs">
                <x-forms.input type="number" name="car_price_to" label="Цена до:" id="car_price_to"
                    value="{{ request('car_price_to') }}" placeholder="Цена до">
                </x-forms.input>
            </div>

            <div class="px-2 mb-2 text-xs">
                <x-forms.input name="car_version" label="Версия:" id="car_version" value="{{ request('car_version') }}"
                    placeholder="Версия">
                </x-forms.input>
            </div>

        </div>

        <x-forms.button class="mt-2 mb-2 bg-blue-200 border border-black rounded-xl">Търси</x-forms.button>

    </x-forms.form>
    @if ($cars->isEmpty())

    <p>Няма автомобили съответстващи на зададените критерии.</p>

    @else

    <table class="mt-2 border-4 border-black">
        <thead class="border-2 ">
            <tr class="text-xs text-white bg-blue-900 border-2 border-black">
                <th class="px-4 border-2 border-black">ID</th>
                <th class="px-4 border-2 border-black">Марка</th>
                <th class="px-4 border-2 border-black">Модел</th>
                <th class="px-4 border-2 border-black">Двигател</th>
                <th class="px-4 border-2 border-black">Регион</th>
                <th class="px-4 border-2 border-black">Спецификация</th>
                <th class="px-4 border-2 border-black">Цена</th>
                <th class="px-4 border-2 border-black">Километри</th>
                <th class="px-4 border-2 border-black">Дата на създаване</th>
                <th class="px-4 border-2 border-black">Последна редакция</th>
                <th class="px-4 border-2 border-black">Статус</th>
                <th class="px-4 border-2 border-black">Автор</th>
            </tr>
        </thead>
        <tbody class="text-xs border-2 border-black">

            @foreach ( $cars as $car)

            <tr class="border-2 border-black ">
                <td class="border-2 border-black">{{ $car->id}}</td>
                <td class="border-2 border-black">{{ $car->carBrand->brand_name}}</td>
                <td class="border-2 border-black">{{ $car->carmodel->model_name}}</td>
                <td class="border-2 border-black">{{ $car->carEngine->engine_name}}</td>
                <td class="border-2 border-black"> {{ $car->region->region_name}}</td>
                <td class="border-2 border-black"> {{ $car->car_version}}</td>
                <td class="border-2 border-black"> {{ $car->car_price}} лв.</td>
                <td class="border-2 border-black"> {{ $car->car_km}} км.</td>
                <td class="border-2 border-black"> {{ $car->created_at}}</td>
                <td class="border-2 border-black"> {{ $car->updated_at}}</td>
                <td class="border-2 border-black"> {{ $car->status_label}}</td>
                <td class="border-2 border-black"> {{ $car->createdby->name}}</td>

                <td>
                    <a href="/admincars/edit/{{ $car->id }}">Редактиране </a>
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>
    @endif
</x-layout>