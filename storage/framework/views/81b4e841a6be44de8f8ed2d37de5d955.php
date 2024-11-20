<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
            <?php $__currentLoopData = $carequipmentgroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carequipmentgroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php $__currentLoopData = $carequipments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carequipment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($carequipmentgroup->id == $carequipment->car_equipment_groups_id): ?>


            <tr class="border-2 border-black ">
                <td class="border-2 border-black"><?php echo e($carequipment->id); ?></td>
                <td class="border-2 border-black"><?php echo e($carequipmentgroup->group_name); ?></td>
                <td class="border-2 border-black"><?php echo e($carequipment->equipment_name); ?></td>
                <td class="border-2 border-black"><?php echo e($carequipment->created_at); ?></td>
                <td class="border-2 border-black"> <?php echo e($carequipment->updated_at); ?></td>
                <td class="border-2 border-black"> <?php echo e($carequipment->status_label); ?></td>
                <td class="border-2 border-black"> <?php echo e($carequipment->createdby->name); ?></td>

                <td>
                    <a href="/carequipments/edit/<?php echo e($carequipment->id); ?>">Редактиране </a>
                </td>


            </tr>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH C:\auto-trader\resources\views/carequipments/index.blade.php ENDPATH**/ ?>