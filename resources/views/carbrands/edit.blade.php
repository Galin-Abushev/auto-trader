<x-layout>
    <x-page-heading>Редакция на марка: {{ $data->brand_name}}</x-page-heading>

    <form class="max-w-2xl mx-auto space-y-6" method="POST" action="/carbrands/{{ $data->id }}">
        @csrf
        @method('PATCH')
        <x-forms.input value="{{ $data->brand_name }}" label="Марка" name="brand_name" />
        <x-forms.select id="status" label="Статус" name="status">
            <option value="0" {{ $data->status == '0' ? 'selected' : 'Изчакващ' }}>Изчакващ</option>
            <option value="1" {{ $data->status == '1' ? 'selected' : 'Активен' }}>Активен</option>
            <option value="2" {{ $data->status == '2' ? 'selected' : 'Неактивен' }}>Неактивен</option>
        </x-forms.select>
        <x-forms.button class="text-white">Редактирай</x-forms.button>
        <x-forms.button form="form-delete" class="text-red-700 bg-black">Изтрий</x-forms.button>

    </form>

    <form method="POST" action="/carbrands/{{ $data->id }}" id="form-delete" class="hiden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>