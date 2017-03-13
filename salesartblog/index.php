<?php get_header(); ?>

      <?php get_sidebar(); ?>

      <!-- ----------------------------------
        ОСНОВНОЙ КОНТЕНТ
      ----------------------------------- -->
      <main class="main">

        <!-- Анонсы статей -->
        <?php
        if ( have_posts() ) :

          while ( have_posts() ) : the_post();

            get_template_part( 'content', get_post_format() );

          endwhile;

          the_posts_pagination( array(
              'mid_size' => 4,
              'prev_text' => 'Предыдущая',
              'next_text' => 'Следующая',
          ) );

        endif;
        ?>

      </main>

    </div>

  </div>

<?php get_footer(); ?>
