<?php get_header(); ?>

      <?php get_sidebar(); ?>

      <!-- ----------------------------------
        ОСНОВНОЙ КОНТЕНТ
      ----------------------------------- -->
      <main class="main">

        <!-- Хлебные крошки -->
        <ul class="breadcrumbs">
          <?php if ( function_exists( 'bcn_display' ) )
          {
              bcn_display();
          }?>
        </ul>

        <!-- Для страницы "Категория" -->
        <div class="category">
          <p class="category__title">Статьи раздела <?php single_cat_title(); ?></p>

          <?php
          echo category_description();

          $category = get_category( get_query_var( 'cat' ) );
          $popular_tags = get_category_tags( $category->cat_ID );

          if ( $popular_tags ) :
          ?>
          <div class="category-popular">
            <p class="category-popular__title">Популярные теги в данной категории:</p>

            <?php
            foreach ( $popular_tags as $tag ) {
                $format = '<a class="category-popular__tag" href="%s">%s</a>';
                echo sprintf( $format, $tag->tag_link, $tag->tag_name );
                echo "\n";
            }
            ?>

          </div>
          <?php endif; ?>
        </div>


        <!-- Баннер -->
        <!-- <a class="banner" href="#" target="_blank">
          <img src="http://placehold.it/661x188">
        </a> -->

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
