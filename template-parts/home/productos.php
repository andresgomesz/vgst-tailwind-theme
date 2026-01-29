<?php
// template-parts/home/productos.php

$args = [
    'post_type'      => 'producto',
    'posts_per_page' => 6,
    'post_status'    => 'publish',
];

$query = new WP_Query($args);
?>

<section class="w-full bg-[#F5F8F9] py-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="text-center mb-10">
  <h2
    class="font-bold
           text-[28px] sm:text-[32px] lg:text-[36px]
           leading-[1.4] lg:leading-[57.6px]"
  >
    <span class="text-[#9FCE00]">PANEL SÁNDWICH</span>
    <span class="text-[#3E509D]"> para tu proyecto</span>
  </h2>
</div>

        <?php if ($query->have_posts()) : ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    
                    <!-- Card producto -->
                    <article class="bg-white w-full max-w-[424px] h-[547px] mx-auto flex flex-col
                                    rounded-lg
                                    shadow-[0_4px_12px_rgba(0,0,0,0.10)]
                                    hover:shadow-[0_8px_20px_rgba(0,0,0,0.12)]
                                    transition-shadow duration-300">

                        <!-- Imagen -->
                        <div class="w-full h-[272px] overflow-hidden bg-gray-300">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(
                                    'large',
                                    [
                                        'class' => 'w-full h-full object-cover',
                                    ]
                                ); ?>
                            <?php else : ?>
                                <!-- Placeholder si no hay imagen -->
                                <div class="w-full h-full bg-gray-400"></div>
                            <?php endif; ?>
                        </div>

                        <!-- Contenido -->
                        <div class="flex flex-col flex-grow px-6 pt-6 pb-8 text-center">

                            <!-- Título -->
                            <h3 class="text-[#3E509D] text-[24px] leading-[30px] font-bold mb-4">
                                <?php the_title(); ?>
                            </h3>

                            <!-- Descripción (3 líneas) -->
                            <p class="text-[#4F5665] text-[15px] leading-[24px] mb-6 line-clamp-3">
                                <?php echo get_the_excerpt(); ?>
                            </p>

                            <!-- Botón -->
                            <div class="mt-auto">
                                <a href="<?php the_permalink(); ?>"
                                   class="inline-flex items-center justify-center
                                          w-[123px] h-[48px]
                                          bg-[#9FCE00] text-white font-bold text-[16px]
                                          rounded-[40px]
                                          hover:bg-[#3E509D] transition-colors duration-300">
                                    LEER MÁS
                                </a>
                            </div>

                        </div>

                    </article>

                <?php endwhile; ?>

            </div>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

    </div>
</section>
