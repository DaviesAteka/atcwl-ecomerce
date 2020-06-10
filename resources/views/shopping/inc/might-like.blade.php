<div class="hun-section-products layout-slider js-call-magnificpopup hide-link-view-all outer-hun-element-product--type-1 price-color ratio-img-3-4 show-space-bottom">
  <div class="inner-section">
    <div class="container">
      <div class="heading-section">
        <h3 class="title-sec">
          Related Products
        </h3>
      </div>
      <div class="slide-section js-call-slick">


        <div class="slide-slick" data-slick='{"dots": false, "arrows": true, "autoplay": false, "infinite": false, "slidesToShow": 4, "slidesToScroll": 4, "responsive": [{"breakpoint": 1199, "settings": {"slidesToShow": 3, "slidesToScroll": 3}}, {"breakpoint": 991, "settings": {"slidesToShow": 2, "slidesToScroll": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1, "slidesToScroll": 1}}, {"breakpoint": 575, "settings": {"slidesToShow": 1, "slidesToScroll": 1}}]}'>

          <div class="item-slick">

            <div class="hun-element-product--type-1">
@foreach ($mightAlsoLike as $product)
              <a href="detail-product1.html" class="pic-product">
                <span class="gallery-product">
                  <span class="item-gal">
                    <span class="image-gal" style="background-image: url({{ productImage($product->image) }});"></span>
                  </span>

                 
                </span>
              </a>

              <div class="text-product">
                <h6 class="name-product set-color">
                  <a href="detail-product1.html">
              {{$product->name}}
                  </a>
                </h6>

                <div class="price-product set-color">
                  <span class="new-price">
                    {{ $product->presentPrice() }}
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
              @endforeach
            </div>

            </div>
            <div class="arrows-slick">
              <a class="item-arrow prev-slick set-color"></a>
              <a href="#" class="link-view-all set-color">View All Products</a>
              <a class="item-arrow next-slick set-color"></a>
            </div>
    </div>

  </div>
</div>
</div>
</div>
<!-- end Products -->



      </div>
    </div>
  </div>
</div>
