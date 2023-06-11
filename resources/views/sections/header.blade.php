<header class="banner grid grid-cols-3 items-center px-20 py-4">
  <h1 class="text-accent-primary text-2xl">Alex Bowley</h1>
  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav text-lg flex justify-center gap-8 text-text-primary', 'echo' => false]) !!}
    </nav>
  @endif
  <div class="flex justify-end">
    <a href="#" class="inline-flex items-center bg-accent-primary py-2 px-4 rounded text-bg-primary justify-end">Get in touch <span class="material-symbols-outlined text-lg ml-1">
  east
  </span></a>
  </div>
</header>
