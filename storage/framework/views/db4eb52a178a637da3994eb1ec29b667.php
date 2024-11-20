<div class="">
    <div class="grid mt-4 techData sm:grid-rows-7">
        <div class="grid px-4 mt-2 border border-b-4 rounded-sm w-[692.8px] row-span-8 borderBox">
            <?php $__currentLoopData = $carequipmentgroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carequipmentgroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            // Filter car equipments belonging to this group
            $groupEquipments = $car->carequipments->where('car_equipment_groups_id', $carequipmentgroup->id);
            ?>

            <?php if($groupEquipments->isNotEmpty()): ?>
            <div class="mb-4 w-[660px]">
                <!-- Group Name -->
                <strong class="block mb-2 text-lg">
                    <?php echo e($carequipmentgroup->group_name); ?>

                </strong>

                <!-- Group Equipments -->
                <div class="grid grid-cols-2 gap-4">
                    <?php $__currentLoopData = $groupEquipments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $carequipment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="p-2 bg-gray-200">
                        <?php echo e($carequipment->equipment_name); ?>

                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div><?php /**PATH C:\auto-trader\resources\views/components/show/equipments.blade.php ENDPATH**/ ?>