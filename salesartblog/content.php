<article class="post">
  <p class="post__title"><?php the_title(); ?></p>

  <div class="meta">
    <svg class="meta__icon">
      <use xlink:href="#icon-avatar"></use>
    </svg>

    <span class="meta__name"><?php the_author(); ?>,&nbsp;</span>

    <span class="meta__date"><?php the_date(); ?>,&nbsp;</span>

    <?php
    $tag_list = get_the_tag_list( '<span class="meta__tags">', '', '</span>' );
    if ( $tag_list && ! is_wp_error( $tag_list ) ) {
        echo $tag_list;
    }
    ?>
  </div>

  <!-- <img class="post__thumb" src="http://placehold.it/661x413" alt="Изображение"> -->
  <?php the_post_thumbnail( array( 661, 413 ) ); ?>

  <div class="post__content">
  <?php the_excerpt(); ?>
  </div>

  <a class="post__more" href="article.html">Читать подробнее</a>
</article>
