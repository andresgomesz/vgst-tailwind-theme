<article class="bg-white rounded-xl shadow hover:shadow-lg transition p-4 flex flex-col">

  <?php if ( has_post_thumbnail() ) : ?>
    <div class="mb-4">
      <?php the_post_thumbnail('medium', [
        'class' => 'w-full h-auto rounded'
      ]); ?>
    </div>
  <?php endif; ?>

  <h3 class="text-lg font-semibold mb-2">
    <?php the_title(); ?>
  </h3>

  <p class="text-sm text-gray-600 flex-grow">
    <?php echo wp_trim_words( get_the_content(), 18 ); ?>
  </p>

  <a href="<?php the_permalink(); ?>"
     class="mt-4 inline-block text-green-600 font-medium text-sm">
    Leer más →
  </a>

</article>
