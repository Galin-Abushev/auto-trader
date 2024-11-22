<div class="p-4 mt-4 bg-gray-100 rounded-lg shadow-lg">
    <h3 class="mb-4 text-lg font-semibold">Contact the Seller</h3>

    <form action="<?php echo e(route('contact.sendQuery')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="car_id" value="<?php echo e($car->id); ?>">
        <input type="hidden" name="receiver_id" value="<?php echo e($car->employer_id); ?>">

        <!-- Name Field -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
            <input type="text" name="name" id="name" value="<?php echo e(Auth::user()->name); ?>"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                required readonly>
        </div>

        <!-- Email Field -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
            <input type="email" name="email" id="email" value="<?php echo e(Auth::user()->email); ?>"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                required readonly>
        </div>

        <!-- Query Textarea -->
        <div class="mb-4">
            <label for="query" class="block text-sm font-medium text-gray-700">Your Query</label>
            <textarea name="query" id="query" rows="4"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                required></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="w-full px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Send Query
        </button>
    </form>
</div><?php /**PATH C:\auto-trader\resources\views/components/show/query.blade.php ENDPATH**/ ?>