<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

get_header();
?>

	<section id="primary">
		<main id="main">

		<div class="bg-white shadow-lg rounded-xl p-6 max-w-4xl mx-auto my-8">
  <h2 class="text-3xl font-bold text-gray-800 mb-4">Mi contenido con Tailwind</h2>
  <p class="text-gray-600 mb-6">Ahora puedo usar todas las utilidades de Tailwind directamente en WordPress.</p>
  
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-blue-50 p-4 rounded-lg">
      <h3 class="text-xl font-semibold text-blue-800">Columna 1</h3>
      <p>Contenido responsive</p>
    </div>
    <div class="bg-green-50 p-4 rounded-lg">
      <h3 class="text-xl font-semibold text-green-800">Columna 2</h3>
      <p>Grid automático</p>
    </div>
  </div>
</div>

<div class="bg-white shadow-lg rounded-xl p-6 max-w-4xl mx-auto my-8">
  <h2 class="text-3xl font-bold text-gray-800 mb-4">Mi contenido con Tailwind</h2>
  <p class="text-gray-600 mb-6">Ahora puedo usar todas las utilidades de Tailwind directamente en WordPress.</p>
  
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-blue-50 p-4 rounded-lg">
      <h3 class="text-xl font-semibold text-blue-800">Columna 1</h3>
      <p>Contenido responsive</p>
    </div>
    <div class="bg-green-50 p-4 rounded-lg">
      <h3 class="text-xl font-semibold text-green-800">Columna 2</h3>
      <p>Grid automático</p>
    </div>
  </div>
</div>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open, or we have at least one comment, load
				// the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
