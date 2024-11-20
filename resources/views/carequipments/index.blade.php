<x-layout>
    <div class="flex mb-2 ">
        <a href="/carequipments/create" class="px-4 border-2 border-black ">+ Характеристика</a>
    </div>
    <table class="border-4 border-black">
        <thead class="border-2 ">
            <tr class="text-white bg-blue-900 border-2 border-black ">
                <th class="px-4 border-2 border-black">ID</th>
                <th class="px-4 border-2 border-black">Група</th>
                <th class="px-4 border-2 border-black">Характеристика</th>
                <th class="px-4 border-2 border-black">Дата на създаване</th>
                <th class="px-4 border-2 border-black">Последна редакция</th>
                <th class="px-4 border-2 border-black">Статус</th>
                <th class="px-4 border-2 border-black">Автор</th>



            </tr>
        </thead>
        <tbody class="border-2 border-black">
            @foreach ( $carequipmentgroups as $carequipmentgroup)

            @foreach ($carequipments as $carequipment)
            @if ($carequipmentgroup->id == $carequipment->car_equipment_groups_id)


            <tr class="border-2 border-black ">
                <td class="border-2 border-black">{{ $carequipment->id}}</td>
                <td class="border-2 border-black">{{ $carequipmentgroup->group_name}}</td>
                <td class="border-2 border-black">{{ $carequipment->equipment_name}}</td>
                <td class="border-2 border-black">{{ $carequipment->created_at}}</td>
                <td class="border-2 border-black"> {{ $carequipment->updated_at}}</td>
                <td class="border-2 border-black"> {{ $carequipment->status_label}}</td>
                <td class="border-2 border-black"> {{ $carequipment->createdby->name}}</td>

                <td>
                    <a href="/carequipments/edit/{{ $carequipment->id }}">Редактиране </a>
                </td>


            </tr>
            @endif
            @endforeach
            @endforeach
        </tbody>
    </table>
</x-layout>