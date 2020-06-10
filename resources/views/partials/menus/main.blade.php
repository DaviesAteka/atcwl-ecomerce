<ul class="nav justify-content-center">
 @foreach ($items as $menu_item)
        
    <li class="nav-item">
        <a class="nav-link active" href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
    </li>
    @endforeach
    
</ul>