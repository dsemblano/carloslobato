{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
    @include('partials/home.section1')
    {{-- {!! do_shortcode('[wdi_feed id="1"]') !!} --}}
    @include('partials/home.lobatovideo')
    {!! do_shortcode('[instagram-feed feed=1 class=container]') !!}
    {{-- {!! do_shortcode('[contact-form-7 id="20" title="Formulario"]') !!} --}}
@endsection
