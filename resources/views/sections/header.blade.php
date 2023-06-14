<header class="banner grid grid-cols-3 items-center px-20 py-4">
  <h1 class="text-accent-primary text-2xl font-sans font-black">A<span class="text-white">lex </span>B<span class="text-white">owley</span></h1>
 @if (has_nav_menu('primary_navigation'))
  <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
    {!! wp_nav_menu([
      'theme_location' => 'primary_navigation',
      'menu_class' => 'nav flex justify-center gap-8 text-text-primary font-semibold',
      'walker' => new Barba_Walker_Nav_Menu(),
      'echo' => false,
      'items_wrap' => '<ul id="%1$s" class="%2$s" data-transition="scale">%3$s</ul>', // Add data-transition attribute
    ]) !!}
  </nav>

  @endif
  <div class="flex justify-end">
    <a href="/contact" class="inline-flex items-center bg-accent-primary py-2 px-4 rounded text-bg-primary justify-end font-semibold">Get in touch <span class="material-symbols-outlined text-lg ml-1 font-semibold">
  east
  </span></a>
  </div>
</header>
