<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query About Your Car Listing</title>
</head>

<body>
    <h1>Car Listing Query</h1>
    <p><strong>From:</strong> <?php echo e($name); ?> (<?php echo e($email); ?>)</p>
    <p><strong>Message:</strong></p>
    <p><?php echo e($messageContent); ?></p>
</body>

</html><?php /**PATH C:\auto-trader\resources\views/mail/query.blade.php ENDPATH**/ ?>