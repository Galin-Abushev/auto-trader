<div class="flex flex-col bg-black/5 group flash-image">
    <div>
        <?php if($car->carPhotos->isNotEmpty()): ?>
        <div class="">
            <img src="<?php echo e(asset('storage/' . $car->carPhotos->first()->file_path)); ?>" alt="Main Car Photo"
                class="object-cover  shadow-lg h-[200px] w-[300px]">
        </div>
        <?php endif; ?>

        <div class="mt-5 font-bold group-hover:text-blue-600"><?php echo e($car->carBrand->brand_name); ?> <?php echo e($car->carModel->model_name); ?> <?php echo e($car->car_version); ?></div>
        <div class="text-xl group-hover:text-blue-600"><?php echo e($car->car_price); ?> лв. (<?php echo e($car->car_km); ?> км)</div>
    </div>

    <div>

        <div class="text-black/80"><?php echo e($car->region->region_name); ?></div>
        <div class="text-black/50"><?php echo e($car->created_at); ?></div>

    </div>
</div><?php /**PATH C:\auto-trader\resources\views/components/car-card.blade.php ENDPATH**/ ?>