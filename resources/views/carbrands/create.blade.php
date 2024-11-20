<x-layout>
    <x-page-heading>Създаване на марка</x-page-heading>

    <x-forms.form method="POST" action="/carbrands/create">
        <x-forms.input label="Марка" name="brand_name" />
        <x-forms.button>Създай</x-forms.button>
    </x-forms.form>
</x-layout>