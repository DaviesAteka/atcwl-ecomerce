<div class="shop-categories-nav">
  <div class="container">
    <ul class="nav justify-content-between">
      @foreach($categories as $category)
      <li class="{{ request()->category == $category->slug ? 'active' : ''}}"><a
          href="{{ route('shop.index', ['category' => $category->slug]) }}" class="nav-link">{{ $category->name }}</a>
      </li>
      @endforeach
      <li>
    </ul>
  </div>
</div>


