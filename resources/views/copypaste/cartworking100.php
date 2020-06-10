@extends('shopping.layouts.new')
@section('title', 'Shopping Cart')
@section('content')
<div class="page-wrap cart shop">
	​
	<!-- Breadcrumbs -->
	<nav aria-label="breadcrumb" class="page-breadcrumb">
		<div class="container">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Cart</li>
			</ol>
		</div>
	</nav>​
	<div class="page-content">
		<main class="main-content">
			​
			{{-- @if (Cart::getContent()->count() > 0) --}}
			<div class="container">

				@if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
				{{-- <h4> {{ \Cart::getContent() }}</h4> --}}
				​<table class="cart-table cart table">
					<thead>
						<tr>
							<th class="product-thumbnail">Product</th>
							<th class="product-name">&nbsp;</th>
							<th class="product-price">Price</th>
							<th class="product-quantity">Quantity</th>
							<th class="product-remove">&nbsp;</th>
							<th class="product-subtotal">Total</th>
						</tr>
					</thead>
					<tbody>
						@foreach( \Cart::getContent() as $item)

						<tr class="cart-item">
							​
							<td class="product-thumbnail">
								<a href="{{ route('shop.show', $item->model->slug) }}">
									<img width="80" height="80"
										src="{{ productImage($item->model->image) }}" alt=""
										class="attachment-shop_thumbnail" />
								</a>
							</td>
							<td class="product-name">
								<h4><a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name}}</a>
								</h4>
								<p><a
										href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->details}}</a>
								</p>
							</td>
							<td class="product-price" data-title="Price: ">
								<span id="price" name="price" class="amount">{{ $item->price }}</span>
							</td>
							<td class="product-quantity" data-title="Quantity: ">
								<div class="quantity">
									<select class="select-style js-select2" id="role1" name="quantity"
										onchange="myNewFunction(this);" data-id="{{ $item->id }}">
										@for ($i = 1; $i < 5 + 1 ; $i++) <option
											{{ $item->quantity == $i ? 'selected' : '' }}>{{ $i }}</option>
											@endfor
											{{-- <option {{ $item->qty == 1 ? 'selected' : '' }}>1</option>
											<option {{ $item->qty == 2 ? 'selected' : '' }}>2</option>
											<option {{ $item->qty == 3 ? 'selected' : '' }}>3</option> --}}
									</select>
								</div>

								<div class="form-group row">
									<div class="col-md-6">
										<input id="hidden-role" type="hidden" class="form-control" name="hidden-role">
									</div>

								</div>
							</td>
							<td class="product-remove">
								<form action="{{ route('cart.destroy', $item->id) }}" method="POST">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button type="submit" class="remove">
										<i class="flaticon-waste-can"></i>
										<span class="remove__text">Remove</span>
									</button>
								</form>
							</td>
							<td class="product-subtotal" data-title="Total: ">
								<span class="amount">{{ number_format($item->getPriceSum()) }}</span>
							</td>
							​
						</tr>
						@endforeach
					</tbody>
				</table>
				​
				​
				<div class="row justify-content-between">
					<div class="col-lg-3">
						<h3 class="simple-heading mb-4">Calculate shipping</h3>
						​
						<form action="../external.html?link=http://taffle.dymix.us/" class="calc-shipping">
							<div class="form-group">
								<select class="form-control js-select2" data-placeholder="Choose country">
									<option value="">Choose country</option> <!-- Require for select placeholder -->
									<option value="Canada">Canada</option>
									<option value="China">China</option>
									<option value="Ukraine">Ukraine</option>
									<option value="USA">USA</option>
								</select>
							</div>
							<div class="form-group">
								<select class="form-control js-select2" data-placeholder="Select state">
									<option value="">Select state</option> <!-- Require for select placeholder -->
									<option value="Arizona">Arizona</option>
									<option value="California">California</option>
								</select>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Zip / Postal code">
							</div>
							<div class="form-submit">
								<input type="submit" class="btn btn-outline-primary btn-block" name="update_cart"
									value="Calculate" />
							</div>
						</form>
					</div>
					​
					<div class="col-lg-6 cart-total">
						<div class="cart-subtotal d-flex justify-content-between align-items-center">
							<span>Total</span>
							<span>{{ number_format(Cart::getTotal()) }}</span>
						</div>
						​
						<div class="cart-total__btns text-lg-right">
							<a href="{{ route('shop.index') }}"
								class="btn btn-outline-primary btn-lg cart-update-btn">Continue Shopping</a>
								<spacer>
							<a href="#"
								class="btn btn-primary btn-lg cart-checkout-btn">Checkout</a>
						</div>
					</div>
				</div>
				​
			</div>
			{{-- @else
			<h4>No items In the Cart</h4>
​
			@endif --}}
			<section class="section-related">
				<div class="container">
					<h2 class="section-title text-center h3">Other items you may like</h2>
					<ul class="products featured-products columns-5">
						@foreach ($mightAlsoLike as $product)
						<li class="product">
							<div class="product-thumb">
								<span class="onsale">-80%</span>
								<a href="{{ route('shop.show', $product->slug) }}" class="product-thumb__link">
									<img src="{{ productImage($item->image) }}" alt="">
									<span class="btn btn-outline-light shop-link">Shop</span>
								</a>
							</div>
							<div class="product-title"><a
									href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a></div>
							<div class="price">
								<span class="amount">{{ $product->price }}</span>
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
@section('extra-js')
<script src="{{ asset('js/app.js')}}"></script>

<script>
	function myNewFunction(sel) {
   alert(sel.options[sel.selectedIndex].text); 
    document.getElementById("hidden-role").value = sel.options[sel.selectedIndex].text;
	
// ebu fungua kwa web nione , wapi cmd or git bash, sijazoea ii natumia comANDE
const classname = document.querySelectorAll('#role1')
		Array.from(classname).forEach(function(element) {
			const itemPrice = document.getElementById("price").innerText;
			const qty = document.getElementById("hidden-role").value;
			const id = element.getAttribute('data-id')
			//  alert(itemPrice);
			// alert(qty1);
			 var a = parseFloat(itemPrice);
			// var b = parseFloat(qty1);

			// let Total =a*b;
			//  alert(a);
			 
			 
			 alert(id);
		axios.patch(`/cart/${id}`, {
			qty: document.getElementById("hidden-role").value
		})
		.then(function (response) {
			// console.log(response);
			window.location.href = '{{ route('cart.index') }}'
		})
		.catch(function (error) {
			console.log(error);
			// window.location.href = '{{ route('cart.index') }}'
		});
	})
}
   
</script>
@endsection