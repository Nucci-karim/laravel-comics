<?php
$menu = [
    [
        'url' => '/home',
        'name' => 'Home',
        'current' => false
    ],
    [
        'url' => '/',
        'name' => 'characters',
        'current' => false
    ],
    [
        'url' => '/',
        'name' => 'comics',
        'current' => false
    ],
    [
        'url' => '/',
        'name' => 'movies',
        'current' => false
    ],
    [
        'url' => '/',
        'name' => 'tv',
        'current' => false
    ],
    [
        'url' => '/',
        'name' => 'games',
        'current' => false
    ],
    [
        'url' => '/',
        'name' => 'Videos',
        'current' => false
    ],
    [
        'url' => '/',
        'name' => 'Fans',
        'current' => false
    ],
    [
        'url' => '/',
        'name' => 'News',
        'current' => false
    ],
    [
        'url' => '/',
        'name' => 'Shop',
        'current' => false
    ],
    
]


?>


<header>
    <!-- navbar -->
    <nav class="container">
        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="logo-small">
        <ul>
          @foreach($menu as $elem)
          <li class="">
            <a href="{{ $elem['url'] }}">{{$elem['name']}}</a>
          </li>
          @endforeach
        </ul>
    </nav>
</header>