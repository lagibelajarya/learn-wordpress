<?php get_header(); ?>
<main class="container mb-5">
  <section class="content-area content-thin">
    <?php echo  do_shortcode('[sp_wpcarousel id="26"]'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="article-loop">
          <header>
            <img class="img-fluid" src="<?php echo the_post_thumbnail_url(); ?>">
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            By: <?php the_author(); ?>
          </header>
          <?php the_excerpt(); ?>
        </article>
      <?php endwhile;
    else : ?>
      <article>
        <p>Sorry, no posts were found!</p>
      </article>
    <?php endif; ?>
</main>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>