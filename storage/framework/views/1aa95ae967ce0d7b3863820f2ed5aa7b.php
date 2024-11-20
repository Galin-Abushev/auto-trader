<form <?php echo e($attributes(["class"=> " space-y-2", "method" => "GET"])); ?>>
    <?php if($attributes->get('method', 'GET') !== 'GET'): ?>
    <?php echo csrf_field(); ?>
    <?php echo method_field($attributes->get('method')); ?>
    <?php endif; ?>

    <?php echo e($slot); ?>

</form><?php /**PATH C:\auto-trader\resources\views/components/forms/form.blade.php ENDPATH**/ ?>