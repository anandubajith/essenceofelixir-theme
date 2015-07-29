<?php get_header(); ?>
<main class="site-content">
  <div class="posts">
  <?php while ( have_posts() ) : the_post(); ?>
      <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <header class="entry-header">
          <h1 class="entry-title">
            <a title="<?php printf( esc_attr__( 'Permalink to %s', 'compass' ), the_title_attribute( 'echo=0' ) ); ?>" href="<?php the_permalink(); ?>" rel="bookmark">
              <?php the_title(); ?>
            </a>
          </h1>
        </header>
        <div class="entry-content">
          <?php the_content('Read More &raquo;'); ?>
        </div>
      </article>
      <hr>
    <?php endwhile; ?>
    
    <?php previous_posts_link( '« Older Entries' ) ?>
  </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
