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
        class="lg:hidden fixed top-6 right-6 text-white text-3xl z-[10000]"
        aria-label="Abrir/Cerrar menú">
	☰
	</button>

  </div>
</header>

<!-- Menú Mobile (fuera del div flex para evitar conflicto de z-index) -->
<div id="mobile-menu"
     class="fixed inset-0 bg-[#1A2862] z-[99] hidden flex-col items-center pt-[100px] space-y-6 lg:hidden">

  <?php
	wp_nav_menu([
		'theme_location' => 'primary',
		'menu'           => 'Main Menu',  // <--- igual que desktop
		'menu_class'     => 'flex flex-col items-center gap-6 text-white',
		'container'      => false,
	]);
  ?>

</div>
