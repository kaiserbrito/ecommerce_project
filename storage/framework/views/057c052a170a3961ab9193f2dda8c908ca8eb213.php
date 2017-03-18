<?php $__env->startSection('title'); ?>
	Checkout
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-sm-6 col-md-offset-4">
			<h1>Checkout</h1>
			<h4>Your total: $ <?php echo e($total); ?></h4>
			<div id="charge-error" class="alert alert-danger <?php echo e(!Session::has('error') ? 'hidden' : ''); ?>">
				<?php echo e(Session::get('error')); ?>

			</div>
			<form action="<?php echo e(route('checkout')); ?>" method="post" id="checkout-form">
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" id="name" class="form-control" required>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="adress">Adress</label>
							<input type="text" id="adress" class="form-control" required>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="card-name">Card Holder Name</label>
							<input type="text" id="card-name" class="form-control" required>
						</div>						
					</div>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="card-number">Credit Card Number</label>
							<input type="text" id="card-number" class="form-control" required>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label for="card-expiry-month">Expiration Month</label>
									<input type="text" id="card-expiry-month" class="form-control" required>
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<label for="card-expiry-year">Expiration Year</label>
									<input type="text" id="card-expiry-year" class="form-control" required>
								</div>
							</div>
						</div>						
					</div>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="card-cvc">CVC</label>
							<input type="text" id="card-cvc" class="form-control" required>
						</div>
					</div>
				</div>
				<?php echo e(csrf_field()); ?>

				<button class="btn btn-success">Buy Now</button>
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	<script type="text/javascript" src="<?php echo e(asset('src/js/checkout.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>