<x-layout>
    <div class="flex mb-2 ">
        <a href="/admincars/create" class="px-4 border-2 border-black rounded-xl ">+ Автомобил</a>
    </div>
    <x-forms.form action="/frontcars/result" class="items-start">

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

        <x-forms.button class="mt-2 mb-2 bg-blue-200 border border-black w-[100px] rounded-xl">Търси
        </x-forms.button>

        <strong>
            <h3 class="text-xl">Търси по характеристики на автомобила</h3>
        </strong>

        <div class="flex flex-col">
            @foreach ( $carequipmentgroups as $carequipmentgroup )
            <div class="text-justify border-b border-black">

                <strong>
                    {{$carequipmentgroup->group_name}}
                </strong>

                <div class="">

                    @foreach ( $carequipments as $carequipment )
                    @if ($carequipmentgroup->id == $carequipment->car_equipment_groups_id)

                    <div class="flex items-center me-4 ">
                        <input label="{{ $carequipment->equipment_name}}" name="carequipments[]"
                            id="carequipment_{{ $carequipment->id}}" type="checkbox" value="{{ $carequipment->id}}"
                            class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="carequipment_{{ $carequipment->id}}"
                            class="py-1 text-xs font-medium text-gray-900 ms-2 dark:text-gray-300">{{
                            $carequipment->equipment_name}}</label>
                    </div>

                    @endif

                    @endforeach

                    <div></div>
                </div>

            </div>
            @endforeach
        </div>


    </x-forms.form>



</x-layout>