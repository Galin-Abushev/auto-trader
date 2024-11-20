<x-layout>
    <x-page-heading>Създаване на модел</x-page-heading>

    <x-forms.form method="POST" action="/carequipments/create">
        <div>
            <x-forms.select id="group_id" label="Група" name="group_id">
                <option value="">-избери към коя група е характеристиката-</option>
                @foreach ( $carequipmentgroups as $carequipmentgroup )



                <option value="{{ $carequipmentgroup->id }}">{{ $carequipmentgroup->group_name}}</option>
                @endforeach
            </x-forms.select>
            <x-forms.input label="Характеристика" name="equipment_name" />

        </div>
        <x-forms.button>Създай</x-forms.button>
    </x-forms.form>
</x-layout>