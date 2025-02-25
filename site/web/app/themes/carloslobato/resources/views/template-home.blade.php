{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
    @include('partials/home.section1')
    {{-- @include('partials/home.section2') --}}
    {{-- {!! do_shortcode('[wdi_feed id="1"]') !!} --}}
    @include('partials/snippets.dias')
    @include('partials/home.lobatovideo')
    {{-- <section class="container px-8 lg:px-16">
      @include('partials/snippets.figurinhas')
    </section> --}}
    <section id="instagram">
      {!! do_shortcode('[instagram-feed feed=1 class="container px-8 lg:px-16"]') !!}
    </section>
    {{-- {!! do_shortcode('[contact-form-7 id="20" title="Formulario"]') !!} --}}
@endsection
