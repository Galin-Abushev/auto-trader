<section>
    <h1 class="mb-4 text-2xl font-bold"><?php echo e($car->carBrand->brand_name); ?> <?php echo e($car->carModel->model_name); ?></h1>

    <!-- Other car details -->

    <div class="mt-6">
        <h2 class="mb-2 text-xl font-bold">Клиентски запитвания:</h2>

        <?php if($carRequests->isEmpty()): ?>
        <p class="text-gray-600">Все още няма запитвания за този автомобил.</p>
        <?php else: ?>
        <ul class="space-y-4">
            <?php $__currentLoopData = $carRequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="p-4 border border-gray-300 rounded-md">
                <p><strong>От:</strong> <?php echo e($request->name); ?></p>
                <p><strong>Имейл:</strong> <?php echo e($request->email); ?></p>
                <p><strong>Запитване:</strong> <?php echo e($request->message); ?></p>
                <p class="text-sm text-gray-500">Изпратено на: <?php echo e($request->created_at->format('d M Y, H:i')); ?></p>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
    </div>
</section><?php /**PATH C:\auto-trader\resources\views/components/car-requests.blade.php ENDPATH**/ ?>