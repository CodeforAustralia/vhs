<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Upload File</div>
                <div class="panel-body">
                    <?php if(count($errors) > 0): ?>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <?php endif; ?>
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        Product photos (can attach more than one):
                        <br />
                        <input type="file" name="pdfUploaded[]" multiple />

                        <br /><br />
                        <input type="submit" value="Upload" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>