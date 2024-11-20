<x-layout>
    <div class="flex mb-2 ">
        <a href="/carmodels/create" class="px-4 border-2 border-black ">+ Модел</a>
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

    @if ($carmodels->isEmpty())
    <p>Няма модели от тази марка.</p>
    @else
    <table class="mt-2 border-4 border-black">
        <thead class="border-2 ">
            <tr class="text-white bg-blue-900 border-2 border-black ">
                <th class="px-4 border-2 border-black">ID</th>
                <th class="px-4 border-2 border-black">Марка</th>
                <th class="px-4 border-2 border-black">Модел</th>
                <th class="px-4 border-2 border-black">Дата на създаване</th>
                <th class="px-4 border-2 border-black">Последна редакция</th>
                <th class="px-4 border-2 border-black">Статус</th>
                <th class="px-4 border-2 border-black">Автор</th>



            </tr>
        </thead>
        <tbody class="border-2 border-black">
            @foreach ( $carbrands as $carbrand)

            @foreach ($carmodels as $carmodel)
            @if ($carbrand->id == $carmodel->car_brand_id)


            <tr class="border-2 border-black ">
                <td class="border-2 border-black">{{ $carmodel->id}}</td>
                <td class="border-2 border-black">{{ $carbrand->brand_name}}</td>
                <td class="border-2 border-black">{{ $carmodel->model_name}}</td>
                <td class="border-2 border-black">{{ $carmodel->created_at}}</td>
                <td class="border-2 border-black"> {{ $carmodel->updated_at}}</td>
                <td class="border-2 border-black"> {{ $carmodel->status_label}}</td>
                <td class="border-2 border-black"> {{ $carmodel->createdby->name}}</td>

                <td>
                    <a href="/carmodels/edit/{{ $carmodel->id }}">Редактиране </a>
                </td>


            </tr>
            @endif
            @endforeach
            @endforeach
        </tbody>
    </table>
    @endif
</x-layout>