<article @php(post_class('buscateste'))>
  <header>
    <h2 class="entry-title">
      <a href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h2>

    @includeWhen(get_post_type() === 'post', 'partials.entry-meta')
  </header>

  <div class="entry-summary">
    <figure class="thumbnail">
      <a href="{{ get_permalink() }}">
      @if ( has_post_thumbnail() )
        {{ the_post_thumbnail('post-thumbnail', ['class' => 'lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72  rounded w-full object-cover object-center mb-6', 'title' => 'Feature image']); }}
        @else
        <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72  rounded w-full object-cover object-center mb-6" src="@asset('images/default.png')"  alt="{!! $title !!}">
      @endif
      </a>
    </figure>
    @php(the_excerpt())
  </div>
</article>
