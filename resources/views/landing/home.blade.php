@extends('landing.layouts.app')
@section('title', 'Home')
@section('content')
<div id="app">
<div class="page-wrap">
  <div class="page-content">
    <main class="main-content">
      <section class="home-slider">
        <div id="hero-slider" class="hero-slider slider js-hero-slider">
          <div class="slider-item" style="background-image: url('app-assets/images/10.jpg'); ">
            <div class="container">
              <div class="slider-item-inner">
                <h1 class="hero-slider__title"></h1>
                <div class="hero-slider__text"></div>
                <div class="hero-slider__btn">
                  <a href="{{ route('shop.index') }}" class=" btn btn-primary btn-lg">shop now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-item" style="background-image: url('app-assets/images/16.jpg'); ">
            <div class="container">
              <div class="slider-item-inner">
                <div class="h1 hero-slider__title"></div>
                <div class="hero-slider__text"></div>
                <div class="hero-slider__btn">
                  <a href="{{ route('shop.index') }}" class=" btn btn-primary btn-lg">shop now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-featured-icons">
        <div class="container">
          <h2 class="screen-reader-text">Our features</h2>
          <div class="row">
            <div class="col-lg-4">
              <div class="icon-box icon-box-left icon-box-circle justify-content-sm-center">
                <div class="icon-box__icon"><i class="flaticon flaticon-delivery-truck"></i></div>
                <div class="icon-box__title">Delivery to all regions.</div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="icon-box icon-box-left icon-box-circle justify-content-sm-center">
                <div class="icon-box__icon"><i class="flaticon flaticon-sales-ticket"></i></div>
                <div class="icon-box__title">Don't miss this great deal!</div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="icon-box icon-box-left icon-box-circle justify-content-sm-center">
                <div class="icon-box__icon"><i class="flaticon flaticon-thumb-up-gesture"></i></div>
                <div class="icon-box__title">The highest quality of products</div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="section-featured-products">
        <div class="container">
          <div class="section-title text-center">
            <h2 class="h3 section-title__heading">Featured</h2>
          </div>
          <ul class="products featured-products columns-4">
            @foreach($products as $product)
            <li class="product">
                <div class="product-thumb">
                  <a href="{{ route('shop.show', $product->slug) }}" class="product-thumb__link">
                    <img src="{{ productImage($product->image) }}" alt="">
                    <span class="btn btn-outline-light shop-link">Shop</span>
                  </a>
                </div>
                <div class="product-title"><a href="{{ route('shop.show', $product->slug) }}">{{$product->name}}</a></div>
                <div class="price">
                  <span class="amount">{{ $product->presentPrice() }}</span>
                </div>
              </li>
                @endforeach

          </ul>
        </div>
      </section>

      <section class="section-last-posts">
          <div class="text-center mt-lg-4">
            <a href="{{ route('shop.index') }}" class="btn btn-outline-primary btn-lg">View More Products</a>
          </div>
      </section>

      <section class="section-subscribe">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="section-title section-title-w-text text-center">
                <h2 class="h3 section-title__heading">Newsletter subscription</h2>
                <div class="section-title__text">Newest products, promotions and sales</div>
              </div>

              <form class="subscribe-form form-inline justify-content-center">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg subscribe-form__input" placeholder="E-mail adress">
                </div>
                <button type="submit" class="btn btn-primary btn-lg subscribe-form__btn">subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main> <!-- end of main -->
  </div>
</div>

<example-component></example-component>
</div>
<script src="js/app.js"></script>
@endsection
