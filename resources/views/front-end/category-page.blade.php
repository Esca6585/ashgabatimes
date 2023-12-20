@extends('layouts.news-template')

@section('title')
    {{ $category_name }}
@endsection

@section('container-content')
    @include('front-end.container-content-2')
@endsection

@section('footer')
    @include('front-end.footer')
@endsection

