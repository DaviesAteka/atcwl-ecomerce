<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<link rel="shortcut icon" href="<?php echo e(asset('app-assets/images/icons/klub.png')); ?>" type="image/x-icon">
	<title>Klubwears | <?php echo $__env->yieldContent('title', ''); ?></title>

	<!-- Theme -->
	<link rel="stylesheet" href="<?php echo e(asset('app-assets/css/all.min.css')); ?>">
	<meta name="theme-color" content="#ECECEC">
</head>

<body class="home">

	<header class="page-header header-home">
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

					<?php if(Cart::count() > 0): ?>
					
					<div class="quick-access__item">
						<div class="header-mini-cart">
							<a href="<?php echo e(route('cart.index')); ?>" class="mini-cart-link">
								<i class="cart__icon flaticon-online-shopping-cart fi-2x"></i>
							
								
								<span class="mini-cart-link__qty" ><?php echo e(Cart::instance('default')->count()); ?></span>
								
							</a>
							<?php echo $__env->make('partials.menus.main-right', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						</div>
					</div>

					<?php else: ?>
					<div class="quick-access__item">
						<div class="header-mini-cart">
							<a href="<?php echo e(route('cart.index')); ?>" class="mini-cart-link">
								<i class="cart__icon flaticon-online-shopping-cart fi-2x"></i>
								<span class="mini-cart-link__qty"><?php echo e(Cart::instance('default')->count()); ?></span>
							</a>

							<div class="mini-cart">

								

							</div>

						</div>
					</div>
					<?php endif; ?>
				</div><!-- end of quick-access-menu -->
			</div> <!-- end of top-bar -->


		</div> <!-- end of top-bar -->

		<nav class="header-navigation">
			<button class="mob-menu-close" id="js-close-mob-menu">
				<span>Close</span>
				<i class="flaticon-cancel-button"></i>
			</button>

			<?php echo e(menu('main', 'partials.menus.main')); ?>

			
		</nav>
		</div>
		<!-- modal medium -->
			<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								There are three species of zebras: the plains zebra, the mountain zebra and the Grévy's zebra. The plains zebra and the mountain
								zebra belong to the subgenus Hippotigris, but Grévy's zebra is the sole species of subgenus Dolichohippus. The latter
								resembles an ass, to which it is closely related, while the former two are more horse-like. All three belong to the
								genus Equus, along with other living equids.
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary">Confirm</button>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal medium -->
	
	</header><?php /**PATH C:\xampp1\htdocs\klubwear\resources\views/landing/inc/header.blade.php ENDPATH**/ ?>