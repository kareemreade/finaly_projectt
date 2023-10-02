
@extends('sit1.master')
@section('title')
Home||sit1
@stop
@section('Home')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>{{ $home->title }}</h1>
      <p>I'm <span class="typed" data-typed-items="{{ $home->experiences }}"></span></p>
    </div>
  </section><!-- End Hero -->

@stop
