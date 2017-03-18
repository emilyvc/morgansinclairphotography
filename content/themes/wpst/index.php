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
                        <h1 class="u-weight-normal"><?php the_title(); ?></h1>
                    </article>
                </div>
            </div>
            <?php get_template_part('views/page/gallery/list'); ?>
            <div class="cms section section--large container">
                <div class="grid">
                    <div class="grid__item grid__item--7-12-bp3 | content">
                        <?php the_content(); ?>
                    </div>
                    <div class="grid__item grid__item--5-12-bp3 | side-content">
                        <?php if(is_page('about')): ?>
                            <?php $profile_image = get_field('profile_image', 'options'); ?>
                            <?php if($profile_image): ?>
                                <img src="<?php echo $profile_image['sizes']['project']; ?>" alt="">
                            <?php endif; ?>
                        <?php endif; ?>
                    </div> 
                </div>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <?php get_template_part( 'views/errors/404-posts' ); ?>
    <?php endif; ?>
<!-- .container -->
</main>

<?php get_footer(); ?>
