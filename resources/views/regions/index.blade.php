<x-layout>
    <div class="flex mb-2 ">
        <a href="/regions/create" class="px-4 border-2 border-black ">+ Област</a>
    </div>
    <table class="border-4 border-black">
        <thead class="border-2 ">
            <tr class="text-white bg-blue-900 border-2 border-black ">
                <th class="px-4 border-2 border-black">ID</th>
                <th class="px-4 border-2 border-black">Област</th>
                <th class="px-4 border-2 border-black">Дата на създаване</th>
                <th class="px-4 border-2 border-black">Последна редакция</th>
                <th class="px-4 border-2 border-black">Статус</th>
                <th class="px-4 border-2 border-black">Автор</th>


            </tr>
        </thead>
        <tbody class="border-2 border-black">
            @foreach ($regions as $region)

            <tr class="border-2 border-black ">
                <td class="border-2 border-black">{{ $region->id}}</td>
                <td class="border-2 border-black">{{ $region->region_name}}</td>
                <td class="border-2 border-black">{{ $region->created_at}}</td>
                <td class="border-2 border-black"> {{ $region->updated_at}}</td>
                <td class="border-2 border-black"> {{ $region->status_label}}</td>
                <td class="border-2 border-black"> {{ $region->createdby->name}}</td>

                <td>
                    <a href="/regions/edit/{{ $region->id }}">Редактиране </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>