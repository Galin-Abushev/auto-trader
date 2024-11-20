@props(['label', 'name'])

@php
$defaults = [
'type' => 'checkbox',
'id' => $name,
'name' => $name,
'value' => old($name)
];
@endphp

<x-forms.field :$label :$name>
    <div class="px-5 py-4 border rounded-xl bg-white/10 border-white/10">
        <input {{ $attributes($defaults) }}>
    </div>
</x-forms.field>