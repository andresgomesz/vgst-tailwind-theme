<header id="masthead" class="relative z-[9999] w-full pointer-events-auto">

  <!-- Top Bar -->
  <div id="top-bar" class="w-full h-[70px] bg-[#9FCE00] flex items-center">
    <div class="container mx-auto px-6 flex justify-between items-center">
      <!-- Izquierda: Email -->
      <div class="flex items-center gap-2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/email.svg" alt="Email Icon" class="w-5 h-5">
        <span class="text-white text-[14px] font-medium">dominio@dominio.es</span>
      </div>
      <!-- Derecha: Botón Teléfono -->
      <a href="tel:123456789" class="flex items-center gap-2 bg-white text-[#1A2862] font-semibold text-[14px] px-4 py-2 rounded-[30px] w-[152px] h-[45px] justify-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/phone.svg" alt="Phone Icon" class="w-5 h-5">
        <span>123 456 789</span>
      </a>
    </div>
  </div>

  <!-- Menú Desktop y Mobile -->
  <div class="absolute top-[70px] left-0 w-full flex items-center justify-end px-6 h-[128px]">

    <!-- Desktop Menu -->
    <nav id="site-navigation" class="hidden lg:block w-full relative lg:right-[50px]">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'menu'           => 'Main Menu',
        'menu_id'        => 'primary-menu',
        'menu_class'     => 'flex items-center gap-8 text-white justify-end',
        'container'      => false,
      ]);
      ?>
    </nav>

    <!-- Botón Mobile -->
    <button id="menu-toggle" class="lg:hidden text-white ml-auto text-2xl z-[999]" aria-label="Abrir menú">
      ☰
    </button>

    <!-- Menú Mobile -->
    <!--<div id="mobile-menu" class="fixed inset-0 bg-[#1A2862] z-[99] hidden flex-col items-center pt-[125px] space-y-6 lg:hidden">-->
    <div id="mobile-menu" class="absolute inset-0 z-[99] hidden flex-col items-center space-y-6 lg:hidden">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'menu'           => 'Main Menu',
        'menu_class'     => 'flex flex-col items-center gap-6 text-white bg-[#1A2862] w-full py-[50px]',
        'container'      => false,
      ]);
      ?>
    </div>

  </div>
</header>
