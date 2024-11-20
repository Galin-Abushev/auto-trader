<!DOCTYPE html>
<html lang="en">

<?php if (isset($component)) { $__componentOriginal7c41e9ef23035756b585888b64cc29b0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7c41e9ef23035756b585888b64cc29b0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.html.head','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('html.head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7c41e9ef23035756b585888b64cc29b0)): ?>
<?php $attributes = $__attributesOriginal7c41e9ef23035756b585888b64cc29b0; ?>
<?php unset($__attributesOriginal7c41e9ef23035756b585888b64cc29b0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c41e9ef23035756b585888b64cc29b0)): ?>
<?php $component = $__componentOriginal7c41e9ef23035756b585888b64cc29b0; ?>
<?php unset($__componentOriginal7c41e9ef23035756b585888b64cc29b0); ?>
<?php endif; ?>

<body class="mb-10 mx-60">

    <?php if (isset($component)) { $__componentOriginal7ab17dd6beb30393404fb04ab374b5d7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7ab17dd6beb30393404fb04ab374b5d7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.html.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('html.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7ab17dd6beb30393404fb04ab374b5d7)): ?>
<?php $attributes = $__attributesOriginal7ab17dd6beb30393404fb04ab374b5d7; ?>
<?php unset($__attributesOriginal7ab17dd6beb30393404fb04ab374b5d7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7ab17dd6beb30393404fb04ab374b5d7)): ?>
<?php $component = $__componentOriginal7ab17dd6beb30393404fb04ab374b5d7; ?>
<?php unset($__componentOriginal7ab17dd6beb30393404fb04ab374b5d7); ?>
<?php endif; ?>

    <div class="content">
        <main class="mt-10 ">
            <?php echo e($slot); ?>

        </main>
    </div>

    <?php if (isset($component)) { $__componentOriginal0043e19c05caf0e1d63efadda61f6f44 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0043e19c05caf0e1d63efadda61f6f44 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.html.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('html.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0043e19c05caf0e1d63efadda61f6f44)): ?>
<?php $attributes = $__attributesOriginal0043e19c05caf0e1d63efadda61f6f44; ?>
<?php unset($__attributesOriginal0043e19c05caf0e1d63efadda61f6f44); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0043e19c05caf0e1d63efadda61f6f44)): ?>
<?php $component = $__componentOriginal0043e19c05caf0e1d63efadda61f6f44; ?>
<?php unset($__componentOriginal0043e19c05caf0e1d63efadda61f6f44); ?>
<?php endif; ?>

</body>

</html><?php /**PATH C:\auto-trader\resources\views/components/layout.blade.php ENDPATH**/ ?>