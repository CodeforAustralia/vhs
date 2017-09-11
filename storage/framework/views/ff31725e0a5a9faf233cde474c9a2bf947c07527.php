<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="welcome-banner">
                        <h4>Login</h4>
                    </div></div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group<?php echo e($errors->has('firstName') ? ' has-error' : ''); ?>">
                                <label for="firstName" class="col-md-4 control-label">First Name</label>

                                <div class="col-md-6">
                                    <input id="firstName" type="text" class="form-control" name="firstName" value="<?php echo e(old('firstName')); ?>" required autofocus>

                                    <?php if($errors->has('firstName')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('firstName')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('lastName') ? ' has-error' : ''); ?>">
                                <label for="lastName" class="col-md-4 control-label">Last Name</label>

                                <div class="col-md-6">
                                    <input id="lastName" type="text" class="form-control" name="lastName" value="<?php echo e(old('lastName')); ?>" required>

                                    <?php if($errors->has('lastName')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('lastName')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                    <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>