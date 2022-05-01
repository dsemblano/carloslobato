<header class="banner container mx-auto w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 lg:bg-transparent text-black p-4 lg:p-0 z-20 bg-gray-100">
  <a class="brand" href="{{ home_url('/') }}">
    {{-- {!! $siteName !!} --}}
    <img src="@asset('images/logo.webp')" />
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav list-reset lg:flex justify-end flex-1 items-center', 'echo' => false]) !!}
    </nav>
  @endif
</header>
