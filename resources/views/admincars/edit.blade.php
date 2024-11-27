<x-layout>

    <x-page-heading>Редакция на автомобил :</x-page-heading>

    <form class="max-w-2xl mx-auto space-y-6" method="POST" action="/admincars/{{ $data->id }}">
        @csrf
        @method('PATCH')

        <h2>Редактирай снимките на автомобила</h2>

        <div class="flex gap-1 mt-1 thumbnail-photos">
            @if(!empty($data->carPhotos))

            @foreach ($data->carPhotos->take($alabala->maxPhotos) as $photo)

            <div class="w-32 h-28">

                <img src="{{ asset('storage/' . $photo->file_path) }}" alt="Car Photo"
                    class="object-cover w-full h-full shadow img-thumbnail">

            </div>

            @endforeach

            @else <h1>Няма качени снимки за този автомобил</h1>

            @endif
        </div>
        <x-forms.button form="form-edit">Редактирай</x-forms.button>


        <x-forms.select id="brand_name" label="Марка" name="brand_id">
            <option value="">-избери марка за модела-</option>
            @foreach ( $carbrands as $carbrand )

            <option value="{{ $carbrand->id }}" {{ $data->carbrand->id == $carbrand->id ? 'selected' : '' }}>{{
                $carbrand->brand_name}}</option>

            @endforeach
        </x-forms.select>

        <x-forms.select id="model_name" label="Модел" name="model_id">
            <option value="">-избери модел-</option>
            @foreach ( $carmodels as $carmodel )

            <option value="{{ $carmodel->id }}" {{ $data->carmodel->id == $carmodel->id ? 'selected' : '' }}>{{
                $carmodel->model_name}}</option>

            @endforeach
        </x-forms.select>

        <x-forms.select id="engine_name" label="Двигател" name="engine_id">
            <option value="">-избери двигател-</option>
            @foreach ( $carengines as $carengine )

            <option value="{{ $carengine->id }}" {{ $data->carengine->id == $carengine->id ? 'selected' : '' }}>{{
                $carengine->engine_name}}</option>

            @endforeach
        </x-forms.select>

        <x-forms.select id="region_name" label="Регион" name="region_id">
            <option value="">-избери регион-</option>
            @foreach ( $regions as $region )

            <option value="{{ $region->id }}" {{ $data->region->id == $region->id ? 'selected' : '' }}>{{
                $region->region_name}}</option>

            @endforeach
        </x-forms.select>

        <x-forms.input label="Версия/Двигател/Спецификация" name="car_version"
            value="{{ old('car_description', $data->car_version) }}" id="cardescription" />

        <x-forms.input type="num" label="Цена" name="car_price" value="{{ old('car_price', $data->car_price) }}"
            id="carprice" />
        <x-forms.input type="num" label="Километри" name="car_km" value="{{ old('car_km', $data->car_km) }}"
            id="carkm" />

        @foreach ( $carequipmentgroups as $carequipmentgroup )

        <div class="border-b border-black">

            <strong>
                {{$carequipmentgroup->group_name}}
            </strong>

            @foreach ( $carequipments as $carequipment )

            @if ($carequipmentgroup->id == $carequipment->car_equipment_groups_id)
            <div>
                <input type="checkbox" name="carequipments[]" id="carequipment_{{ $carequipment->id}}"
                    value="{{ $carequipment->id }}" {{ in_array($carequipment->id,
                $car_equipment_ids) ? 'checked' : '' }}>
                <label for="carequipment_{{ $carequipment->id}}"
                    class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">{{
                    $carequipment->equipment_name}}</label>
            </div>
            @endif

            @endforeach

        </div>
        @endforeach

        <x-forms.input label="Намира се в " name="car_place" value="{{ old('car_place', $data->car_place) }}"
            id="carplace" />
        <x-forms.input type="email" label="Е-мейл за контакт " name="contact_mail"
            value="{{ old('contact_mail', $data->contact_mail) }}" id="contact_mail" />
        <x-forms.input type="num" label="Телефон за контакт " name="contact_phone"
            value="{{ old('contact_phone', $data->contact_phone) }}" id="contact_phone" />



        <x-forms.select id="status" label="Статус" name="status">
            <option value="0" {{ $data->status == '0' ? 'selected' : 'Изчакващ' }}>Изчакващ</option>
            <option value="1" {{ $data->status == '1' ? 'selected' : 'Активен' }}>Активен</option>
            <option value="2" {{ $data->status == '2' ? 'selected' : 'Неактивен' }}>Неактивен</option>
        </x-forms.select>
        <x-forms.button class="text-white">Редактирай</x-forms.button>
        <x-forms.button form="form-delete" class="text-red-700 bg-black">Изтрий</x-forms.button>

    </form>

    <form method="POST" action="/admincars/{{ $data->id }}" id="form-delete" class="hiden">
        @csrf
        @method('DELETE')
    </form>

    <form method="GET" action="/admincars/photos/edit/{{ $data->id }}" id="form-edit" class="hiden">
        @csrf
    </form>
</x-layout>