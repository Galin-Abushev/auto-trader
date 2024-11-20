<x-layout>
    <x-page-heading>Създаване на модел</x-page-heading>

    <x-forms.form method="POST" action="/carmodels/create">
        <div>
            <x-forms.select class="w-60" id="brand_id" label="Марка" name="brand_id">
                <option value="">-избери марка за модела-</option>
                @foreach ( $carbrands as $carbrand )
                <option value="{{ $carbrand->id }}">{{ $carbrand->brand_name}}</option>
                @endforeach
            </x-forms.select>
            <x-forms.input class="w-60" label="Модел" name="model_name" />

        </div>
        <x-forms.button>Създай</x-forms.button>
    </x-forms.form>
</x-layout>