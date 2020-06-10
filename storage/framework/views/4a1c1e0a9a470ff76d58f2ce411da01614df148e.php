
<section class="section-last-posts">
	<div class="container">
		<div class="section-title text-center">
			<h2 class="h3 section-title__heading">From the blog</h2>
		</div>

		<div class="post-grid row">
			<div class="col-lg-4 col-md-6">
				<article class="post-item">
					<a href="single-post.html" class="post-thumb">
						<img src="images/01_home_page_009.jpg" alt="">
					</a>
					<div class="post-item__content">
						<div class="post-date">06 Jan 2016</div>
						<h3 class="post-title"><a href="single-post.html">Designer Spotlight: Peter Barber</a></h3>
					</div>
				</article>
			</div>

			<div class="col-lg-4 col-md-6">
				<article class="post-item">
					<a href="single-post.html" class="post-thumb">
						<img src="images/01_home_page_010.jpg" alt="">
					</a>
					<div class="post-item__content">
						<div class="post-date">16 Oct 2016</div>
						<h3 class="post-title"><a href="single-post.html">How do I know if I‘m getting any of this law of attraction stuff</a></h3>
					</div>
				</article>
			</div>

			<div class="col-lg-4">
				<article class="post-item">
					<a href="single-post.html" class="post-thumb">
						<img src="images/01_home_page_011.jpg" alt="">
					</a>
					<div class="post-item__content">
						<div class="post-date">19 Oct 2016</div>
						<h3 class="post-title"><a href="single-post.html">How to choose and use a backpack ?</a></h3>
					</div>
				</article>
			</div>
		</div>
		<div class="text-center mt-lg-4">
			<a href="blog.html" class="btn btn-outline-primary btn-lg">View all posts</a>
		</div>
	</div>
</section>
	<footer class="page-footer">
		<div class="container">
			<div class="foot-info row">

				<div class="social col-md-4">
					<span>Follow us:</span>
					
					<?php echo e(menu('footericons', 'partials.menus.footericons')); ?>

					
				</div>
			</div>

			<nav class="footer-navigation">
				<?php echo e(menu('footer', 'partials.menus.footer')); ?>

			</nav>

			<div class="footer-bottom">
				<div class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script>
					 Klubwears. All rights reserved.</div>
				<ul class="footer-bottom__menu">
					<li>Managed By</li>
					<li><a href="#">Devis Ateka
						<img src="<?php echo e(asset('app-assets/images/icons/pic1.png')); ?>" alt="devs">
					</a></li>
				</ul>
			</div>
		</div>
	</footer>
	
	

	<div id="js-back-to-top" class="back-to-top"><i class="flaticon-up-arrow-sign"></i> Page top</div>

	<!-- Theme -->
	
	<script src="'js/app.js'"></script>
    <script type="text/javascript" src="<?php echo e(asset('app-assets/js/all.min.js')); ?>"></script>
		<?php echo $__env->yieldContent('extra-js'); ?>
</body>
</html>
<?php /**PATH C:\xampp1\htdocs\klubwear\resources\views/landing/inc/footer.blade.php ENDPATH**/ ?>