
<?php $__env->startSection('content'); ?>
<!-- Page Title -->
<br>
<div class="page-content">
	<main class="main-content">
		<section class="section-single-product product">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="product-thumb">
							<div class="product-gallery">
								<div class="product-thumb">
									<div id="js-product-big" class="product-gallery__big">
										
										<img src="<?php echo e(productImage($product->image)); ?>" alt="davies">
									</div>

									
								</div>
								<div id="js-product-nav" class="product-gallery-thumbs">
									
									<?php if($product->images): ?>
									<?php $__currentLoopData = json_decode($product->images, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="product-gallery-thumbs__item active" data-large-src="<?php echo e(productImage($image)); ?>">
										<img src="<?php echo e(productImage($image)); ?>" alt="product">
									</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>

					<div class="product-summary summary col-lg-7">
						<h1 class="h2 product-title"> <?php echo e($product->slug); ?></h1><p>&nbsp;</p>
						<div><?php echo $stockLevel; ?></div><p>&nbsp;</p>
						<div class="price">
							<ins><span class="amount"><?php echo e($product->presentPrice()); ?></span></ins>
							
						</div>
					
						<div class="description-block">
							<h3 class="mb-30">Description</h3>

							<div class="product-description text-content">
								<p>
									<?php echo $product->description; ?>

								</p>
							</div>
						</div>
						<?php if($product->quantity > 0): ?>
						<form action="<?php echo e(route('cart.store')); ?>" method="POST">
							<?php echo e(csrf_field()); ?>

								<input type="hidden" name="id" value="<?php echo e($product->id); ?>"/>
								<input type="hidden" name="name" value="<?php echo e($product->name); ?>"/>
								<input type="hidden" name="price" value="<?php echo e($product->price); ?>"/>							
									<button type="submit" class="btn btn-primary btn-lg add_to_cart_button">
										Add To Cart
									</button>
						</form>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>

		<section class="section-related">
			<div class="container">
				<h2 class="section-title text-center h3">Other items you may like</h2>
				<ul class="products featured-products columns-5">
					<?php $__currentLoopData = $mightAlsoLike; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li class="product">
						<div class="product-thumb">
							<span class="onsale">-80%</span>
							<a href="<?php echo e(route('shop.index', $product->slug)); ?>" class="product-thumb__link">
								<img src="<?php echo e(productImage($product->image)); ?>" alt="">
								<span class="btn btn-outline-light shop-link">Shop</span>
							</a>
						</div>
						<div class="product-title"><a href="<?php echo e(route('shop.index', $product->slug)); ?>"><?php echo e($product->name); ?></a></div>
						<div class="price">
							<span class="amount"><?php echo e($product->presentPrice()); ?></span>
						</div>
					</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
		</section>
	</main>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('shopping.layouts.new', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\klubwear\resources\views/shopping/pages/product.blade.php ENDPATH**/ ?>