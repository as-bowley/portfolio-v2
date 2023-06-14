<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

<div id="loader" class="absolute inset-0 bg-white flex items-center justify-center text-2xl" style="display: none;">
  Loading...
</div>

<div class="home-bg"></div>

@include('sections.header')

<main id="main">
  @yield('content')
</main>

@hasSection('sidebar')
  <aside class="sidebar">
    @yield('sidebar')
  </aside>
@endif

@include('sections.footer')
