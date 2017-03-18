<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo e(route('product.index')); ?>">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>               
      </ul>      
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="<?php echo e(route('product.addToCart')); ?>">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart
            <span class="badge"><?php echo e(Session::has('cart') ? Session::get('cart')->totalQt : ''); ?></span>
          </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> User <span class="caret"></span></a>
          <ul class="dropdown-menu">

            <?php if(Auth::check()): ?>
              <li><a href="<?php echo e(route('user.profile')); ?>">User Profile</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="<?php echo e(route('user.logout')); ?>">Logout</a></li>
            <?php else: ?>
              <li><a href="<?php echo e(route('user.signin')); ?>">Sign In</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="<?php echo e(route('user.signup')); ?>">Sign Up</a></li>
            <?php endif; ?>
            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>