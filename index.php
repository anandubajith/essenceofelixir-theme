<?php get_header(); ?>
<main class="site-content">
  <div class="posts">
  <?php while ( have_posts() ) : the_post(); ?>
      <article class="site-article <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
        <header class="entry-header">
          <h1 class="entry-title">
            <a title="<?php printf( esc_attr__( 'Permalink to %s', 'compass' ), the_title_attribute( 'echo=0' ) ); ?>" href="<?php the_permalink(); ?>" rel="bookmark">
              <?php the_title(); ?>
            </a>
          </h1>
        </header>
        <div class="entry-content">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
        <section class="entry-meta">
          <?php if ( count( get_the_category() ) ) : ?>
            <span class="cat-links">
              Categories:
              <?php echo get_the_category_list( ', ' ); ?>
            </span>
            <?php endif; ?>
        </section>
        <!-- .entry-meta -->
      </article>
    <?php endwhile; ?>
  </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
