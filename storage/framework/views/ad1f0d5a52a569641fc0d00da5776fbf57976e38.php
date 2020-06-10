<div id="app">
<div class="page-wrap archive shop">
	<!-- Breadcrumbs -->
	<nav aria-label="breadcrumb" class="page-breadcrumb">
		<div class="container">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Shop</li>
				
			</ol>
		</div>
	</nav>

	<div class="page-content">
		<main class="main-content">
			<div class="container">
				<div class="shop-controls d-flex align-items-center">
					<div class="shop-control">
						<label for="per_page" class="control-label">View:</label>
						<select id="per_page" name="perpage" class="prod-per-page js-select2 select-style">
							<option value="12">12</option>
							<option value="24">24</option>
						</select>
					</div>
					<div class="shop-control">
						<label for="order_by" class="control-label">Sort by:</label>
						<select id="order_by" name="orderby" class="orderby js-select2 select-style">
							<option value="1">Newest to oldest</option>
							<option value="1">Oldest to newest</option>
						</select>
					</div>
				</div>

	
<div class="section-title text-center">
<h2 class="h3 section-title__heading"><?php echo e($categoryName); ?></h2>
</div>


				<ul class="products columns-4">
					<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li class="product">
												<div class="product-thumb">
													<a href="<?php echo e(route('shop.show', $product->slug)); ?>" class="product-thumb__link">
														<img src="<?php echo e(productImage($product->image)); ?>" alt="davies">
														<span class="btn btn-outline-light shop-link">Shop</span>
													</a>
												</div>
												<div class="product-title"><a href=""><?php echo e($product->name); ?></a></div>
												<div class="price">
													<span class="amount"><?php echo e($product->presentPrice()); ?></span>
												</div>
											</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
				</ul>
				
				<nav class="shop-pagination text-center">
					<ul class="pagination justify-content-center">
						
						<?php echo e($products->appends(request()->input())->links()); ?>

						
					</ul>
				</nav>
			</div>
		</main>
	</div>
</div>
<div><?php /**PATH C:\xampp1\htdocs\klubwear\resources\views/shopping/pages/products.blade.php ENDPATH**/ ?>