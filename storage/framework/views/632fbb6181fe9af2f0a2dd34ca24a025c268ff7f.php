<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Dashboard&nbsp;&nbsp;<i class="fa fa-magic" aria-hidden="true"></i>

                    <i class="icon-magic"></i></div>

                <div class="panel-body">
                    <a href="/accountdetails">Account Details</a>
                </div>
                <div class="panel-body">
                    <a href="/upload">Upload</a>
                </div>
                <div class="panel-body">
                    <a href="/letters">Letters</a>
                </div>
                <div class="panel-body">
                    <a href="/status">Status on the Hogwarts Register</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>