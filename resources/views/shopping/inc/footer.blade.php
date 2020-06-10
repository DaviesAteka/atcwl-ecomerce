
	<footer class="page-footer">
		<div class="container">
			<div class="foot-info row">

				<div class="social col-md-4">
					<span>Follow us:</span>
					<ul class="social-links ml-md-3">
						<li><a href="#"><i class="mdi mdi-pinterest"></i></a></li>
						<li><a href="#"><i class="mdi mdi-facebook"></i></a></li>
						<li><a href="https://instagram.com/klubwears.ke"><i class="mdi mdi-instagram"></i></a></li>
						<li><a href="#"><i class="mdi mdi-twitter"></i></a></li>
					</ul>
				</div>
			</div>

			<nav class="footer-navigation">
				<ul class="nav justify-content-center">
					<li class="nav-item">
						<a class="nav-link" href="{{ route('landing-page')}}">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('shop.index') }}">Shop</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="promo.html">Promo</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Aboutus</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="blog.html">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>
				</ul>
			</nav>

			<div class="footer-bottom">
				<div class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script>
					 Klubwears. All rights reserved.</div>
				<ul class="footer-bottom__menu">
					<li>Managed By</li>
					<li><a href="#">Devis Ateka
						<img src="{{ asset('app-assets/images/icons/pic1.png') }}" alt="devs">
					</a></li>
				</ul>
			</div>
		</div>
	</footer>

	<div id="js-back-to-top" class="back-to-top"><i class="flaticon-up-arrow-sign"></i> Page top</div>

	<!-- Theme -->
    <script type="text/javascript" src="{{ asset('app-assets/js/all.min.js') }}"></script>
		@yield('extra-js')
</body>
</html>
