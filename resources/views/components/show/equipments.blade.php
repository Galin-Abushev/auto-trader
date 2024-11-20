<div class="">
    <div class="grid mt-4 techData sm:grid-rows-7">
        <div class="grid px-4 mt-2 border border-b-4 rounded-sm w-[692.8px] row-span-8 borderBox">
            @foreach ($carequipmentgroups as $carequipmentgroup)
            @php
            // Filter car equipments belonging to this group
            $groupEquipments = $car->carequipments->where('car_equipment_groups_id', $carequipmentgroup->id);
            @endphp

            @if ($groupEquipments->isNotEmpty())
            <div class="mb-4 w-[660px]">
                <!-- Group Name -->
                <strong class="block mb-2 text-lg">
                    {{ $carequipmentgroup->group_name }}
                </strong>

                <!-- Group Equipments -->
                <div class="grid grid-cols-2 gap-4">
                    @foreach ($groupEquipments as $index => $carequipment)
                    <div class="p-2 bg-gray-200">{{--{{ $loop->iteration % 2 == 1 ? 'bg-gray-200' : '' }}--}}
                        {{ $carequipment->equipment_name }}
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>