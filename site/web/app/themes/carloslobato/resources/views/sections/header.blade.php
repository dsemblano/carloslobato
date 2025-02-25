<script type="text/javascript">
  $( document ).ready(function() {
  $('.menu-item-has-children').on('click', function(){

  if ($('.menu-item-has-children').hasClass('open')) {
     $(this).removeClass('open');
   } else {
      $(this).addClass('open');
   }
  });  
});
</script>

<header class="banner font-rutanmedium bg-white fixed top-0 w-full z-50">
  <nav class="nav-primary container py-2 px-4 lg:px-16">
    <div class="flex flex-wrap lg:flex-nowrap justify-between items-center mx-auto">
      <a class="brand flex items-center" href="{{ home_url('/') }}">
        {{-- {!! $siteName !!} --}}
        <img width="190" height="117" alt="Logo Carlos Lobato Deputado Estadual número 90000" src="@asset('images/logo.png')" />
      </a>
    <div id="busca" class="flex lg:order-2 ml-8">
      <button type="button" data-collapse-toggle="mobile-menu-3" aria-controls="mobile-menu-3" aria-expanded="false" class="lg:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-lg p-2.5 mr-1" >
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
      </button>
      <div class="hidden relative lg:block">
        @include('partials/inputsearch')
      </div>
      <button data-collapse-toggle="mobile-menu-3" type="button" class="inline-flex items-center p-2 text-lg text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-3" aria-expanded="false">
      <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      <svg class="hidden w-10 h-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </div>
      <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-3">
        <div class="relative mt-3 lg:hidden">
          @include('partials/inputsearch')
        </div>
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex flex-col mt-4 lg:flex-row lg:space-x-8 lg:mt-0 lg:text-sm', 'echo' => false]) !!}
      </div>
    </div>
  </nav>
</header>
