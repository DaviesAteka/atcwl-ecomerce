<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta http-equiv="refresh" content="4"/> --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Klubwears | @yield('title', '')</title>

  	<link rel="icon" type="image/png" href="{{ asset('app-assets/images/icons/klub.png') }}">

	<!-- Theme -->
	<link rel="stylesheet" href="{{ asset('app-assets/css/all.min.css') }}">
	<meta name="theme-color" content="#ECECEC">
</head>
<body>
	<div class="head-line"></div>

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
						<img src="{{ asset('app-assets/images/icons/klublogo1.png') }}" alt="KLUBWEARS"></a>
				</div>

				<div class="quick-access-menu col-lg-4">
					<div class="quick-access__item quick-access__item_border-r">
						<a href="#"><span class="account"><i class="flaticon-messenger-user-avatar fi-2x"></i></span></a>
					</div>
					@if (Cart::count() > 0)
					
					<div class="quick-access__item">
						<div class="header-mini-cart">
							<a href="{{ route('cart.index')}}" class="mini-cart-link">
								<i class="cart__icon flaticon-online-shopping-cart fi-2x"></i>
								<span class="mini-cart-link__qty" >{{ Cart::count() }}</span>
							</a>
						</div>
					</div>

					@else
					<div class="quick-access__item">
						<div class="header-mini-cart">
							<a href="{{ route('cart.index')}}" class="mini-cart-link">
								<i class="cart__icon flaticon-online-shopping-cart fi-2x"></i>
								<span class="mini-cart-link__qty">{{ Cart::count() }}</span>
							</a>

							

						</div>
					</div>
					@endif
				</div><!-- end of quick-access-menu -->
			</div> <!-- end of top-bar -->

			<nav class="header-navigation">
				<button class="mob-menu-close" id="js-close-mob-menu">
					<span>Close</span>
					<i class="flaticon-cancel-button"></i>
				</button>
				{{-- {{ menu('main', 'partials.menus.main') }} --}}
				<ul class="nav justify-content-center">
					<li class="nav-item">
						<a class="nav-link" href="{{ route('landing-page')}}">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="{{ route('shop.index') }}">Shop</a>
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
					@guest

					<li class="nav-item">
						<a class="nav-link" href="about.html">Account</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a class="nav-link" href="{{ route('login') }}">Login</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register')}}">Sign up</a>
							</li>
						</ul>
					</li>
					@else
	
					
						<li class="nav-item">
							<a class="nav-link" href="{{ route('register')}}">Settings</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								Logout
							</a>
						</li>
					
				
						
						
	
	
					<form id="logout-form" action="{{ route('logout') }}" method="POST">
						{{ csrf_field() }}
					</form>
					@endguest
				</ul>
			</nav>
		</div> <!-- end of container -->
@include('shopping.inc.category')

	</header>
