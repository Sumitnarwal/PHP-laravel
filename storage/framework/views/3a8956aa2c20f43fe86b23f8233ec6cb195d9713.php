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

        <!-- <form action="<?php echo e(url('/')); ?>/customer" method="post"> -->
        <form action="<?php echo e($url); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="container">
                <h1 class="text-center"><?php echo e($title); ?></h1>
                <div class="row">
                    <div class="form-group col-md-6 required">
                        <label for="">Name</label>
                        <input type="text" name="name" value="<?php echo e($customer!=Null ? $customer->name :''); ?>" class="form-control"
                            aria-describedby="helpId">
                        <span class="text-danger">
                            <?php $__errorArgs = ["name"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </span>
                    </div>
                    <div class="form-group col-md-6 required">
                        <label for="">Email</label>
                        <input type="text" name="email" value="<?php echo e($customer!=Null ? $customer->email :''); ?>" class="form-control"
                            aria-describedby="helpId">
                        <span class="text-danger">
                            <?php $__errorArgs = ["email"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 required">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" aria-describedby="helpId">
                        <span class="text-danger">
                            <?php $__errorArgs = ["password"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </span>
                    </div>
                    <div class="form-group col-md-6 required">
                        <label for="">Conform Password</label>
                        <input type="password" name="password_confirmation" class="form-control"
                            aria-describedby="helpId">
                        <span class="text-danger">
                            <?php $__errorArgs = ["password_confirmation"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 required">
                        <label for="">Country</label>
                        <input type="text" name="country" value="<?php echo e($customer!=Null ? $customer->country :''); ?>" class="form-control"
                            aria-describedby="helpId">
                        <span class="text-danger">
                            <?php $__errorArgs = ["country"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </span>
                    </div>
                    <div class="form-group col-md-6 required">
                        <label for="">state</label>
                        <input type="text" name="state" value="<?php echo e($customer!=Null ? $customer->state :''); ?>" class="form-control"
                            aria-describedby="helpId">
                        <span class="text-danger">
                            <?php $__errorArgs = ["state"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </span>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="">Address</label>
                    <input type="text" name="address" value="<?php echo e($customer!=Null ? $customer->address :''); ?>" class="form-control"
                        aria-describedby="helpId">
                    <span class="text-danger">
                        <?php $__errorArgs = ["address"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </span>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 required">
                        <label for="">Gender</label>
                        <input type="radio" name="gender" value="M" id="" class="form-control" <?php echo e($customer!=Null ? ($customer->gender=="M"?
                        "checked" :""):""); ?>

                        aria-describedby="helpId">Male
                        <input type="radio" name="gender" id="" value="F" class="form-control"  <?php echo e($customer!=Null ? ($customer->gender=="F"?
                        "checked" :""):""); ?>

                        aria-describedby="helpId">Female
                        <input type="radio" name="gender" id="" value="O" class="form-control"  <?php echo e($customer!=Null ? ($customer->gender=="O"?
                        "checked" :""):""); ?>

                        aria-describedby="helpId">Other

                        <span class="text-danger">
                            <?php $__errorArgs = ["gender"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </span>
                    </div>
                    <div class="form-group col-md-6 required">
                        <label for="">Date of birth</label>
                        <input type="date" name="dob" id="" class="form-control" value="<?php echo e($customer!=Null ? $customer->dob :''); ?>"
                            aria-describedby="helpId">
                        <span class="text-danger">
                            <?php $__errorArgs = ["dob"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </span>
                    </div>
                </div>
                <button class="btn btn-primary">
                    Submit
                </button>
            </div>
        </form>
    </div>

</body>

</html><?php /**PATH C:\xampp\htdocs\inttech\resources\views/customers.blade.php ENDPATH**/ ?>