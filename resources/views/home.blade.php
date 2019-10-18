@extends('layouts.landing')

@section('title', 'Home')

@section('styles')
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/landing.css') }}">
@endsection

@section('scripts')
    <script src=" {{ mix('js/landing.js') }}"></script>
@endsection
    