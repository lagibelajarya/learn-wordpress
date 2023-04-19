<?php get_header(); ?>
<main class="container mb-5">
  <section class="content-area content-thin">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="article-loop">
          <header>
            <img src="<?php echo add_theme_support('post-thumbnails'); ?>">
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