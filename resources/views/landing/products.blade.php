@extends('landing.layouts.app')
@section('title', 'Products')

@section('content')
<div class="page-wrap">
  <div class="page-content">
    <main class="main-content">
      <section class="home-slider">
        <div id="hero-slider" class="hero-slider slider js-hero-slider">
          <div class="slider-item" style="background-image: url('app-assets/images/bg1.jpg'); ">
            <div class="container">
              <div class="slider-item-inner">
                <h1 class="hero-slider__title">Discover design things</h1>
                <div class="hero-slider__text">a truly aesthetic theme for selling</div>
                <div class="hero-slider__btn">
                  <a href="shop.html" class=" btn btn-primary btn-lg">shop now</a>
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
                <div class="icon-box__title">Delivery to all regions</div>
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

      <section class="section-offers">
        <div class="container">
          <h2 class="screen-reader-text">Offers</h2>
          <div class="row">
            <div class="col-md-7">
              <div class="offer-box">
                <img class="offer-box__bg" src="app-assets/images/01_home_page_002.jpg" alt="">
                <div class="offer-box__body">
                  <div class="offer-box__title">S1 table</div>
                  <a href="single-product.html" class="btn btn-outline-dark btn-lg">buy $29.99</a>
                </div>
              </div>
            </div>

            <div class="col-md-5">
              <a href="shop.html" class="offer-box offer-box-sm">
                <img class="offer-box__bg" src="app-assets/images/01_home_page_003.jpg" alt="">
                <div class="offer-box__body">
                  <div class="offer-box__title">
                    <span class="offer-percent">50%</span>
                    sale
                  </div>
                </div>
              </a>
              <a href="shop.html" class="offer-box offer-box-sm">
                <img class="offer-box__bg" src="app-assets/images/01_home_page_004.jpg" alt="">
                <div class="offer-box__body">
                  <div class="offer-box__title">Airshelf</div>
                </div>
              </a>
            </div>
          </div> <!-- end of featured -->
        </div>
      </section>

      <section class="section-featured-products">
        <div class="container">
          <div class="section-title text-center">
            <h2 class="h3 section-title__heading">Products</h2>
          </div>
          <ul class="products featured-products columns-4">
            @foreach($products as $product)
            <li class="product">
                <div class="product-thumb">
                  <a href="{{ route('shop.show', $product->slug) }}" class="product-thumb__link">
                  <img src="{{ productImage($product->image) }}" alt="product">
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
        <div class="container">
          <div class="section-title text-center">
            <h2 class="h3 section-title__heading">From the blog</h2>
          </div>

          <div class="post-grid row">
            <div class="col-lg-4 col-md-6">
              <article class="post-item">
                <a href="single-post.html" class="post-thumb">
                  <img src="app-assets/images/01_home_page_009.jpg" alt="">
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
                  <img src="app-assets/images/01_home_page_010.jpg" alt="">
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
                  <img src="app-assets/images/01_home_page_011.jpg" alt="">
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

@endsection

