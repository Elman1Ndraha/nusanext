@extends('components.layout')

@section('title', 'nusanext')

@section('content')
<!-- Include sections based on request -->
@include('pages.home')
@include('pages.about')
@include('pages.portfolio')
@include('pages.bootcamp')
@include('pages.kursus')
@include('pages.testimonial')
@include('pages.contact')
@endsection