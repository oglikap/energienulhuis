<?php get_header();

  $loop = new WP_Query( array(
      'post_type' => 'Techniek',
      // 'posts_per_page' => 1
    )
  );
  ?>

  <section id="bs-front" class="bs-tiles uk-margin-large-top">
    <div class="uk-container">
      <div class="bs-heading">
        <span>Techniek </span>
        Alle technieken die ten grondslag liggen aan de bouw van het huis
      </div>
      <div class="uk-child-width-1-2@s uk-grid-collapse" uk-grid>

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

          <div class="bs-tiles__item">
            <!-- <div class=""> -->

              <div class="bs-tiles__text">
                <div class="bs-tiles__text-content">
                  <span class="bs-tiles__heading"><?php the_title(); ?></span>
                  <div><?php the_field('intro'); ?></div>
                  <a href="<?php the_permalink(); ?>" class="bs-tiles__button">Lees verder</a>
                </div>
              </div>

              <?php $thumbnail = get_the_post_thumbnail_url(); ?>
              <div class="bs-tiles__photo" style="background-image: url(<?php echo $thumbnail; ?>)">
                &nbsp;
              </div>
            <!-- </div> -->
          </div>


        <?php endwhile; wp_reset_query(); ?>

      </div>
    </div>
  </section>

<?php get_footer(); ?>
