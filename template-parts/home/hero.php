<?php
    /**
     * Hero file, donde imprimimos la primera seccion de slides.
     * Obtenemos slides, si es que los hay.
     */

    $slides = function_exists('vgst_get_home_slider')
    ? vgst_get_home_slider()
    : [];

    if (empty($slides) && function_exists('vgst_get_home_slider_demo')) {
        $slides = vgst_get_home_slider_demo();
    }

?>

<section class="relative w-full min-h-screen h-screen overflow-hidden">

  <!-- Slider track -->
  <div id="hero-slider-track" class="flex h-full transition-transform duration-700 ease-in-out">

    <?php foreach ($slides as $slide): ?>
      <div class="relative w-full h-full flex-shrink-0">

        <!-- Imagen de fondo -->
        <?php if (!empty($slide['image'])) : ?>
          <img
            src="<?php echo esc_url($slide['image']); ?>"
            alt="<?php echo esc_attr($slide['title'] ?? ''); ?>"
            class="absolute inset-0 w-full h-full object-cover"
          >
        <?php endif; ?>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b
                    from-[#1A2862]/80 to-[#3552C8]/80"></div>

        <!-- Contenido -->
        <div class="relative z-10 h-full flex items-center justify-center">
          <div class="text-center px-4 max-w-5xl">

            <!-- TÍTULO BLANCO -->
            <?php if (!empty($slide['title'])): ?>
              <h1 class="text-white font-semibold
                        text-[28px] sm:text-[36px] lg:text-[48px]
                        leading-[38px] sm:leading-[52px] lg:leading-[85px]
                        tracking-[-1px]">
                <?php echo esc_html($slide['title']); ?>
              </h1>
            <?php endif; ?>

            <!-- TEXTO VERDE -->
            <?php if (!empty($slide['text'])): ?>
            <div class="relative mt-2 flex justify-center">
              <div class="relative inline-block">
                <p class="text-[#9FCE00] font-semibold
                          text-[32px] sm:text-[44px] lg:text-[64px]
                          leading-[42px] sm:leading-[56px] lg:leading-[85px]
                          tracking-[-1px]">
                  <?php echo esc_html($slide['text']); ?>
                </p>

                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/ui/subrayadowhite.png"
                  alt=""
                  class="absolute right-0 -bottom-2"
                >
              </div>
            </div>
          <?php endif; ?>

            <!-- BOTÓN -->
            <?php if (!empty($slide['link'])): ?>
              <div class="mt-16 flex justify-center">
                <a
                  href="<?php echo esc_url($slide['link']); ?>"
                  class="inline-flex items-center justify-center
                        w-[319px] h-[48px]
                        rounded-full
                        bg-white
                        border-2 border-[#9FCE00]
                        text-[#3E509D]
                        font-bold text-[18px]
                        leading-[24px]
                        tracking-[0.5px]
                        transition hover:bg-[#9FCE00] hover:text-white">
                  Contacta con nosotros
                </a>
              </div>
            <?php endif; ?>

          </div>
        </div>

      </div>
    <?php endforeach; ?>

  </div>

  <!-- Flecha izquierda -->
  <button id="hero-prev"
          class="cursor-pointer absolute top-1/2 -translate-y-1/2
                  left-2 sm:left-6 lg:left-[5%]
                  w-[58px] h-[58px]
                  rounded-full
                  bg-[#9FCE00]
                  flex items-center justify-center
                  text-white
                  transition hover:opacity-90
                  z-20"
            aria-label="Slide anterior">
    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"/>
    </svg>
  </button>

  <!-- Flecha derecha -->
  <button id="hero-next"
          class="cursor-pointer absolute top-1/2 -translate-y-1/2
                  right-2 sm:right-6 lg:right-[5%]
                  w-[58px] h-[58px]
                  rounded-full
                  bg-[#9FCE00]
                  flex items-center justify-center
                  text-white
                  transition hover:opacity-90
                  z-20"
            aria-label="Slide siguiente">
    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"/>
    </svg>
  </button>

</section>
