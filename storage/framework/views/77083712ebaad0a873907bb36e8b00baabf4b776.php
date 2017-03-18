<?php $__env->startSection('title'); ?>
	Sign In
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-md-offset-4">
		<h1>Sign In</h1>
		<?php if(count($errors) > 0): ?>
			<div class="alert-danger">
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<p><?php echo e($error); ?></p>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			</div>
		<?php endif; ?>
		<form action="<?php echo e(route('user.signin')); ?>" method="post">			
			<div class="form-group">
				<label for="email">E-mail</label>
				<input class="form-control" type="text" id="email" name="email">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" id="password" name="password">
			</div>
			<button class="btn btn-primary" type="submit">Sign In</button>
			<?php echo e(csrf_field()); ?>

		</form>
		<hr>
		<div id="footer">
			<a href="<?php echo e(route('user.signup')); ?>">
				Don't have an account?
				<span>Sign Up</span>
			</a>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>