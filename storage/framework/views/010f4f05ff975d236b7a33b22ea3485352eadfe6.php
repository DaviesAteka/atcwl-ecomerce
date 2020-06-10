<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <meta http-equiv="refresh" content="30"/> -->
	<!-- CSRF Token -->
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<title>Klubwears | <?php echo $__env->yieldContent('title', ''); ?></title>

	<link rel="icon" type="image/png" href="<?php echo e(asset('app-assets/images/icons/klub.png')); ?>">

	<!-- Theme -->
	<link rel="stylesheet" href="<?php echo e(asset('app-assets/css/all.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>">
	<meta name="theme-color" content="#ECECEC">
</head>

<body class="<?php echo $__env->yieldContent('body-class', ''); ?>">


	<header class="page-header">
		<div class="container">
			<div class="top-bar row align-items-center">
				<div class="search col-lg-4">
					<div class="form-search-toggle js-open-search">
						<i class="search-icon flaticon-magnifying-glass-browser fi-2x"></i>
						<span>Search</span>
					</div>
					<div id="js-open-mob-menu" class="mob-menu-toggle">
						<span>Menu</span> <i class="flaticon-menu-options fi-2x"></i>
					</div>
				</div>

				<div class="logo col-lg-4">
					<a href="index-2.html">
						<img src="<?php echo e(asset('app-assets/images/icons/klublogo1.png')); ?>" alt="KLUBWEARS"></a>
				</div>
				<div class="quick-access-menu col-lg-4">
					

				
					
					<div class="quick-access__item">
						<div class="header-mini-cart">
							<a href="<?php echo e(route('cart.index')); ?>" class="mini-cart-link">
								<i class="cart__icon flaticon-online-shopping-cart fi-2x"></i>
								<span class="mini-cart-link__qty" ><?php echo e(Cart::count()); ?></span>
							</a>
						</div>
					</div>

					
					
			<!-- end of top-bar -->

		</div> <!-- end of top-bar -->

		<nav class="header-navigation">
			<button class="mob-menu-close" id="js-close-mob-menu">
				<span>Close</span>
				<i class="flaticon-cancel-button"></i>
			</button>

			<ul class="nav justify-content-center">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo e(route('landing-page')); ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="<?php echo e(route('shop.index')); ?>">Shop</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="promo.html">Promo</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/aboutus">About</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a class="nav-link" href="shortcodes.html">Shortcodes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="404.html">404 Page</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="blog.html">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.html">Contact</a>
				</li>
				<?php if(auth()->guard()->guest()): ?>

				<li class="nav-item">
					<a class="nav-link" href="about.html">Account</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo e(route('register')); ?>">Sign up</a>
						</li>
					</ul>
				</li>
				<?php else: ?>

				<li class="nav-item">
							<a class="nav-link" href="<?php echo e(route('register')); ?>">Settings</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								Logout
							</a>
						</li>


				<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
					<?php echo e(csrf_field()); ?>

				</form>
				<?php endif; ?>
			</ul>
		</nav>
		</div> <!-- end of container -->
		
	</header><?php /**PATH C:\xampp1\htdocs\klubwear\resources\views/shopping/inc/producthead.blade.php ENDPATH**/ ?>