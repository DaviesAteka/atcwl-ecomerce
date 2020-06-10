@extends('shopping.layouts.new')
@section('content')
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
										
										<img src="{{ productImage($product->image) }}" alt="davies">
									</div>

									
								</div>
								<div id="js-product-nav" class="product-gallery-thumbs">
									
									@if ($product->images)
									@foreach (json_decode($product->images, true) as $image)
									<div class="product-gallery-thumbs__item active" data-large-src="{{ productImage($image) }}">
										<img src="{{ productImage($image) }}" alt="product">
									</div>
									@endforeach
									@endif
								</div>
							</div>
						</div>
					</div>

					<div class="product-summary summary col-lg-7">
						<h1 class="h2 product-title"> {{$product->slug}}</h1><p>&nbsp;</p>
						<div>{!! $stockLevel !!}</div><p>&nbsp;</p>
						<div class="price">
							<ins><span class="amount">{{ $product->presentPrice() }}</span></ins>
							
						</div>
					
						<div class="description-block">
							<h3 class="mb-30">Description</h3>

							<div class="product-description text-content">
								<p>
									{!! $product->description !!}
								</p>
							</div>
						</div>
						@if ($product->quantity > 0)
						<form action="{{ route('cart.store') }}" method="POST">
							{{ csrf_field() }}
								<input type="hidden" name="id" value="{{ $product->id }}"/>
								<input type="hidden" name="name" value="{{ $product->name }}"/>
								<input type="hidden" name="price" value="{{ $product->price }}"/>							
									<button type="submit" class="btn btn-primary btn-lg add_to_cart_button">
										Add To Cart
									</button>
						</form>
						@endif
					</div>
				</div>
			</div>
		</section>

		<section class="section-related">
			<div class="container">
				<h2 class="section-title text-center h3">Other items you may like</h2>
				<ul class="products featured-products columns-5">
					@foreach ($mightAlsoLike as $product)
					<li class="product">
						<div class="product-thumb">
							<span class="onsale">-80%</span>
							<a href="{{ route('shop.index', $product->slug) }}" class="product-thumb__link">
								<img src="{{ productImage($product->image) }}" alt="">
								<span class="btn btn-outline-light shop-link">Shop</span>
							</a>
						</div>
						<div class="product-title"><a href="{{ route('shop.index', $product->slug) }}">{{ $product->name }}</a></div>
						<div class="price">
							<span class="amount">{{ $product->presentPrice() }}</span>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</section>
	</main>
</div>
</div>
@endsection
