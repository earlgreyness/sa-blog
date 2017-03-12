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
              'mid_size' => 2,
              'prev_text' => 'Предыдущая',
              'next_text' => 'Следующая',
          ) );

        endif;
        ?>

        <!-- Пагинация -->
        <div class="pagination">
          <a class="pagination__prev" href="#">Предыдущая</a>

          <a class="pagination__link pagination__link--active" href="#">1</a>
          <a class="pagination__link" href="#">2</a>
          <a class="pagination__link" href="#">3</a>
          <a class="pagination__link" href="#">4</a>
          <a class="pagination__link" href="#">5</a>

          <a class="pagination__ellipsis">&hellip;</a>

          <a class="pagination__link" href="#">89</a>

          <a class="pagination__next" href="#">Следующая</a>
        </div>

      </main>

    </div>

  </div>

<?php get_footer(); ?>
