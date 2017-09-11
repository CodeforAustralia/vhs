<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="quick-escape_wrapper">
        <button type="button" class="btn btn-danger">Quick Escape</button>
        </div>
            <div class="welcome-banner">
            <h2><?php echo e($message); ?>, <?php echo e(Auth::user()->firstName); ?></h2>
            </div>
            <p>Your Application for the Victorian Housing Register is being reviewed.</p>
            <p>You have <strong>1 new letter</strong>.</p>

            <div class="panel-body">
                <a href="/accounts">Account Details</a>
            </div>
            <div class="panel-body">
                <a href="/upload">Upload</a>
            </div>
            <div class="panel-body">
                <a href="/letters">Letters</a>
            </div>
            <div class="panel-body">
                <a href="/status">Status</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>