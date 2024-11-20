<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['car']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['car']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="flex flex-col border-b border-blue-900 group bg-black/5">
    <div>
        <img src="http://picsum.photos/seed/<?php echo e(rand(0, 100000)); ?>/200/150" alt="">
        <div class="mt-5 mb-5 font-bold group-hover:text-red-600">Кратко описание до 70 символа</div>
    </div>


</div><?php /**PATH C:\auto-trader\resources\views/components/news-card.blade.php ENDPATH**/ ?>