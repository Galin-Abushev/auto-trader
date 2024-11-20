<x-layout>
    <x-page-heading>Създаване на група-характеристика</x-page-heading>

    <x-forms.form method="POST" action="/carequipmentgroups/create">
        <x-forms.input label="Група-характеристика" name="group_name" />
        <x-forms.button>Създай</x-forms.button>
    </x-forms.form>
</x-layout>