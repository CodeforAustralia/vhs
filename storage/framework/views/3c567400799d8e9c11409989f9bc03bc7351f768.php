<?php $__env->startSection('title', 'PDF'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">

				<div class="panel-heading">Generate</div>
				<ul>
					<?php $__currentLoopData = $AccountDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $AccountDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li>firstname: <?php echo e($firstName); ?></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>