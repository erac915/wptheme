<?php get_header(); ?>

  <div id="primary" class="content-area extended">

    <main id="main" class="site-main" role="main">

      <h1>
        <?php the_archive_title('') ?> 
        <?php esc_html_e('Posts Only', 'wphierachy' ); ?>

      </h1>
      <p><?php echo category_description(  ); ?></p>

      <hr>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

       <?php get_template_part( 'template-parts/content-posts') ?>

      <?php endwhile; else : ?>

        <?php get_template_part( 'template-parts/content', 'none') ?>       

      <?php endif; ?>

      <?php echo paginate_links(); ?>

      <p>Template: category-chastening.php</p>

    </main>

  </div>

 

<?php get_footer(); ?>
