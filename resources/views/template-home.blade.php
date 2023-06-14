{{--
Template Name: Home Template
--}}

@extends('layouts.app')

@php
$post = get_post();
@endphp

@section('content')
<section class="my-8 md:my-24 mx-8 md:mx-20" data-barba="container" data-barba-namespace="{{$post->post_name}}">
  <div class="flex flex-col items-center barba-wrapper">
    <div class="md:max-w-screen-md text-center mx-auto">
      <p class="hero-secondary-text text-lg md:text-2xl">Responsive . Innovative . Collaborative</p>
      <h2 class="hero-title text-4xl md:text-7xl mt-4 p-1">Transforming ideas into digital reality.</h2>
      <div class="md:max-w-[500px] mx-auto">
        <p class="md:text-xl text-text-secondary mt-6 font-sans font-medium">Hi, I'm Alex, a Web Developer from Germany. Creating modern, user-friendly
          websites is my passion. Let's bring innovative digital experiences to life.</p>
          <div class="grid grid-cols-2 justify-center gap-10 mt-8 md:max-w-[400px] mx-auto">
            <a href="#" class="bg-accent-primary p-3 md:py-3 md:px-8 font-semibold rounded">View Projects</a>
            <a href="#" class="border-2 border-accent-primary p-3 md:py-3 md:px-8 text-text-secondary font-semibold rounded">Contact</a>
          </div>
      </div>
    </div>
  </div>
</section>
@endsection
