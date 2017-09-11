<?php $__env->startSection('title', 'Your Details'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">Account Details</div>
				<div class="panel-body">
					<?php if(Session::has('message')): ?>
					<p class="alert alert-danger"><?php echo e(Session::get('message')); ?></p>
					<?php endif; ?>
					<form class="form-horizontal" method="POST" action="<?php echo e(route('accounts.update', $AccountDetails[0]->id)); ?>">
						<?php echo e(csrf_field()); ?>


						<div class="form-group">
							<label for="firstName" class="col-md-4 control-label">First Name:</label>
							<div class="col-md-6">	
								<input id="firstName" type="text" class="form-control" name="firstName" value="<?php echo e($AccountDetails[0]->firstName); ?>" required autofocus>
							</div>
						</div>

						<div class="form-group">
							<label for="lastName" class="col-md-4 control-label">Last Name:</label>
							<div class="col-md-6">
								<input id="lastName" type="text" class="form-control" name="lastName" value="<?php echo e($AccountDetails[0]->lastName); ?>" required autofocus>
							</div>
						</div>

						<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
							<label for="email" class="col-md-4 control-label">E-Mail:</label>
							<div class="col-md-6">	
								<input id="email" type="email" class="form-control" name="email" value="<?php echo e($AccountDetails[0]->email); ?>" required autofocus>

								<?php if($errors->has('email')): ?>
								<span class="help-block">
									<strong><?php echo e($errors->first('email')); ?></strong>
								</span>
								<?php endif; ?>
							</div>
						</div>

						<div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
							<label for="current_password" class="col-sm-4 control-label">Current Password</label>
							<div class="col-sm-6">
								<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
								<input type="password" class="form-control" id="current_password" name="current_password" placeholder="Password">

							</div>
						</div>

						<div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
							<label for="password" class="col-sm-4 control-label">New Password</label>
							<div class="col-sm-6">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password">
							</div>
						</div>

						<div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
							<label for="password_confirmation" class="col-sm-4 control-label">Re-enter Password</label>
							<div class="col-sm-6">
								<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-enter Password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-8 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Submit
								</button>
								<br/>
								Request change of details by submitting the form with the changes.
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>