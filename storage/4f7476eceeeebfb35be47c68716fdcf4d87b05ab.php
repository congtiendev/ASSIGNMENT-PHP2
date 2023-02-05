<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./resources/css/tailwind.css" />
    <link rel="stylesheet" href="./resources/css/base.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="./resources/js/init-alpine.js"></script>
</head>

<body>
    <div style="
        background-image: url('./resources/images/background.jpg');
      "
        class="flex h-screen sm:p-5 bg-no-repeat bg-cover">
        <?php echo $__env->make('layout.dashboard_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layout.dashboard_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>

</html>
<?php /**PATH E:\xampp\htdocs\PHP\WE17315\ASSIGNMENT\app\views/dashboard/base.blade.php ENDPATH**/ ?>