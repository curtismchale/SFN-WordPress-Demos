<?php get_header(); ?>
<!-- index.php -->
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <h2 class="post-title"><?php the_title(); ?></h2>

                <?php the_content(); ?>

                <p class="post-tags"><?php the_tags('Tags:', ',',''); ?></p>
            </article><!-- /post_class() -->

        <?php endwhile; ?>

            <?php posts_nav_link(' -- ','< Previous Page','Next Page >'); ?> 

        <?php else : ?>

    	<h3>Ooops looks like there was an issue. Please <a href="<?php echo get_option('home'); ?>/contact" title="Contact Us">get in touch</a> with us and we'll get the problem fixed.</h3>

    <?php endif; ?>

    <!-- resets the WordPress Query -->
    <?php wp_reset_query(); ?>

<?php get_footer(); ?>