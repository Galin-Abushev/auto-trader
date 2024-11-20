<section>
    <h3 class="mb-6 font-bold border-b-4 border-blue-600">Още обяви за Автомобили и Джипове</h3>


    <div class="grid gap-8 lg:grid-cols-4">

        <?php $__empty_1 = true; $__currentLoopData = $similarCars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $similarCar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

        <a href="/frontcars/show/<?php echo e($similarCar->id); ?>/">
            <div class="flex flex-col bg-black/5 group flash-image">
                <div>
                    <?php if($similarCar->carPhotos->isNotEmpty()): ?>
                    <div class="">
                        <img src="<?php echo e(asset('storage/' . $similarCar->carPhotos->first()->file_path)); ?>"
                            alt="Main Car Photo" class="object-cover  shadow-lg h-[200px] w-[300px]">
                    </div>
                    <?php endif; ?>

                    <div class="mt-5 font-bold group-hover:text-blue-600"><?php echo e($similarCar->carBrand->brand_name); ?> <?php echo e($similarCar->carModel->model_name); ?> <?php echo e($similarCar->car_version); ?></div>
                    <div class="text-xl group-hover:text-blue-600"><?php echo e($similarCar->car_price); ?> лв. (<?php echo e($similarCar->car_km); ?> км)</div>
                </div>

                <div>

                    <div class="text-black/80"><?php echo e($similarCar->region->region_name); ?></div>
                    <div class="text-black/50"><?php echo e($similarCar->created_at); ?></div>

                </div>
            </div>
        </a>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <?php endif; ?>

    </div>

</section><?php /**PATH C:\auto-trader\resources\views/components/show/similar.blade.php ENDPATH**/ ?>