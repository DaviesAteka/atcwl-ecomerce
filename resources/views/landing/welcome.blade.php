<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

         <link href="{{ asset('assets/fonts/font-awesome-4/css/font-awesome.min.css') }}">
        <!--===============================================================================================-->
        <!--===============================================================================================-->
         <link href="{{ asset('assets/fonts/ionicons/css/ionicons.min.css') }}">
        <!--===============================================================================================-->
         <link href="{{ asset('assets/fonts/simple-line-icons/css/simple-line-icons.css') }}">
        <!--===============================================================================================-->
         <link href="{{ asset('assets/libs/bootstrap/bootstrap.min.css') }}">

        <!--===============================================================================================-->
         <link href="{{ asset('assets/libs/slick/slick.css') }}">
        <!--===============================================================================================-->
         <link href="{{ asset('assets/libs/magnific-popup/magnific-popup.css') }}">
                <!--===============================================================================================-->
         <link href="{{ asset('assets/libs/animate/animate.css') }}">
        <!--===============================================================================================-->
         <link href="{{ asset('assets/libs/animsition/animsition.min.css') }}">
                  <!--===============================================================================================-->
         <link href="{{ asset('assets/libs/parallax100/parallax100.css') }}">

         <link href="{{ asset('assets/css/style.css') }}">

            <!--===============================================================================================-->


    </head>
    <body class="animsition">

    <div class="hun-page">
      <!-- Header -->
      <header class="hun-section-header hun-header layout-1 style-sticky wide-header use-img-logo">
  		<div class="hun-element-toolbar--type-1 full-width set-color">
  			<div class="container">
  				<div class="inner-toolbar">
  					<div class="text-toolbar d-none d-md-block">
  						Free shipping for oreders within Nairobi.
  					</div>

  					<div class="group-features">
  						<div class="text-toolbar">
  							<a href="#">
  								misoppe@example.com
  							</a>
  						</div>

  						<div class="hun-element-dropdown-menu--type-1">
  							USD

  							<ul class="sub-menu set-color">
  								<li>
  									<a href="#">
  										USD
  									</a>
  								</li>

  								<li>
  									<a href="#">
  										EUR
  									</a>
  								</li>
  							</ul>
  						</div>

  						<div class="hun-element-dropdown-menu--type-1">
  							ENG

  							<ul class="sub-menu set-color">
  								<li>
  									<a href="#">
  										English
  									</a>
  								</li>

  								<li>
  									<a href="#">
  										French
  									</a>
  								</li>

  								<li>
  									<a href="#">
  										Japan
  									</a>
  								</li>
  							</ul>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
      <div class="container-header">
      			<div class="wrapper-header element-for-stick">
      				<div class="container">


      					<nav class="main-navigation">
      						<ul class="list-menu set-color">
      							<li class="menu-item menu-item-has-children">
      								<a href="#">
      									Home
      								</a>

      								<ul class="sub-menu">
      									<li class="menu-item">
      										<a href="home1.html">Home 01</a>
      									</li>

      									<li class="menu-item">
      										<a href="home2.html">Home 02</a>
      									</li>

      									<li class="menu-item">
      										<a href="home3.html">Home 03</a>
      									</li>

      									<li class="menu-item">
      										<a href="home4.html">Home 04</a>
      									</li>
      								</ul>
      							</li>

      							<li class="menu-item menu-item-has-children current-menu-item">
      								<a href="#">
      									Shop
      								</a>

      								<ul class="sub-menu">
      									<li class="menu-item">
      										<a href="shop1.html">Shop 01</a>
      									</li>

      									<li class="menu-item">
      										<a href="shop2.html">Shop 02</a>
      									</li>

      									<li class="menu-item">
      										<a href="onsale.html">Shop On Sale</a>
      									</li>

      									<li class="menu-item">
      										<a href="detail-product1.html">Detail Product 01</a>
      									</li>

      									<li class="menu-item">
      										<a href="detail-product2.html">Detail Product 02</a>
      									</li>

      									<li class="menu-item">
      										<a href="cart.html">Shopping Cart</a>
      									</li>

      									<li class="menu-item">
      										<a href="wishlist.html">Wishlist</a>
      									</li>
      								</ul>
      							</li>

      							<li class="menu-item menu-item-has-children">
      								<a href="#">
      									Pages
      								</a>

      								<ul class="sub-menu">
      									<li class="menu-item">
      										<a href="about.html">About</a>
      									</li>

      									<li class="menu-item">
      										<a href="coming-soon.html">Coming Soon</a>
      									</li>
      								</ul>
      							</li>

      							<li class="menu-item menu-item-has-children mega-menu set-3-col auto-width">
      								<a href="#">Mega</a>

      								<ul class="sub-menu">
      									<li class="menu-item menu-item-has-children">
      										<a href="#">
      											WOMEN
      										</a>

      										<ul class="sub-menu">
      											<li class="menu-item"><a href="#">Dress</a></li>
      											<li class="menu-item"><a href="#">Shirt</a></li>
      											<li class="menu-item"><a href="#">T-Shirt</a></li>
      											<li class="menu-item"><a href="#">Jacket</a></li>
      											<li class="menu-item"><a href="#">Skirt</a></li>
      											<li class="menu-item"><a href="#">Shoes</a></li>
      										</ul>
      									</li>

      									<li class="menu-item menu-item-has-children">
      										<a href="#">
      											MEN
      										</a>

      										<ul class="sub-menu">
      											<li class="menu-item"><a href="#">Hoodie</a></li>
      											<li class="menu-item"><a href="#">Shirt</a></li>
      											<li class="menu-item"><a href="#">T-Shirt</a></li>
      											<li class="menu-item"><a href="#">Jacket</a></li>
      											<li class="menu-item"><a href="#">Coats</a></li>
      											<li class="menu-item"><a href="#">Shoes</a></li>
      										</ul>
      									</li>

      									<li class="menu-item menu-item-has-children">
      										<a href="#">
      											ACCESSORIES
      										</a>

      										<ul class="sub-menu">
      											<li class="menu-item"><a href="#">Bags</a></li>
      											<li class="menu-item"><a href="#">Sunglasses</a></li>
      											<li class="menu-item"><a href="#">Belts</a></li>
      											<li class="menu-item"><a href="#">Watchs</a></li>
      											<li class="menu-item"><a href="#">Hats</a></li>
      											<li class="menu-item"><a href="#">Wallets</a></li>
      										</ul>
      									</li>
      								</ul>
      							</li>

      							<li class="menu-item menu-item-has-children">
      								<a href="blog-list.html">
      									Blog
      								</a>

      								<ul class="sub-menu">
      									<li class="menu-item">
      										<a href="blog-list.html">Blog List</a>
      									</li>

      									<li class="menu-item">
      										<a href="blog-grid.html">Blog Grid</a>
      									</li>

      									<li class="menu-item">
      										<a href="blog-detail.html">Detail Blog</a>
      									</li>
      								</ul>
      							</li>

      							<li class="menu-item">
      								<a href="contact.html">
      									Contact
      								</a>
      							</li>
      						</ul>
      					</nav>

      					<div class="group-feature">
      						<div class="hun-element-search--type-1 set-color js-call-search">
      							<span class="btn-open search-open">
      								<i class="icon ion-android-search"></i>
      							</span>

      							<div class="search-form">
      								<span class="search-close"><i>×</i></span>

      								<form role="search" method="get" action="../../external.html?link=http://hunthemes.com/wplabore/">
      									<input type="search" class="search-field set-color" value="" name="s" required="">
      									<span class="search-notice">Hit enter to search or ESC to close</span>
      								</form>

      								<ul class="list-result"></ul>
      							</div>
      						</div>

      						<div class="hun-element-cart--type-1 set-color">
      							<a href="cart.html" class="btn-open btn-cart" data-count-cart="2">
      								<i class="icon ion-android-cart"></i>
      							</a>

      							<div class="content-cart">
      								<div class="total-cart">
      									<span class="text-total">Total:</span>

      									<span class="number-total">$108.00</span>
      								</div>

      								<div class="products-cart">
      									<div class="item-product">
      										<a href="#" class="content-item">
      											<span class="pic-product" style="background-image: url(assets/images/p-06-1.jpg);"></span>

      											<span class="name-product">
      												Neck Tie Satin Blouse
      											</span>

      											<span class="num-price-product">
      												2 <span class="multiply-mark">×</span> $25.00
      											</span>
      										</a>

      										<a href="#" class="remove-item">×</a>
      									</div>

      									<div class="item-product">
      										<a href="#" class="content-item">
      											<span class="pic-product" style="background-image: url(assets/images/p-16-1.jpg);"></span>

      											<span class="name-product">
      												Navy Long Sleeve Shirt
      											</span>

      											<span class="num-price-product">
      												2 <span class="multiply-mark">×</span> $25.00
      											</span>
      										</a>

      										<a href="#" class="remove-item">×</a>
      									</div>
      								</div>

      								<div class="buttons-cart">
      									<a href="#" class="btn-checkout">
      										Checkout
      									</a>

      									<a href="cart.html" class="btn-viewcart">
      										View Cart
      									</a>
      								</div>
      							</div>
      						</div>

      						<div class="hun-element-wish--type-1 set-color">
      							<a href="wishlist.html" class="btn-open btn-wish" data-count-wish="2">
      								<i class="icon ion-android-favorite-outline"></i>
      							</a>
      						</div>

      						<div class="hun-element-account--type-1 set-color js-call-magnificpopup" data-popupinside="true">
      							<a class="btn-open btn-acc mfp-inline js-open-popup" href="#account-form-01">
      								<i class="icon ion-android-person"></i>
      							</a>

      							<div id="account-form-01" class="content-element mfp-hide">
      								<div class="tabs-account">
      									<!-- Login Tab -->
      									<input id="account-form-01-login" type="radio" class="toggle-tab" name="account-form-01-toggle" checked>
      									<label for="account-form-01-login" class="label-tab">Login</label>
      									<div class="content-tab">
      										<h2 class="title-form">
      											Login
      										</h2>

      										<form>
      											<label>
      												<input class="input-field" type="text" placeholder="Username or Email">
      											</label>

      											<label>
      												<input class="input-field" type="password" placeholder="Password">
      											</label>

      											<label>
      												<input type="checkbox">
      												Remember me
      											</label>

      											<button>
      												Sign In
      											</button>
      										</form>
      									</div>

      									<!-- Register Tab -->
      									<input id="account-form-01-register" type="radio" class="toggle-tab" name="account-form-01-toggle">
      									<label for="account-form-01-register" class="label-tab">Register</label>
      									<div class="content-tab">
      										<h2 class="title-form">
      											Register
      										</h2>

      										<form>
      											<label>
      												<input class="input-field" type="text" placeholder="Username">
      											</label>

      											<label>
      												<input class="input-field" type="text" placeholder="Email">
      											</label>

      											<label>
      												<input class="input-field" type="text" placeholder="Password">
      											</label>

      											<label>
      												<input class="input-field" type="text" placeholder="Confirm Password">
      											</label>

      											<button>
      												Sign Up
      											</button>
      										</form>
      									</div>

      									<!-- Lost Password Tab -->
      									<input id="account-form-01-lost-password" type="radio" class="toggle-tab" name="account-form-01-toggle">
      									<label for="account-form-01-lost-password" class="label-tab">Lost Password</label>
      									<div class="content-tab">
      										<h2 class="title-form">
      											Reset Password
      										</h2>

      										<form>
      											<p class="description-form">
      												Please enter your username or email address. You will receive a link to create a new password via email.
      											</p>

      											<label>
      												<input class="input-field" type="text" placeholder="Username or Email">
      											</label>

      											<button>
      												Reset Password
      											</button>
      										</form>
      									</div>
      								</div>
      							</div>
      						</div>

      						<div class="hun-menu-mobile set-color">
      							<a href="#" class="btn-toggle-menu"><span></span></a>

      							<div class="mobile-navigation">
      								<nav class="mobile-menu">
      									<ul class="list-menu set-color">
      										<li class="menu-item menu-item-has-children current-menu-item">
      											<a href="#">
      												Home
      											</a>

      											<ul class="sub-menu">
      												<li class="menu-item">
      													<a href="home1.html">Home 01</a>
      												</li>

      												<li class="menu-item">
      													<a href="home2.html">Home 02</a>
      												</li>

      												<li class="menu-item">
      													<a href="home3.html">Home 03</a>
      												</li>

      												<li class="menu-item">
      													<a href="home4.html">Home 04</a>
      												</li>
      											</ul>
      										</li>

      										<li class="menu-item menu-item-has-children">
      											<a href="#">
      												Shop
      											</a>

      											<ul class="sub-menu">
      												<li class="menu-item">
      													<a href="shop1.html">Shop 01</a>
      												</li>

      												<li class="menu-item">
      													<a href="shop2.html">Shop 02</a>
      												</li>

      												<li class="menu-item">
      													<a href="onsale.html">Shop On Sale</a>
      												</li>

      												<li class="menu-item">
      													<a href="detail-product1.html">Detail Product 01</a>
      												</li>

      												<li class="menu-item">
      													<a href="detail-product2.html">Detail Product 02</a>
      												</li>

      												<li class="menu-item">
      													<a href="cart.html">Shopping Cart</a>
      												</li>

      												<li class="menu-item">
      													<a href="wishlist.html">Wishlist</a>
      												</li>
      											</ul>
      										</li>

      										<li class="menu-item menu-item-has-children">
      											<a href="#">
      												Pages
      											</a>

      											<ul class="sub-menu">
      												<li class="menu-item">
      													<a href="about.html">About</a>
      												</li>

      												<li class="menu-item">
      													<a href="coming-soon.html">Coming Soon</a>
      												</li>
      											</ul>
      										</li>

      										<li class="menu-item menu-item-has-children mega-menu set-6-col">
      											<a href="#">Mega</a>

      											<ul class="sub-menu">
      												<li class="menu-item menu-item-has-children">
      													<a href="#">
      														WOMEN
      													</a>

      													<ul class="sub-menu">
      														<li class="menu-item"><a href="#">Dress</a></li>
      														<li class="menu-item"><a href="#">Shirt</a></li>
      														<li class="menu-item"><a href="#">T-Shirt</a></li>
      														<li class="menu-item"><a href="#">Jacket</a></li>
      														<li class="menu-item"><a href="#">Skirt</a></li>
      														<li class="menu-item"><a href="#">Shoes</a></li>
      													</ul>
      												</li>

      												<li class="menu-item menu-item-has-children">
      													<a href="#">
      														MEN
      													</a>

      													<ul class="sub-menu">
      														<li class="menu-item"><a href="#">Hoodie</a></li>
      														<li class="menu-item"><a href="#">Shirt</a></li>
      														<li class="menu-item"><a href="#">T-Shirt</a></li>
      														<li class="menu-item"><a href="#">Jacket</a></li>
      														<li class="menu-item"><a href="#">Coats</a></li>
      														<li class="menu-item"><a href="#">Shoes</a></li>
      													</ul>
      												</li>

      												<li class="menu-item menu-item-has-children">
      													<a href="#">
      														YOUTH
      													</a>

      													<ul class="sub-menu">
      														<li class="menu-item"><a href="#">Dress</a></li>
      														<li class="menu-item"><a href="#">Shirt</a></li>
      														<li class="menu-item"><a href="#">T-Shirt</a></li>
      														<li class="menu-item"><a href="#">Jacket</a></li>
      														<li class="menu-item"><a href="#">Skirt</a></li>
      														<li class="menu-item"><a href="#">Shoes</a></li>
      													</ul>
      												</li>

      												<li class="menu-item menu-item-has-children">
      													<a href="#">
      														KIDS
      													</a>

      													<ul class="sub-menu">
      														<li class="menu-item"><a href="#">Dress</a></li>
      														<li class="menu-item"><a href="#">Shirt</a></li>
      														<li class="menu-item"><a href="#">T-Shirt</a></li>
      														<li class="menu-item"><a href="#">Jacket</a></li>
      														<li class="menu-item"><a href="#">Skirt</a></li>
      														<li class="menu-item"><a href="#">Shoes</a></li>
      													</ul>
      												</li>

      												<li class="menu-item menu-item-has-children">
      													<a href="#">
      														BABY
      													</a>

      													<ul class="sub-menu">
      														<li class="menu-item"><a href="#">Hoodie</a></li>
      														<li class="menu-item"><a href="#">Shirt</a></li>
      														<li class="menu-item"><a href="#">T-Shirt</a></li>
      														<li class="menu-item"><a href="#">Jacket</a></li>
      														<li class="menu-item"><a href="#">Coats</a></li>
      														<li class="menu-item"><a href="#">Shoes</a></li>
      													</ul>
      												</li>

      												<li class="menu-item menu-item-has-children">
      													<a href="#">
      														ACCESSORIES
      													</a>

      													<ul class="sub-menu">
      														<li class="menu-item"><a href="#">Bags</a></li>
      														<li class="menu-item"><a href="#">Sunglasses</a></li>
      														<li class="menu-item"><a href="#">Belts</a></li>
      														<li class="menu-item"><a href="#">Watchs</a></li>
      														<li class="menu-item"><a href="#">Hats</a></li>
      														<li class="menu-item"><a href="#">Wallets</a></li>
      													</ul>
      												</li>
      											</ul>
      										</li>

      										<li class="menu-item menu-item-has-children">
      											<a href="blog-list.html">
      												Blog
      											</a>

      											<ul class="sub-menu">
      												<li class="menu-item">
      													<a href="blog-list.html">Blog List</a>
      												</li>

      												<li class="menu-item">
      													<a href="blog-grid.html">Blog Grid</a>
      												</li>

      												<li class="menu-item">
      													<a href="blog-detail.html">Detail Blog</a>
      												</li>
      											</ul>
      										</li>

      										<li class="menu-item">
      											<a href="contact.html">
      												Contact
      											</a>
      										</li>
      									</ul>
      								</nav>
      							</div>
      						</div>
      					</div>
      				</div>
      			</div>
      		</div>
      	</header>
      	<!-- end Header -->
        <!-- Page Title -->
        	<div class="hun-section-page-title layout-1 set-color text-center off-parallax show-bg-img show-overlay-color show-space-bottom">
        		<div class="inner-section">
        			<div class="bg-section parallax100"><span class="inner-parallax" style="background-image: url(assets/images/bg1.jpg);"></span></div>

        			<div class="container">
        				<h2 class="main-title">
        					Klub Wears
        				</h2>


        			</div>
        		</div>
        	</div>
          <!-- All Products -->
	<div class="hun-section-all-products layout-1 js-call-magnificpopup full-width outer-hun-element-product--type-1 price-color ratio-img-3-4 price-color show-space-bottom">
		<div class="inner-section">
			<div class="container">
				<div class="tool-products set-color js-call-dropdown-tab">
					<div class="sort-product">
						<label class="wrap-select">
							<select class="select-field">
								<option>Sort By Default</option>
								<option>Sort By Price</option>
								<option>Sort By Name</option>
								<option>Sort By Date</option>
							</select>
						</label>
					</div>

					<div class="find-product">
						<span class="toggle-tab" data-tab="filter">
							<i class="fa fa-filter"></i>
							Filter
						</span>

						<span class="toggle-tab" data-tab="search">
							<i class="fa fa-search"></i>
							Search
						</span>
					</div>

					<div class="content-find-product">
						<div class="panel-tab" data-tab="filter">
							<div class="wrap-options-filter">
								<div class="options-filter">
									<div class="group-options">
										<h6 class="title-group">
											Categories
										</h6>

										<div class="list-options">
											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												Women
											</label>

											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												Men
											</label>

											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												Shoes
											</label>

											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												Bags
											</label>

											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												Sunglass
											</label>
										</div>
									</div>

									<div class="group-options">
										<h6 class="title-group">
											Collections
										</h6>

										<div class="list-options">
											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												Summer
											</label>

											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												Fall
											</label>

											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												Spring
											</label>

											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												Winter
											</label>

											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												Street
											</label>
										</div>
									</div>

									<div class="group-options">
										<h6 class="title-group">
											Color
										</h6>

										<div class="list-options">
											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												Black
											</label>

											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												White
											</label>

											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												Grey
											</label>

											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												Blue
											</label>

											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												Green
											</label>
										</div>
									</div>

									<div class="group-options">
										<h6 class="title-group">
											Size
										</h6>

										<div class="list-options">
											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												Size S
											</label>

											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												Size M
											</label>

											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												Size L
											</label>

											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												Size XL
											</label>

											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												Size XXL
											</label>
										</div>
									</div>

									<div class="group-options">
										<h6 class="title-group">
											Price
										</h6>

										<div class="list-options">
											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												$0 - $100
											</label>

											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												$100 - $500
											</label>

											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												$500 - $1000
											</label>

											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												$1000 - $3000
											</label>

											<label class="item-option">
												<input type="checkbox">
												<span class="icon-checkbox"></span>
												$3000 - $10000
											</label>
										</div>
									</div>
								</div>
							</div>

							<div class="buttons-filter">
								<span class="btn-uncheck-all">
									Uncheck All
								</span>

								<button class="btn-apply-filter">
									Apply Filter
								</button>

								<span class="btn-close-filter toggle-tab" data-tab="filter">
									Close
								</span>
							</div>
						</div>

						<div class="panel-tab" data-tab="search">
							<form class="form-search">
								<label>
									<input type="text" placeholder="Search Product...">
								</label>

								<button>
									<i class="fa fa-search"></i>
								</button>
							</form>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-lg-4 col-xl-3">
						<div class="hun-element-product--type-1">
							<a href="detail-product1.html" class="pic-product">
								<span class="gallery-product">
									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-18-1.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-18-2.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-18-3.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-18-4.jpg);"></span>
									</span>
								</span>
							</a>

							<div class="text-product">
								<h6 class="name-product set-color">
									<a href="detail-product1.html">
										Black Patterned T-Shirt
									</a>
								</h6>

								<div class="price-product set-color">
									<span class="new-price">
										$32.65
									</span>
								</div>

								<div class="star-product">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-full"></i>
								</div>
							</div>

							<div class="buttons-product">
								<a href="#" class="btn-addcart set-color">
									Add To Cart +
								</a>

								<a class="btn-quickview set-color mfp-inline js-open-popup" href="#quickview-popup-01" title="Quick View">
									<i class="icon-eye"></i>
								</a>

								<a href="#" class="btn-addwish set-color" title="Add To Wishlist">
									<i class="fa fa-heart-o"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 col-xl-3">
						<div class="hun-element-product--type-1">
							<div class="labels-product set-color">
								<span class="item-label label-new">New</span>
							</div>

							<a href="detail-product1.html" class="pic-product">
								<span class="gallery-product">
									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-04-1.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-04-2.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-04-3.jpg);"></span>
									</span>
								</span>
							</a>

							<div class="text-product">
								<h6 class="name-product set-color">
									<a href="detail-product1.html">
										Black Ribbed Bodysuit
									</a>
								</h6>

								<div class="price-product set-color">
									<span class="new-price">
										$32.65
									</span>
								</div>

								<div class="star-product">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-full"></i>
								</div>
							</div>

							<div class="buttons-product">
								<a href="#" class="btn-addcart set-color">
									Add To Cart +
								</a>

								<a class="btn-quickview set-color mfp-inline js-open-popup" href="#quickview-popup-01" title="Quick View">
									<i class="icon-eye"></i>
								</a>

								<a href="#" class="btn-addwish set-color" title="Add To Wishlist">
									<i class="fa fa-heart-o"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 col-xl-3">
						<div class="hun-element-product--type-1">
							<a href="detail-product1.html" class="pic-product">
								<span class="gallery-product">
									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-06-1.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-06-2.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-06-3.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-06-4.jpg);"></span>
									</span>
								</span>
							</a>

							<div class="text-product">
								<h6 class="name-product set-color">
									<a href="detail-product1.html">
										Neck Tie Satin Blouse
									</a>
								</h6>

								<div class="price-product set-color">
									<span class="new-price">
										$32.65
									</span>
								</div>

								<div class="star-product">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-full"></i>
								</div>
							</div>

							<div class="buttons-product">
								<a href="#" class="btn-addcart set-color">
									Add To Cart +
								</a>

								<a class="btn-quickview set-color mfp-inline js-open-popup" href="#quickview-popup-01" title="Quick View">
									<i class="icon-eye"></i>
								</a>

								<a href="#" class="btn-addwish set-color" title="Add To Wishlist">
									<i class="fa fa-heart-o"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 col-xl-3">
						<div class="hun-element-product--type-1">
							<div class="labels-product set-color">
								<span class="item-label label-sale">Sale</span>
							</div>

							<a href="detail-product1.html" class="pic-product">
								<span class="gallery-product">
									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-05-3.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-05-2.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-05-1.jpg);"></span>
									</span>
								</span>
							</a>

							<div class="text-product">
								<h6 class="name-product set-color">
									<a href="detail-product1.html">
										Black Blouse
									</a>
								</h6>

								<div class="price-product set-color">
									<span class="new-price">
										$32.65
									</span>

									<span class="old-price">
										$23.65
									</span>
								</div>

								<div class="star-product">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-full"></i>
								</div>
							</div>

							<div class="buttons-product">
								<a href="#" class="btn-addcart set-color">
									Add To Cart +
								</a>

								<a class="btn-quickview set-color mfp-inline js-open-popup" href="#quickview-popup-01" title="Quick View">
									<i class="icon-eye"></i>
								</a>

								<a href="#" class="btn-addwish set-color" title="Add To Wishlist">
									<i class="fa fa-heart-o"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 col-xl-3">
						<div class="hun-element-product--type-1">
							<a href="detail-product1.html" class="pic-product">
								<span class="gallery-product">
									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-21-1.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-21-2.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-21-3.jpg);"></span>
									</span>
								</span>
							</a>

							<div class="text-product">
								<h6 class="name-product set-color">
									<a href="detail-product1.html">
										Pocket Detailed T-Shirt
									</a>
								</h6>

								<div class="price-product set-color">
									<span class="new-price">
										$32.65
									</span>
								</div>

								<div class="star-product">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-full"></i>
								</div>
							</div>

							<div class="buttons-product">
								<a href="#" class="btn-addcart set-color">
									Add To Cart +
								</a>

								<a class="btn-quickview set-color mfp-inline js-open-popup" href="#quickview-popup-01" title="Quick View">
									<i class="icon-eye"></i>
								</a>

								<a href="#" class="btn-addwish set-color" title="Add To Wishlist">
									<i class="fa fa-heart-o"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 col-xl-3">
						<div class="hun-element-product--type-1">
							<a href="detail-product1.html" class="pic-product">
								<span class="gallery-product">
									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-09-1.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-09-3.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-09-4.jpg);"></span>
									</span>
								</span>
							</a>

							<div class="text-product">
								<h6 class="name-product set-color">
									<a href="detail-product1.html">
										Blue Classic Neck Shirt
									</a>
								</h6>

								<div class="price-product set-color">
									<span class="new-price">
										$32.65
									</span>
								</div>

								<div class="star-product">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-full"></i>
								</div>
							</div>

							<div class="buttons-product">
								<a href="#" class="btn-addcart set-color">
									Add To Cart +
								</a>

								<a class="btn-quickview set-color mfp-inline js-open-popup" href="#quickview-popup-01" title="Quick View">
									<i class="icon-eye"></i>
								</a>

								<a href="#" class="btn-addwish set-color" title="Add To Wishlist">
									<i class="fa fa-heart-o"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 col-xl-3">
						<div class="hun-element-product--type-1">
							<a href="detail-product1.html" class="pic-product">
								<span class="gallery-product">
									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-10-1.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-10-2.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-10-3.jpg);"></span>
									</span>
								</span>
							</a>

							<div class="text-product">
								<h6 class="name-product set-color">
									<a href="detail-product1.html">
										Navy Fur Coat
									</a>
								</h6>

								<div class="price-product set-color">
									<span class="new-price">
										$32.65
									</span>
								</div>

								<div class="star-product">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-full"></i>
								</div>
							</div>

							<div class="buttons-product">
								<a href="#" class="btn-addcart set-color">
									Add To Cart +
								</a>

								<a class="btn-quickview set-color mfp-inline js-open-popup" href="#quickview-popup-01" title="Quick View">
									<i class="icon-eye"></i>
								</a>

								<a href="#" class="btn-addwish set-color" title="Add To Wishlist">
									<i class="fa fa-heart-o"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 col-xl-3">
						<div class="hun-element-product--type-1">
							<a href="detail-product1.html" class="pic-product">
								<span class="gallery-product">
									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-16-1.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-16-2.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-16-3.jpg);"></span>
									</span>
								</span>
							</a>

							<div class="text-product">
								<h6 class="name-product set-color">
									<a href="detail-product1.html">
										Navy Long Sleeve Shirt
									</a>
								</h6>

								<div class="price-product set-color">
									<span class="new-price">
										$32.65
									</span>
								</div>

								<div class="star-product">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-full"></i>
								</div>
							</div>

							<div class="buttons-product">
								<a href="#" class="btn-addcart set-color">
									Add To Cart +
								</a>

								<a class="btn-quickview set-color mfp-inline js-open-popup" href="#quickview-popup-01" title="Quick View">
									<i class="icon-eye"></i>
								</a>

								<a href="#" class="btn-addwish set-color" title="Add To Wishlist">
									<i class="fa fa-heart-o"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 col-xl-3">
						<div class="hun-element-product--type-1">
							<a href="detail-product1.html" class="pic-product">
								<span class="gallery-product">
									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-07-1.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-07-2.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-07-3.jpg);"></span>
									</span>
								</span>
							</a>

							<div class="text-product">
								<h6 class="name-product set-color">
									<a href="detail-product1.html">
										Black Boots
									</a>
								</h6>

								<div class="price-product set-color">
									<span class="new-price">
										$32.65
									</span>
								</div>

								<div class="star-product">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-full"></i>
								</div>
							</div>

							<div class="buttons-product">
								<a href="#" class="btn-addcart set-color">
									Add To Cart +
								</a>

								<a class="btn-quickview set-color mfp-inline js-open-popup" href="#quickview-popup-01" title="Quick View">
									<i class="icon-eye"></i>
								</a>

								<a href="#" class="btn-addwish set-color" title="Add To Wishlist">
									<i class="fa fa-heart-o"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 col-xl-3">
						<div class="hun-element-product--type-1">
							<a href="detail-product1.html" class="pic-product">
								<span class="gallery-product">
									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-13-2.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-13-1.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-13-3.jpg);"></span>
									</span>
								</span>
							</a>

							<div class="text-product">
								<h6 class="name-product set-color">
									<a href="detail-product1.html">
										Black Lace On Shoes
									</a>
								</h6>

								<div class="price-product set-color">
									<span class="new-price">
										$32.65
									</span>
								</div>

								<div class="star-product">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-full"></i>
								</div>
							</div>

							<div class="buttons-product">
								<a href="#" class="btn-addcart set-color">
									Add To Cart +
								</a>

								<a class="btn-quickview set-color mfp-inline js-open-popup" href="#quickview-popup-01" title="Quick View">
									<i class="icon-eye"></i>
								</a>

								<a href="#" class="btn-addwish set-color" title="Add To Wishlist">
									<i class="fa fa-heart-o"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 col-xl-3">
						<div class="hun-element-product--type-1">
							<div class="labels-product set-color">
								<span class="item-label label-sale">Sale</span>
							</div>

							<a href="detail-product1.html" class="pic-product">
								<span class="gallery-product">
									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-14-2.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-14-1.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-14-3.jpg);"></span>
									</span>
								</span>
							</a>

							<div class="text-product">
								<h6 class="name-product set-color">
									<a href="detail-product1.html">
										Navy Lace On Shoes
									</a>
								</h6>

								<div class="price-product set-color">
									<span class="new-price">
										$32.65
									</span>

									<span class="old-price">
										$38.25
									</span>
								</div>

								<div class="star-product">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-full"></i>
								</div>
							</div>

							<div class="buttons-product">
								<a href="#" class="btn-addcart set-color">
									Add To Cart +
								</a>

								<a class="btn-quickview set-color mfp-inline js-open-popup" href="#quickview-popup-01" title="Quick View">
									<i class="icon-eye"></i>
								</a>

								<a href="#" class="btn-addwish set-color" title="Add To Wishlist">
									<i class="fa fa-heart-o"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 col-xl-3">
						<div class="hun-element-product--type-1">
							<a href="detail-product1.html" class="pic-product">
								<span class="gallery-product">
									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-22-2.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-22-1.jpg);"></span>
									</span>

									<span class="item-gal">
										<span class="image-gal" style="background-image: url(assets/images/p-22-3.jpg);"></span>
									</span>
								</span>
							</a>

							<div class="text-product">
								<h6 class="name-product set-color">
									<a href="detail-product1.html">
										Slip On Boots
									</a>
								</h6>

								<div class="price-product set-color">
									<span class="new-price">
										$32.65
									</span>
								</div>

								<div class="star-product">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-full"></i>
								</div>
							</div>

							<div class="buttons-product">
								<a href="#" class="btn-addcart set-color">
									Add To Cart +
								</a>

								<a class="btn-quickview set-color mfp-inline js-open-popup" href="#quickview-popup-01" title="Quick View">
									<i class="icon-eye"></i>
								</a>

								<a href="#" class="btn-addwish set-color" title="Add To Wishlist">
									<i class="fa fa-heart-o"></i>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="buttons-section text-center">
					<a href="#" class="hun-button size-normal style-fill-color shape-round">
						Load More
					</a>
				</div>

				<div class="loop-pagination set-color text-center d-none">
					<ul>
						<li>
							<a class="next page-numbers" href="#"><i class="icon ion-chevron-left"></i></a>
						</li>

						<li>
							<span class="page-numbers current">1</span>
						</li>

						<li>
							<a class="page-numbers" href="#">2</a>
						</li>

						<li>
							<a class="page-numbers" href="#">3</a>
						</li>

						<li>
							<a class="next page-numbers" href="#"><i class="icon ion-chevron-right"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- end All Products -->

	<!-- Box Info -->
	<div class="hun-section-box-info layout-1 full-width show-small-space-bottom">
		<div class="inner-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="item-box set-color">
							<h4 class="title-box">
								Free Delivery Worldwide
							</h4>

							<div class="description-box">
								 <a href="#">Click here for more info</a>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="item-box set-color">
							<h4 class="title-box">
								30 Days Return
							</h4>

							<div class="description-box">
								Simply return it within 30 days for an exchange.
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="item-box set-color">
							<h4 class="title-box">
								Store Opening
							</h4>

							<div class="description-box">
								Shop open from Monday to Sunday.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end Box Info -->

	<!-- Footer -->
	<footer class="hun-section-footer hun-footer full-width layout-1">
		<div class="content-footer set-color">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-xl-4">
						<div class="widget">
							<h3 class="title-widget">
								ABOUT MISOPPE
							</h3>

							<div class="text-widget">
								<p style="max-width: 469px;">
									Any questions? Let us know in store at 8th floor, 159 Hudson St, New York, NY 10018 or call us on <a href="#">(+1) 12 345 6789</a>
								</p>

								<p>
									<img src="assets/images/icons/paypal.png" alt="IMG-PAYPAL">
									<img src="assets/images/icons/visa.png" alt="IMG-VISA">
									<img src="assets/images/icons/mastercard.png" alt="IMG-MASTERCARD">
									<img src="assets/images/icons/express.png" alt="IMG-EXPRESS">
									<img src="assets/images/icons/discover.png" alt="IMG-DISCOVER">
								</p>

								<div class="hun-element-social">
									<a href="#" class="social-link"><i class="fa fa-facebook"></i></a>
									<a href="#" class="social-link"><i class="fa fa-instagram"></i></a>
									<a href="#" class="social-link"><i class="fa fa-pinterest-p"></i></a>
									<a href="#" class="social-link"><i class="fa fa-youtube-play"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-lg-2 col-xl-2">
						<div class="widget">
							<h3 class="title-widget">
								CATEGORIES
							</h3>

							<div class="text-widget">
								<ul>
									<li><a href="#">Men</a></li>
									<li><a href="#">Women</a></li>
									<li><a href="#">Dresses</a></li>
									<li><a href="#">Sunglasses</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-lg-2 col-xl-2">
						<div class="widget">
							<h3 class="title-widget">
								LINKS
							</h3>

							<div class="text-widget">
								<ul>
									<li><a href="#">Search</a></li>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Returns</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-lg-2 col-xl-2">
						<div class="widget">
							<h3 class="title-widget">
								HELP
							</h3>

							<div class="text-widget">
								<ul>
									<li><a href="#">Track Order</a></li>
									<li><a href="#">Returns</a></li>
									<li><a href="#">Shipping</a></li>
									<li><a href="#">FAQs</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-2">
						<div class="widget">
							<h3 class="title-widget">
								NEWSLETTER
							</h3>

							<div class="text-widget">
								<div class="subscribe-form-01 set-color">
									<form>
										<label>
											<input type="text" placeholder="email@example.com">
										</label>

										<button>
											Subscribe
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="copyright-footer set-color">
			<div class="contaner">
				<div class="content-copyright">
					Copyright © 2019 Mishop theme by <a href="#">HunThemes</a>
				</div>
			</div>
		</div>
	</footer>
	<!-- end Footer -->

	<!-- Quickview Popup -->
	<div id="quickview-popup-01" class="hun-element-quickview-popup--type-1 mfp-hide">
		<div class="hun-element-detail-product--type-1">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-lg-6">
						<div class="images-product set-color">
							<div class="img-slider js-call-slick" data-custom-dots="true">
								<div class="slide-slick" data-slick='{"adaptiveHeight": true, "fade": true, "speed": 300, "dots": true, "arrows": false, "autoplay": false, "infinite": false, "slidesToShow": 1, "slidesToScroll": 1}'>

									<div class="item-slick" data-inner-dot='<span class="inner-dot" class="img-dot" style="background-image: url(assets/images/p-detail-01-1.jpg)"></span>'>
										<div class="wrap-img">
											<img src="assets/images/p-detail-01-1.jpg" alt="IMG">
										</div>
									</div>

									<div class="item-slick" data-inner-dot='<span class="inner-dot" class="img-dot" style="background-image: url(assets/images/p-detail-01-2.jpg)"></span>'>
										<div class="wrap-img">
											<img src="assets/images/p-detail-01-2.jpg" alt="IMG">
										</div>
									</div>

									<div class="item-slick" data-inner-dot='<span class="inner-dot" class="img-dot" style="background-image: url(assets/images/p-detail-01-3.jpg)"></span>'>
										<div class="wrap-img">
											<img src="assets/images/p-detail-01-3.jpg" alt="IMG">
										</div>
									</div>

									<div class="item-slick" data-inner-dot='<span class="inner-dot" class="img-dot" style="background-image: url(assets/images/p-detail-01-4.jpg)"></span>'>
										<div class="wrap-img">
											<img src="assets/images/p-detail-01-4.jpg" alt="IMG">
										</div>
									</div>

									<div class="item-slick" data-inner-dot='<span class="inner-dot" class="img-dot" style="background-image: url(assets/images/p-detail-01-5.jpg)"></span>'>
										<div class="wrap-img">
											<img src="assets/images/p-detail-01-5.jpg" alt="IMG">
										</div>
									</div>
								</div>

								<div class="dots-slick"></div>
							</div>
						</div>
					</div>

					<div class="col-md-7 col-lg-6">
						<div class="text-product">
							<h3 class="name-product">
								Navy Long Sleeve Shirt
							</h3>

							<div class="star-product">
								<span class="list-star">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-full"></i>
								</span>

								(9 customer reviews)
							</div>

							<div class="price-product">
								<span class="new-price">
									$32.85
								</span>

								<span class="old-price">
									$38.65
								</span>
							</div>

							<div class="description-product">
								<p>
									Etiam scelerisque sollicitudin diam, at posuere magna. Nullam nisi ipsum, consequat at pharetra at, volutpat id quam. Proin auctor quam ac sodales condimentum. Morbi pretium diam vel est laoreet commodo vel eu odio.
								</p>
							</div>

							<form class="cart-form">
								<div class="choose-options set-color">
									<table class="variations">
										<tbody>
											<tr>
												<td class="label">
													<label>Color</label>
												</td>

												<td class="value">
													<select>
														<option>Choose an option</option>
														<option>Blue</option>
														<option>Green</option>
														<option>Red</option>
													</select>
												</td>
											</tr>

											<tr>
												<td class="label">
													<label>Size</label>
												</td>

												<td class="value">
													<select>
														<option>Choose an option</option>
														<option>Large</option>
														<option>Medium</option>
														<option>Small</option>
													</select>
												</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="quantity-and-addcart set-color">
									<div class="quantity-product js-call-quantity">
										<span class="btn-num-product-down"></span>

										<input class="input-field" type="text" value="1">

										<span class="btn-num-product-up"></span>
									</div>

									<button class="btn-addcart">
										Add To Cart
									</button>
								</div>
							</form>

							<div class="add-wishlist set-color">
								<a href="#" class="btn-addwish">
									+ Add to Wishlist
								</a>
							</div>

							<ul class="meta-info set-color">
								<li>
									<span class="name-info">SKU:</span> MUG-01
								</li>

								<li>
									<span class="name-info">Categories:</span> <a href="#">Men</a>, <a href="#">Design</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end Quickview Popup -->
</div>

<!--===============================================================================================-->





    <script src="{{ asset('app.js') }}"></script>


    </body>
</html>
