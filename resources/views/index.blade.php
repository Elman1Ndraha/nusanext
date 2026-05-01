@extends('components.layout')

@section('title', 'nusaNext')

@section('content')
<!-- Include semua sections -->
@include('pages.home')
@include('pages.about')
@include('pages.portfolio')
@include('pages.testimonial')
@include('pages.contact')
@endsection