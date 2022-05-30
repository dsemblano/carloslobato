@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  <div class="flex flex-wrap -m-4">

  @while(have_posts()) @php(the_post())
    @include('partials.content-search')
  @endwhile

  </div>

  {!! get_the_posts_navigation() !!}
@endsection
