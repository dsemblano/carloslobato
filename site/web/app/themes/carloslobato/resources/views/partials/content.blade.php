<article @php(post_class('article-posts xl:w-1/3 md:w-1/2 p-4'))>
  <div class="bg-white p-6 rounded-lg">
    <figure class="thumbnail">
      <a href="{{ get_permalink() }}">
      @if ( has_post_thumbnail() )
        {{ the_post_thumbnail('post-thumbnail', ['class' => 'lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72  rounded w-full object-cover object-center mb-6', 'title' => 'Feature image']); }}
        @else
        <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72  rounded w-full object-cover object-center mb-6" src="@asset('images/default.png')"  alt="{!! $title !!}">
      @endif
      </a>
    </figure>
      <header>
        <h2 class="tracking-widest text-indigo-500 text-xs font-medium title-font">
          <a href="{{ get_permalink() }}">
            {!! $title !!}
          </a>
        </h2>
    
      @include('partials.entry-meta')
      </header>
    
      <div class="leading-relaxed text-base">
        @php(the_excerpt())
      </div>
  </div>
</article>

<div class="xl:w-1/3 md:w-1/2 p-4">
  <div class="bg-white p-6 rounded-lg">
    <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72  rounded w-full object-cover object-center mb-6" src="https://kuyou.id/content/images/ctc_2020021605150668915.jpg" alt="Image Size 720x400">
    <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3>
    <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Chichen Itza</h2>
    <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
  </div>
</div>
 