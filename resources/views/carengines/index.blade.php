<x-layout>
    <div class="flex mb-2 ">
        <a href="/carengines/create" class="px-4 border-2 border-black ">+ Двигател</a>
    </div>
    <table class="border-4 border-black">
        <thead class="border-2 ">
            <tr class="text-white bg-blue-900 border-2 border-black ">
                <th class="px-4 border-2 border-black">ID</th>
                <th class="px-4 border-2 border-black">Двигател</th>
                <th class="px-4 border-2 border-black">Дата на създаване</th>
                <th class="px-4 border-2 border-black">Последна редакция</th>
                <th class="px-4 border-2 border-black">Статус</th>
                <th class="px-4 border-2 border-black">Автор</th>

            </tr>
        </thead>
        <tbody class="border-2 border-black">
            @foreach ($carengines as $carengine)

            <tr class="border-2 border-black ">
                <td class="border-2 border-black">{{ $carengine->id}}</td>
                <td class="border-2 border-black">{{ $carengine->engine_name}}</td>
                <td class="border-2 border-black">{{ $carengine->created_at}}</td>
                <td class="border-2 border-black"> {{ $carengine->updated_at}}</td>
                <td class="border-2 border-black"> {{ $carengine->status_label}}</td>
                <td class="border-2 border-black"> {{ $carengine->createdby->name}}</td>

                <td>
                    <a href="/carengines/edit/{{ $carengine->id }}">Редактиране </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>