{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
    @include('partials/home.section1')
    {!! do_shortcode('[wdi_feed id="1"]') !!}
@endsection
