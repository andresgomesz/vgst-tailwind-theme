<header id="masthead"
        class="absolute top-0 left-0 w-full h-[128px] z-50 flex items-center">

  <div class="container mx-auto px-6 flex items-center justify-end">

    <!-- Desktop Menu -->
    <nav id="site-navigation"
         aria-label="Main Navigation"
         class="hidden lg:block">

      <?php
      wp_nav_menu([
        'theme_location' => 'primary', // tu ubicación 'primary'
        'menu'           => 'Main Menu', // nombre del menú
        'menu_id'        => 'primary-menu',
        'menu_class'     => 'flex items-center gap-8',
        'container'      => false,
      ]);
      ?>

    </nav>

    <!-- Botón Mobile -->
    <button id="menu-toggle"
            class="lg:hidden text-white ml-auto text-2xl"
            aria-label="Abrir menú">
      ☰
    </button>

  </div>
</header>

<!-- Mobile Menu -->
<div id="mobile-menu"
     class="fixed inset-0 bg-[#1A2862] z-40 hidden flex-col items-center justify-center space-y-6">

  <?php
  wp_nav_menu([
    'theme_location' => 'primary',
    'menu'           => 'Main Menu',
    'menu_class'     => 'flex flex-col items-center gap-6 text-white text-xl font-semibold',
    'container'      => false,
  ]);
  ?>

</div>
