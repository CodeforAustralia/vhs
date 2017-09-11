<?php $__env->startSection('title', 'Your Details'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<span class="float-left">Account Details</span>
					<!-- <span class="float-right">Edit</span> -->
				</div>
				<div class="panel-body">
					<ul>
						<?php $__currentLoopData = $AccountDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $AccountDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li><a href="/accountdetails/<?php echo e($AccountDetail->id); ?>"><?php echo e($AccountDetail->firstName); ?> <?php echo e($AccountDetail->lastName); ?></a></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>