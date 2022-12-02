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
    <div class="container">
        <a href="<?php echo e(route('customer.create')); ?>">
            <button class="btn btn-primary d-inline-block m-2 float-right">Add</button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>State</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($customer->name); ?></td>
                    <td><?php echo e($customer->email); ?></td>
                    <td> <?php if($customer->gender =="M"): ?>
                        Male
                        <?php elseif($customer->gender =="F"): ?>
                        Female
                        <?php else: ?>
                        Other
                        <?php endif; ?></td>
                    <td><?php echo e($customer->dob); ?></td>
                    <td><?php echo e($customer->state); ?></td>
                    <td><?php echo e($customer->address); ?></td>
                    <td><?php echo e($customer->country); ?></td>
                    <td>
                        <?php if($customer->status =="1"): ?>
                        Active
                        <?php else: ?>
                        Inactive
                        <?php endif; ?>
                    </td>
                    <td>
                        <!-- <a href="<?php echo e(url('/customer/delete/')); ?>/<?php echo e($customer->customer_id); ?>"> -->
                        <a href="<?php echo e(route('customer.delete',['id'=> $customer->customer_id])); ?>">
                            <button class="btn btn-danger">Delete</button>
                        </a>
                        <a href="<?php echo e(route('customer.edit',['id'=> $customer->customer_id])); ?>">
                            <button class="btn btn-primary">Edit</button>
                        </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

</body>

</html><?php /**PATH C:\xampp\htdocs\inttech\resources\views/customer-view.blade.php ENDPATH**/ ?>