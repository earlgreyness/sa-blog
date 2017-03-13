<article class="post">
  <p class="post__title"><?php the_title(); ?></p>

  <div class="meta">
    <svg class="meta__icon">
      <use xlink:href="#icon-avatar"></use>
    </svg>

    <span class="meta__name"><?php the_author(); ?>,&nbsp;</span>

    <span class="meta__date"><?php the_time(get_option('date_format')); ?>,&nbsp;</span>

    <?php
    $tag_list = get_the_tag_list( '<span class="meta__tags">', '', '</span>' );
    if ( $tag_list && ! is_wp_error( $tag_list ) ) {
        echo $tag_list;
    }
    ?>
  </div>

  <?php the_post_thumbnail( array( 661, 413 ), array( 'class' => 'post__thumb' ) ); ?>

  <div class="post__content">
  <?php the_excerpt(); ?>
  </div>

  <a class="post__more" href="<?php the_permalink(); ?>">Читать подробнее</a>
</article>
