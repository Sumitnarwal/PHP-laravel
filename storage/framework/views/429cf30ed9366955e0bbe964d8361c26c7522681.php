<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="display-flex column">

        <div class="container">
            <h1>
                Welcome ,
                <?php echo e($name ?? "Guest"); ?>


            </h1>
            <?php if (! ($name =="ss")): ?>
            The name is not valid
            <?php endif; ?>

        </div>

        --------FOR lOOP-------
        <div class="container">
            <?php for($i=1; $i<4;$i++): ?> <h2><?php echo e($i); ?>. "forloop"</h2>
                <?php endfor; ?>
        </div>
        --------While---------
        <div>
            <?php
            $j=1;
            ?>
            <?php while($j<=4): ?> <h4><?php echo e($j); ?> While loop</h4>
                <?php $j++; ?>
                <?php endwhile; ?>
        </div>
        ---------FOR EACH--------
        <?php
        $k=1;
        $arr=["sumit","ankesh","vishal","deepak"];
        ?>
        
        <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h2><?php echo e($k); ?>-<?php echo e($i); ?></h2>
        <?php $k++; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\inttech\resources\views/home.blade.php ENDPATH**/ ?>