@extends('shopping.layouts.new')
@section('title', 'Cart')
@section('content')
<div class="cart-section container">
	<div>
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

		@if (\Cart::getContent()->count() > 0 )



		<h2>{{ Cart::getContent()->count() }} item(s) in Shopping Cart</h2>
		<div class="cart-table">
			@foreach( \Cart::getContent() as $item)
			<div class="cart-table-row">
				<div class="cart-table-row-left">
					<a href="{{ route('shop.show', $item->model->slug) }}"><img
							src="{{ productImage($item->model->image) }}" alt="item" class="cart-table-img"></a>
					<div class="cart-item-details">
						<div class="cart-table-item"><a
								href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}</a></div>
						<div class="cart-table-description">{{ $item->model->details }}</div>
					</div>
				</div>
				<div class="cart-table-row-right">
					<div class="cart-table-actions">
						<form action="{{ route('cart.destroy', $item->id) }}" method="POST">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<button type="submit" class="remove">
								<i class="flaticon-waste-can"></i>
								<span class="remove__text"></span>
							</button>
						</form>

					</div>
					<div>
						<select class="quantity" data-id="{{ $item->model->id }}"
							data-productQuantity="{{ $item->model->quantity }}">
							@for ($i = 1; $i < 5 + 1 ; $i++) <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}
								</option>
								@endfor
						</select>
					</div>
					<div>{{ number_format($item->getPriceSum()) }}</div>
				</div>
			</div> <!-- end cart-table-row -->
			@endforeach
		</div> <!-- end cart-table -->
		<a href="#" class="have-code">Have a Code?</a>

		<div class="have-code-container">
			<form action="#" method="POST">
				{{ csrf_field() }}
				<input type="text" name="coupon_code" id="coupon_code">
				<button type="submit" class="button button-plain">Apply</button>
			</form>
		</div> <!-- end have-code-container -->
		​<div class="cart-totals">
			<div class="cart-totals-left">
				Shipping is free within Nairobi.Grab as more Products as you can.
			</div>

			<div class="cart-totals-right">
				<div>
					Subtotal <br>
					@if (session()->has('coupon'))
					Code ({{ session()->get('coupon')['name'] }})
					<form action="{{ route('coupon.destroy') }}" method="POST" style="display:block">
						{{ csrf_field() }}
						{{ method_field('delete') }}
						<button type="submit" style="font-size:14px;">Remove</button>
					</form>
					<hr>
					New Subtotal <br>
					@endif

					<span class="cart-totals-total">Total</span>
				</div>

				<div class="cart-totals-subtotal">
					{{ number_format(Cart::getTotal()) }} <br>
					@if (session()->has('coupon'))
					-{{ number_format($discount) }} <br>&nbsp;<br>
					<hr>
					{{ number_format($newSubtotal) }} <br>
					@endif
					<span class="cart-totals-total">{{ number_format(Cart::getTotal()) }}</span>
				</div>

			</div>
		</div> <!-- end cart-totals -->

		<div class="cart-buttons">
			<a href="{{ route('shop.index') }}" class="button">Continue Shopping</a>
			<a href="#" class="button-primary">Proceed to Checkout</a>
		</div>
		@else
		<h2>
			<center>No items in the cart ! !</center>
		</h2>
		<section class="section-last-posts">
			<div class="text-center mt-lg-4">
				<a href="{{ route('shop.index') }}" class="btn btn-outline-primary btn-lg">Start Shopping</a>
			</div>
		</section>
		@endif
	</div>
</div>


@endsection

@section('extra-js')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        (function(){
            const classname = document.querySelectorAll('.quantity')

            Array.from(classname).forEach(function(element) {
                element.addEventListener('change', function() {
                    const id = element.getAttribute('data-id')
                    const productQuantity = element.getAttribute('data-productQuantity')
				alert(id);

                    axios.patch(`/cart/${id}`, {
                        qty1: this.value,
						productQuantity: productQuantity,
						
                    })
                    .then(function (response) {
                        // console.log(response);
                        window.location.href = '{{ route('cart.index') }}'
                    })
                    .catch(function (error) {
                        // console.log(error);
                        //  window.location.href = '{{ route('cart.index') }}'
                    });
                })
            })
        })();
    </script>
@endsection