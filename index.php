<?php get_header(); ?>

<div class="uk-section">

  <div class="uk-container uk-container-small">
    <h1 class=""><?php the_title(); ?></h1>

    <?php get_template_part( 'template-parts/content', 'content' ); ?>

    </div>

</div><!-- .uk-section -->
<div class="uk-section uk-section-muted">
  <div class="uk-container">
    <?php get_template_part( 'template-parts/content', 'prev-next' ); ?>
  </div>
</div>

<?php get_footer(); ?>
