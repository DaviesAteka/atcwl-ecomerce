
    <ul class="nav justify-content-center">
    
        @foreach ($items as $menu_footer)
        <li class="nav-item">
            <a class="nav-link" href="{{ $menu_footer->link() }}">{{ $menu_footer->title }}</a>
        </li>
        @endforeach
    </ul>