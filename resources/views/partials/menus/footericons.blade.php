<ul class="social-links ml-md-3">
    @foreach ($items as $menu_item)
        
    <li class="nav-item">
        <li><a href="{{ $menu_item->link() }}"><i class="{{ $menu_item->title }}"></i></a>
    </li>
    @endforeach
</ul>



         