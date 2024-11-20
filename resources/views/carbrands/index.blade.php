<x-layout>
    <div class="flex mb-2 ">
        <a href="/carbrands/create" class="px-4 border-2 border-black ">+ Марка</a>
    </div>
    <x-forms.form class="items-start">

        <x-forms.select class="w-40 bg-blue-200" id="brand_id" label="Търси по марка" name="brand_id">
            <option value="">-избери-</option>
            @foreach ( $carbrands as $carbrand )
            <option value="{{ $carbrand->id }}" {{ $selectedBrand==$carbrand->id ? 'selected' : '' }}>{{
                $carbrand->brand_name}}</option>
            @endforeach
        </x-forms.select>

        <x-forms.button class="mt-2 mb-2 bg-blue-200 border border-black rounded-xl">Търси</x-forms.button>

    </x-forms.form>

    @if ($filteredCarBrands->isEmpty())
    <p>Няма намерени Марки.</p>

    @else

    <table class="mt-2 border-4 border-black">
        <thead class="border-2 ">
            <tr class="text-white bg-blue-900 border-2 border-black ">
                <th class="px-4 border-2 border-black">ID</th>
                <th class="px-4 border-2 border-black">Марка</th>
                <th class="px-4 border-2 border-black">Дата на създаване</th>
                <th class="px-4 border-2 border-black">Последна редакция</th>
                <th class="px-4 border-2 border-black">Статус</th>
                <th class="px-4 border-2 border-black">Автор</th>


            </tr>
        </thead>
        <tbody class="border-2 border-black">
            @foreach ($filteredCarBrands as $carbrand)

            <tr class="border-2 border-black ">
                <td class="border-2 border-black">{{ $carbrand->id}}</td>
                <td class="border-2 border-black">{{ $carbrand->brand_name}}</td>
                <td class="border-2 border-black">{{ $carbrand->created_at}}</td>
                <td class="border-2 border-black"> {{ $carbrand->updated_at}}</td>
                <td class="border-2 border-black"> {{ $carbrand->status_label}}</td>
                <td class="border-2 border-black"> {{ $carbrand->createdby->name}}</td>

                <td>
                    <a href="/carbrands/edit/{{ $carbrand->id }}">Редактиране </a>
                </td>


            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</x-layout>