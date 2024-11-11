@extends('layouts.alvarezApp')

<!-- broswer title -->
@section('broswerTitle', 'Sports Betting | Landing')

<!-- broswer icon -->
@section('favicon')
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
@endsection

<!-- add css files -->
@section('addCssFiles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="/styles/basic.css">
    <link rel="stylesheet" href="/styles/landing.css">
@endsection

<!-- main content -->

@section('mainContent')
    <section class="navbar navbar-shadow flex-row">
        @include('welcomeSections.navbar')
    </section>
    <section class="section1">
        @include('welcomeSections.section1')
    </section>
    <section class="section2">
        @include('welcomeSections.section2')
    </section>
    <section class="section3">
        @include('welcomeSections.section3')
    </section>
    <section class="section4">
        @include('welcomeSections.section4')
    </section>
    <section class="section5">
        @include('welcomeSections.section5')
    </section>
    <section class="section6">
        @include('welcomeSections.section6')
    </section>

@endsection

<!-- javascript files -->

@section('addJsFiles')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="/scripts/landing.js"></script>

@endsection

