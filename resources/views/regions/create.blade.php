<x-layout>
    <x-page-heading>Създаване на област</x-page-heading>

    <x-forms.form method="POST" action="/regions/create">
        <x-forms.input label="Област" name="region_name" />
        <x-forms.button>Създай</x-forms.button>
    </x-forms.form>
</x-layout>