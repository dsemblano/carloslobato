<article @php(post_class('article-posts'))>
  <figure class="thumbnail">
    @if ( has_post_thumbnail() )
      {{ the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full w-full object-cover object-center rounded-lg shadow-md', 'title' => 'Feature image']); }}
      @else
      <img class="img-responsive responsive--full w-full object-cover object-center rounded-lg shadow-md" src="@asset('images/default.png')"  alt="{!! $title !!}">
    @endif
  </figure>
    <header>
      <h2 class="entry-title mt-1 text-xl font-semibold uppercase leading-tight truncate">
        <a href="{{ get_permalink() }}">
          {!! $title !!}
        </a>
      </h2>
  
    @include('partials.entry-meta')
    </header>
  
    <div class="entry-summary">
      @php(the_excerpt())
    </div>
  
</article>

 