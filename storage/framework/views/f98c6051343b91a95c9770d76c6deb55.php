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
            <?php $__currentLoopData = $carequipmentgroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carequipmentgroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr class="border-2 border-black ">
                <td class="border-2 border-black"><?php echo e($carequipmentgroup->id); ?></td>
                <td class="border-2 border-black"><?php echo e($carequipmentgroup->group_name); ?></td>
                <td class="border-2 border-black"><?php echo e($carequipmentgroup->created_at); ?></td>
                <td class="border-2 border-black"> <?php echo e($carequipmentgroup->updated_at); ?></td>
                <td class="border-2 border-black"> <?php echo e($carequipmentgroup->status_label); ?></td>

                <td class="border-2 border-black"> <?php echo e($carequipmentgroup->createdBy->name); ?></td>

                <td>
                    <a href="/carequipmentgroups/edit/<?php echo e($carequipmentgroup->id); ?>">Редактиране </a>
                </td>
            </tr>
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
<?php endif; ?><?php /**PATH C:\auto-trader\resources\views/carequipmentgroups/index.blade.php ENDPATH**/ ?>