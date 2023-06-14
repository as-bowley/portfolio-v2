{{--
Template Name: Contact Template
--}}

@extends('layouts.app')

@php
$post = get_post();
@endphp

@section('content')
<section class="my-8 md:my-24 mx-8 md:mx-20 text-white" data-barba="container" data-barba-namespace="{{$post->post_name}}">
  <div class="flex flex-col items-center">
    <h2 class="text-5xl font-sans">Contact</h2>
  </div>
</section>
@endsection