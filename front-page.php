<?php
/**
 * Front Page
 */
    get_header();
?>

<main id="primary" class="site-main">

  <?php
  // 1. HERO / SLIDER
    get_template_part('template-parts/home/hero');
  ?>

  <?php
  // 2. BENEFICIOS
    get_template_part('template-parts/home/benefits');
  ?>

  <?php
  // 3. PRODUCTOS
    get_template_part('template-parts/home/productos');
  ?>

  <?php
  // 4. CTA PRESUPUESTO
    get_template_part('template-parts/home/cta-presupuesto');
  ?>

  <?php
  // 5. SECCIÓN INSTITUCIONAL
    get_template_part('template-parts/home/institucional');
  ?>

  <?php
  // 6. RESEÑAS
    get_template_part('template-parts/home/resenas');
  ?>

  <?php
  // 7. CTA FINAL
    get_template_part('template-parts/home/cta-final');
  ?>
</main>

<?php get_footer(); ?>
