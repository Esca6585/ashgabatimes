@extends('layouts.news-template')

@section('title')
    {{ $news->title }}
@endsection

@section('single-news')
    @include('front-end.single-news')
@endsection

@section('footer')
    @include('front-end.footer')
@endsection

