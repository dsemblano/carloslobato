@extends('layouts.app')

@section('content')


  @while(have_posts()) @php(the_post())
    @include('partials/home.section1')
    @include('partials/home.section2')
  @endwhile
@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection
