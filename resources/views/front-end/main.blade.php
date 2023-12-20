@extends('layouts.news-template')

@section('title')
    {{ __('Dashboard') }}
@endsection

@section('item-header')
    @include('front-end.item-header')
@endsection

@section('container-content')
    @include('front-end.container-content')
@endsection

@section('footer')
    @include('front-end.footer')
@endsection

