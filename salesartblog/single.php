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

          <!-- <li class="breadcrumbs__item">
            <a class="breadcrumbs__link" href="#">Блог</a>
          </li>

          <li class="breadcrumbs__item">
            <a class="breadcrumbs__link" href="#">Аналитика</a>
          </li>

          <li class="breadcrumbs__item">
            <a class="breadcrumbs__link" href="#">Яндекс.Метрика</a>
          </li>

          <li class="breadcrumbs__item breadcrumbs__item--active">
            <a class="breadcrumbs__link" href="#">Настройка сквозной аналитики</a>
          </li> -->
        </ul>

        <?php
        if ( have_posts() ) :

          while ( have_posts() ) : the_post();

            get_template_part( 'content_single', get_post_format() );

          endwhile;

        endif;
        ?>

        <div class="share">
          <p class="share__title">Понравилась статья? Порекомендуйте ее друзьям:</p>

          <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
          <script src="//yastatic.net/share2/share.js"></script>
          <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus,twitter" data-counter=""></div>
        </div>

        <!-- <div class="other">
          <p class="other__title">Другие статьи</p>

          <div class="other__wrapper">
            <a class="other__item" href="#">
              <div class="other__thumb">
                <img class="other__img" src="<?php bloginfo( 'template_directory' );?>/pic/other-1.jpg" alt="Фото">
              </div>

              <div class="other__textual">
                <p class="other__caption">Как правильно настроить сквозную аналитику</p>

                <span class="other__views">19800 просмотров</span>
                <span class="other__comments">101 комментарий</span>
              </div>
            </a>

            <a class="other__item" href="#">
              <div class="other__thumb">
                <img class="other__img" src="<?php bloginfo( 'template_directory' );?>/pic/other-2.jpg" alt="Фото">
              </div>

              <div class="other__textual">
                <p class="other__caption">Как правильно настроить сквозную аналитику</p>

                <span class="other__views">200 просмотров</span>
                <span class="other__comments">1 комментарий</span>
              </div>
            </a>
          </div>
        </div> -->

      </main>

    </div>

  </div>


<?php get_footer(); ?>
