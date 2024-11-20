<x-layout>
    <x-page-heading>Създаване на двигател</x-page-heading>

    <x-forms.form method="POST" action="/carengines/create">
        <x-forms.input label="Двигател" name="engine_name" />
        <x-forms.button>Създай</x-forms.button>
    </x-forms.form>
</x-layout>