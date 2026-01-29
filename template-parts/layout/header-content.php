<header id="masthead"
        class="absolute top-0 left-0 w-full h-[128px] z-[9999] flex items-center pointer-events-auto">

  <div class="w-full flex items-center justify-end px-6 lg:relative lg:right-[50px]">

    <!-- Desktop Menu -->
    <nav id="site-navigation"
         aria-label="Main Navigation"
         class="hidden lg:block">

      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'menu'           => 'Main Menu',
        'menu_id'        => 'primary-menu',
        'menu_class' => 'flex items-center gap-8 text-white',
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
