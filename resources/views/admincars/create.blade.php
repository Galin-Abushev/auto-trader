<x-layout>
    <x-page-heading>Създаване на автомобил</x-page-heading>

    <x-forms.form method="POST" action="/admincars/create" enctype="multipart/form-data">
        <div>
            <x-forms.select id="brand_id" label="Марка" name="brand_id">
                <option value="">-избери-</option>
                @foreach ( $carbrands as $carbrand )
                <option value="{{ $carbrand->id }}">{{ $carbrand->brand_name}}</option>
                @endforeach
            </x-forms.select>

            <x-forms.select id="model_id" label="Модел" name="model_id">
                <option value="">-избери-</option>
                @foreach ( $carmodels as $carmodel )
                <option value="{{ $carmodel->id }}">{{ $carmodel->model_name}}</option>
                @endforeach
            </x-forms.select>

            <x-forms.select id="engine_id" label="Двигател" name="engine_id">
                <option value="">-избери-</option>
                @foreach ( $carengines as $carengine )
                <option value="{{ $carengine->id }}">{{ $carengine->engine_name}}</option>
                @endforeach
            </x-forms.select>

            <x-forms.select id="region_id" label="Регион" name="region_id">
                <option value="">-избери-</option>
                @foreach ( $regions as $region )
                <option value="{{ $region->id }}">{{ $region->region_name}}</option>
                @endforeach
            </x-forms.select>



            <x-forms.input label="Версия/Двигател/Спецификация" name="car_version" />
            <x-forms.input type="num" label="Цена" name="car_price" />
            <x-forms.input type="num" label="Километри" name="car_km" />
            <x-forms.input label="Намира се в" name="car_place" placeholder="Населено място..." />
            <x-forms.input type="email" label="Email за контакт" name="contact_mail"
                placeholder="Email за контакт..." />
            <x-forms.input type="num" label="Телефон за контакт" name="contact_phone" placeholder="Телефон..." />

        </div>

        <strong>
            <h3 class="text-xl">Характеристики на автомобила</h3>
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
                            class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">{{
                            $carequipment->equipment_name}}</label>
                    </div>

                    @endif

                    @endforeach

                    <div></div>

                </div>

            </div>
            @endforeach
        </div>
        <div>
            <x-forms.input type="file" label="Снимки за автомобила" name="car_photos[]" placeholder="Избери снимки..."
                multiple />
        </div>
        <x-forms.button>Създай</x-forms.button>
    </x-forms.form>
</x-layout>