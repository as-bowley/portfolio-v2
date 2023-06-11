{{--
Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
<section class="flex flex-col items-center my-28">
  <div class="max-w-screen-md text-center mx-auto">
    <p class="hero-secondary-text text-2xl">Responsive . Innovative . Collaborative</p>
    <h2 class="hero-title text-7xl mt-4 p-1">Transforming ideas into digital reality.</h2>
    <div class="max-w-screen-sm mx-auto">
      <p class="text-2xl text-text-secondary mt-6 font-sans font-medium">Hi, I'm Alex, a Web Developer from Germany. Creating modern, user-friendly
        websites is my passion. Let's bring innovative digital experiences to life.</p>
      <div class="flex justify-center gap-10 mt-8">
        <a href="#" class="bg-accent-primary py-3 px-8 font-semibold rounded">View Projects</a>
        <a href="#" class="border border-accent-primary py-3 px-8 text-text-secondary font-semibold rounded">Contact</a>
      </div>
    </div>
  </div>
</section>
@endsection