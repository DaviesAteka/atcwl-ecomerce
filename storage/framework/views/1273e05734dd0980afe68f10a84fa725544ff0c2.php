
<?php $__env->startSection('title', 'contact Us'); ?>
<?php $__env->startSection('content'); ?>
<div class="page-wrap">

	<!-- Breadcrumbs -->
	<nav aria-label="breadcrumb" class="page-breadcrumb">
		<div class="container">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Contact</li>
			</ol>
		</div>
	</nav>

	<!-- Page content -->
	<div class="page-content">
		<section class="section-contact-map">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<p><strong>Taffle</strong></p>
						<p>879 Edison Ville Apt. 793 <br />
							Karianville, New York City,<br />
							NY 20157</p>
						<p><a href="mailto:jalon_rolfson@yahoo.com">jalon_rolfson@yahoo.com</a><br />
							695-431-1851
						</p>
					</div>

					<div class="map col-lg-9">
						<div id="google-map"></div>
					</div>
				</div>
			</div>
		</section>

		<section class="section-contact-form">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-8 text-center">
						<h2 class="h3 mb-40">Contact us</h2>

						<form class="contact-form">
							<div class="form-row">
								<div class="form-group col-md-6">
									<input type="text" class="form-control" placeholder="First name">
								</div>
								<div class="form-group col-md-6">
									<input type="text" class="form-control" placeholder="Last name">

								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6">
									<input type="text" class="form-control" placeholder="E-mail address">
								</div>
								<div class="form-group col-md-6">
									<input type="text" class="form-control" placeholder="Phone number">
								</div>
							</div>

							<div class="form-group">
								<textarea rows="5" class="form-control" placeholder="Your message"></textarea>
							</div>

							<div class="form-submit mt-3">
								<input type="submit" class="btn btn-primary btn-lg btn-block" value="Send" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div> <!-- /.page-content -->
</div> <!-- /.page-wrap -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('shopping.layouts.new', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\klubwear\resources\views/shopping/pages/contact.blade.php ENDPATH**/ ?>