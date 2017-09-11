<?php $__env->startSection('title', 'Your Details'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="welcome-banner">
						<div class="col-xs-8">
							<p>Account Details</p>
						</div>
						<div class="col-xs-4">
							<p class="pull-right"><a class="panel-heading_link" href="/accountdetails/edit/<?php echo e($AccountDetails[0]->id); ?>">Edit</a></p>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<?php if(Session::has('message')): ?>
					<p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
					<?php endif; ?>
					<?php if($AccountDetails[0]->service_id = 'NULL'): ?>
					<p class="alert alert-danger">
						You don't have any services at the moment. Please refer to <a href="http://www.housing.vic.gov.au/" target="_blank" title="Victorian Housing Website">Victorian Housing website</a> for more information about available service.  
					</p>
					<?php else: ?> <?php echo e($AccountDetails[0]->service_id); ?> <?php endif; ?>
					<ul>
						<div class="col-md-3">Name:</div>
						<div class="col-md-9"><a href="/accountdetails/<?php echo e($AccountDetails[0]->id); ?>"><?php echo e($AccountDetails[0]->firstName); ?>, <?php echo e($AccountDetails[0]->lastName); ?></a></div>
						<div class="col-md-3">Email: </div>
						<div class="col-md-9"><?php echo e($AccountDetails[0]->email); ?></div>
						<div class="col-md-3">Gender: </div>
						<div class="col-md-9">
							<?php if($AccountDetails[0]->gender = 'NULL'): ?> Not Defined <?php else: ?> <?php echo e($AccountDetails[0]->gender); ?> <?php endif; ?>
						</div>
						<div class="col-md-3">Client ID: </div>
						<div class="col-md-9">
							<?php if($AccountDetails[0]->client_id = 'NULL'): ?> No client ID <?php else: ?> <?php echo e($AccountDetails[0]->client_id); ?> <?php endif; ?>
						</div>
						<div class="col-md-3">Service ID: </div>
						<div class="col-md-9">
							<?php if($AccountDetails[0]->service_id = 'NULL'): ?> No service ID <?php else: ?> <?php echo e($AccountDetails[0]->service_id); ?> <?php endif; ?>
						</div>
						<div class="col-md-3">Address Line 1: </div>
						<div class="col-md-9">
							<?php if($AccountDetails[0]->address_1 = 'NULL'): ?> No address line 1 <?php else: ?> <?php echo e($AccountDetails[0]->address_1); ?> <?php endif; ?>
						</div>
						<div class="col-md-3">Address Line 2: </div>
						<div class="col-md-9">
							<?php if($AccountDetails[0]->address_2 = 'NULL'): ?> No address line 2 <?php else: ?> <?php echo e($AccountDetails[0]->address_2); ?> <?php endif; ?>
						</div>
						<div class="col-md-3">Address Line 3: </div>
						<div class="col-md-9">
							<?php if($AccountDetails[0]->address_3 = 'NULL'): ?> No address line 3 <?php else: ?> <?php echo e($AccountDetails[0]->address_3); ?> <?php endif; ?>
						</div>
						<div class="col-md-3">Suburb/Town: </div>
						<div class="col-md-9">
							<?php if($AccountDetails[0]->suburb_town = 'NULL'): ?> No suburb <?php else: ?> <?php echo e($AccountDetails[0]->suburb_town); ?> <?php endif; ?>
						</div>
						<div class="col-md-3">Suburb/Town: </div>
						<div class="col-md-9">
							<?php if($AccountDetails[0]->postcode = 'NULL'): ?> No postcode <?php else: ?> <?php echo e($AccountDetails[0]->postcode); ?> <?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>