<?php

/**
 ***************************************************************************
 * Default Template
 ***************************************************************************
 *
 * This template is used to show a generic page. More info here:
 * http://codex.wordpress.org/Theme_Development#Index_.28index.php.29
 *
 */



// Get the header
get_header();

?>

<main class="main">
            <?php if ( have_posts() ): ?>
                <?php while ( have_posts() ): ?>
                    <?php the_post(); ?>
                    <div class="section">
                        <div class="container"> 
                            <article class="cms | gallery__nav">
                                <h1><?php the_title(); ?></h1>
                            </article>
                        </div>
                    </div>
                    <?php get_template_part('views/page/gallery/list'); ?>
                <?php endwhile; ?>
            <?php else: ?>
                <?php get_template_part( 'views/errors/404-posts' ); ?>
            <?php endif; ?>
        <!-- .container -->
</main>

<?php get_footer(); ?>
