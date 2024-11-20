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
    <section>
        <div class="mb-6 font-bold border-b-4 border-blue-600 ">
            <a href="/frontcars/search">НОВО ТЪРСЕНЕ </a>
        </div>
        <div class="grid gap-4 sm:grid-cols-12 rounded-xl ">

            <div class="mb-4 col-span-8 min-h-[600px] popup-gallery">
                <?php if($car->carPhotos->isNotEmpty()): ?>
                <div class="">
                    <a href="<?php echo e(asset('storage/' . $car->carPhotos->first()->file_path)); ?>" title="The Cleaner">
                        <img src="<?php echo e(asset('storage/' . $car->carPhotos->first()->file_path)); ?>" alt=""
                            class="object-cover shadow-lg h-[500px] w-[800px]">

                    </a>
                </div>
                <?php endif; ?>

                <div class="flex gap-1 mt-1 thumbnail-photos">

                    <?php $__currentLoopData = $car->carPhotos->skip(1)->take(6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="w-32 h-28">

                        <a href="<?php echo e(asset('storage/' . $photo->file_path)); ?>" title="The Cleaner" class="w-32 h-28">

                            <div class="object-cover w-full h-full shadow img-thumbnail flash-image "
                                style="background-image: url('<?php echo e(asset('storage/' . $photo->file_path)); ?>');">

                            </div>
                        </a>

                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

            </div>


            <div class="ml-4 rounded-sm border-b-4 border-2 border-neutral-200 col-span-4 max-h-[400px] gap-1 scrolling-div"
                style="position: relative; down: 200px; top: 1px; right: 5px; left: 5px; width: 317px; height: 400px;">
                <div class="mt-2 ml-4 mr-4">
                    <strong><?php echo e($car->carBrand->brand_name); ?></strong>
                    <strong><?php echo e($car->carModel->model_name); ?></strong>
                    <?php echo e($car->car_version); ?>

                </div>

                <div class="mt-2 ml-4 mr-4 italic font-medium">
                    Намира се в <?php echo e($car->car_place); ?>

                </div>
                <div class="mt-2 ml-4 mr-4 text-4xl font-bold text-blue-500">
                    <?php echo e($car->car_price); ?> лв.
                </div>
                <div class="mt-2 ml-4 mr-4 text-4xl font-bold">
                    Тел:<?php echo e($car->contact_phone); ?>

                </div>
                <div class="mt-2 ml-12 mr-4 font-medium">
                    /частно лице/
                </div>
                <div class="mt-2 ml-12 mr-6 font-medium text-blue-500 border-b border-blue-500">
                    Изпрати E-мейл на продавача
                </div>
            </div>
        </div>

        <div class="grid gap-4 sm:grid-cols-12 rounded-xl ">
            <div
                class="grid gap-1 sm:grid-cols-12  mt-2 rounded-sm border-b-4 border-2 border-neutral-200  col-span-8 h-[250px]">
                <div class=" ml-6 mt-2 rounded-sm  col-span-4 h-[40px] gap-1">
                    <div class="grid sm:grid-cols-12 ">
                        <div class="h-[35px] w-[35px]  col-span-3 mt-3">
                            <img src="<?php echo e(Vite::asset('resources/images/engine.png')); ?>" alt="">

                        </div>
                        <div>
                            <div class="text-sm text-gray-500 ">Двигател
                            </div>
                            <div class="text-xl font-bold "><?php echo e($car->carEngine->engine_name); ?>

                            </div>
                        </div>
                    </div>

                </div>
                <div class=" ml-6 mt-2 rounded-sm  col-span-4  h-[40px] gap-1">
                    <div class="grid sm:grid-cols-12 ">
                        <div class="h-[35px] w-[35px]  col-span-3 mt-3">
                            <img src="<?php echo e(Vite::asset('resources/images/engine.png')); ?>" alt="">

                        </div>
                        <div>
                            <div class="text-sm text-gray-500 ">Мощност
                            </div>
                            <div class="w-[120px] text-xl font-bold "><?php echo e($car->car_km); ?> км.
                            </div>
                        </div>
                    </div>

                </div>
                <div class=" ml-6 mt-2 rounded-sm  col-span-4 h-[40px] gap-1">
                    <div class="grid sm:grid-cols-12 ">
                        <div class="h-[35px] w-[35px]  col-span-3 mt-3">
                            <img src="<?php echo e(Vite::asset('resources/images/engine.png')); ?>" alt="">

                        </div>
                        <div>
                            <div class="w-[120px] text-sm text-gray-500 ">Скоростна кутия
                            </div>
                            <div class="text-xl font-bold "><?php echo e($car->carEngine->engine_name); ?>

                            </div>
                        </div>
                    </div>

                </div>
                <div class=" ml-6 mt-2 rounded-sm  col-span-4 h-[40px] gap-1">
                    <div class="grid sm:grid-cols-12 ">
                        <div class="h-[35px] w-[35px]  col-span-3 mt-3">
                            <img src="<?php echo e(Vite::asset('resources/images/transmission.png')); ?>" alt="">

                        </div>
                        <div>
                            <div class="w-[120px] text-sm text-gray-500 ">Скоростна кутия
                            </div>
                            <div class="text-xl font-bold "><?php echo e($car->carEngine->engine_name); ?>

                            </div>
                        </div>
                    </div>

                </div>
                <div class=" ml-6 mt-2 rounded-sm  col-span-4 h-[40px] gap-1">
                    <div class="grid sm:grid-cols-12 ">
                        <div class="h-[35px] w-[35px]  col-span-3 mt-3">
                            <img src="<?php echo e(Vite::asset('resources/images/engine.png')); ?>" alt="">

                        </div>
                        <div>
                            <div class="w-[120px] text-sm text-gray-500 ">Пробег [км]
                            </div>
                            <div class="w-[120px] text-xl font-bold "><?php echo e($car->car_km); ?> км
                            </div>
                        </div>
                    </div>

                </div>

                <div
                    class="text-blue-500 text-center border-t-2 border-dashed grid ml-10 mr-10   rounded-sm  border-neutral-200  col-span-12 h-[40px]">
                    Технически характеристики и разход на гориво
                </div>
            </div>

        </div>

        <div class="grid gap-4 sm:grid-cols-12 rounded-xl ">
            <div
                class="grid gap-4 border text-blue-500 sm:grid-cols-12  mt-2 rounded-sm  border-neutral-200  col-span-8 h-[40px]">
                <div class=" ml-6 rounded-sm col-span-4  h-[40px] gap-1 ">
                    <div class="flex items-center sm:grid-cols-12">
                        <div class="h-[15px] w-[15px]  col-span-3 mt-3 ml-2">
                            <img src="<?php echo e(Vite::asset('resources/images/writemessage.png')); ?>" alt="">

                        </div>
                        <div>
                            <div class="grid col-span-9 mt-2 ml-10 text-sm ">Напиши бележка
                            </div>

                        </div>
                    </div>

                </div>
                <div class=" ml-6 border rounded-sm  col-span-4  h-[40px] gap-1">
                    <div class="flex items-center sm:grid-cols-12">
                        <div class="h-[15px] w-[15px]  col-span-3 mt-3 ml-10">
                            <img src="<?php echo e(Vite::asset('resources/images/writemessage.png')); ?>" alt="">

                        </div>
                        <div>
                            <div class="grid col-span-9 mt-2 ml-10 text-sm ">Дай оценка
                            </div>

                        </div>
                    </div>

                </div>
                <div class=" ml-6 rounded-sm  col-span-4  h-[40px] gap-1">
                    <div class="flex items-center sm:grid-cols-12">
                        <div class="h-[15px] w-[15px]  col-span-3 mt-3">
                            <img src="<?php echo e(Vite::asset('resources/images/writemessage.png')); ?>" alt="">

                        </div>
                        <div>
                            <div class="grid col-span-9 mt-2 ml-6 text-sm ">Съобщи за нередност
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

        <?php if (isset($component)) { $__componentOriginal3a4e3f9170055f71af152abae497b69b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3a4e3f9170055f71af152abae497b69b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.show.techdata','data' => ['car' => $car]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('show.techdata'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['car' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($car)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3a4e3f9170055f71af152abae497b69b)): ?>
<?php $attributes = $__attributesOriginal3a4e3f9170055f71af152abae497b69b; ?>
<?php unset($__attributesOriginal3a4e3f9170055f71af152abae497b69b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3a4e3f9170055f71af152abae497b69b)): ?>
<?php $component = $__componentOriginal3a4e3f9170055f71af152abae497b69b; ?>
<?php unset($__componentOriginal3a4e3f9170055f71af152abae497b69b); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalb054fd67156cd7eea5571e610dda5054 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb054fd67156cd7eea5571e610dda5054 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.show.equipments','data' => ['car' => $car,'carequipmentgroups' => $carequipmentgroups]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('show.equipments'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['car' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($car),'carequipmentgroups' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($carequipmentgroups)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb054fd67156cd7eea5571e610dda5054)): ?>
<?php $attributes = $__attributesOriginalb054fd67156cd7eea5571e610dda5054; ?>
<?php unset($__attributesOriginalb054fd67156cd7eea5571e610dda5054); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb054fd67156cd7eea5571e610dda5054)): ?>
<?php $component = $__componentOriginalb054fd67156cd7eea5571e610dda5054; ?>
<?php unset($__componentOriginalb054fd67156cd7eea5571e610dda5054); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalf2dea380996b177535c782c4f12809a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf2dea380996b177535c782c4f12809a9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.show.similar','data' => ['similarCars' => $similarCars]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('show.similar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['similarCars' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($similarCars)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf2dea380996b177535c782c4f12809a9)): ?>
<?php $attributes = $__attributesOriginalf2dea380996b177535c782c4f12809a9; ?>
<?php unset($__attributesOriginalf2dea380996b177535c782c4f12809a9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf2dea380996b177535c782c4f12809a9)): ?>
<?php $component = $__componentOriginalf2dea380996b177535c782c4f12809a9; ?>
<?php unset($__componentOriginalf2dea380996b177535c782c4f12809a9); ?>
<?php endif; ?>
    </section>



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH C:\auto-trader\resources\views/frontcars/show.blade.php ENDPATH**/ ?>