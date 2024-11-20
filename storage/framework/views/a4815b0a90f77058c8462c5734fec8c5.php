<div class="result-view">

    <div class="car-result">
        <?php if($car->carPhotos->isNotEmpty()): ?>
        <div class="main-photo flash-image">
            <img src="<?php echo e(asset('storage/' . $car->carPhotos->first()->file_path)); ?>" alt="">
        </div>
        <?php endif; ?>

        <div class="small-photos">

            <?php $__currentLoopData = $car->carPhotos->skip(1)->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <img src="<?php echo e(asset('storage/' . $photo->file_path)); ?>" class="flash-image" alt="Car Photo">


            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>




        <div class="car-info">
            <div class="">
                <strong><?php echo e($car->carBrand->brand_name); ?></strong>
                <strong><?php echo e($car->carModel->model_name); ?></strong>
                <?php echo e($car->car_version); ?>

            </div>

            <div class="">
                Намира се в <?php echo e($car->car_place); ?>

            </div>
            <div class="">
                <?php echo e($car->car_price); ?> лв.
            </div>
            <div class="">
                Тел:<?php echo e($car->contact_phone); ?>

            </div>
            <div class="">
                /частно лице/
            </div>
            <div class="">
                Изпрати E-мейл на продавача
            </div>
        </div>
    </div>
</div><?php /**PATH C:\auto-trader\resources\views/components/front-search-card.blade.php ENDPATH**/ ?>