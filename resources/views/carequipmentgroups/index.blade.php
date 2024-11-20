<x-layout>
    <div class="flex mb-2 ">
        <a href="/carequipmentgroups/create" class="px-4 border-2 border-black ">+ Група</a>
    </div>
    <table class="border-4 border-black">
        <thead class="border-2 ">
            <tr class="text-white bg-blue-900 border-2 border-black ">
                <th class="px-4 border-2 border-black">ID</th>
                <th class="px-4 border-2 border-black">Група</th>
                <th class="px-4 border-2 border-black">Дата на създаване</th>
                <th class="px-4 border-2 border-black">Последна редакция</th>
                <th class="px-4 border-2 border-black">Статус</th>
                <th class="px-4 border-2 border-black">Автор</th>


            </tr>
        </thead>
        <tbody class="border-2 border-black">
            @foreach ($carequipmentgroups as $carequipmentgroup)

            <tr class="border-2 border-black ">
                <td class="border-2 border-black">{{ $carequipmentgroup->id}}</td>
                <td class="border-2 border-black">{{ $carequipmentgroup->group_name}}</td>
                <td class="border-2 border-black">{{ $carequipmentgroup->created_at}}</td>
                <td class="border-2 border-black"> {{ $carequipmentgroup->updated_at}}</td>
                <td class="border-2 border-black"> {{ $carequipmentgroup->status_label}}</td>

                <td class="border-2 border-black"> {{ $carequipmentgroup->createdBy->name}}</td>

                <td>
                    <a href="/carequipmentgroups/edit/{{ $carequipmentgroup->id }}">Редактиране </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>