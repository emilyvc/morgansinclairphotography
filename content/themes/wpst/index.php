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
                        <h1 class="u-weight-normal u-align-center"><?php the_title(); ?></h1>
                    </article>
                </div>
            </div>
            <div class="container">
                <?php get_template_part('views/page/gallery/list'); ?>
            </div>
            <?php if(!is_single()): ?>
                <div class="cms section section--large container">
                    <div class="grid">
                        <div class="grid__item grid__item--6-12-bp3 | content">
                            <?php the_content(); ?>
                        </div>
                        <div class="grid__item grid__item--6-12-bp3 | side-content">
                            <?php if(is_page('about')): ?>
                                <?php $profile_image = get_field('profile_image', 'options'); ?>
                                <?php if($profile_image): ?>
                                    <img src="<?php echo $profile_image['sizes']['project']; ?>" alt="">
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php if(is_page('contact')): ?>
                                <?php echo do_shortcode( '[gravityform id="1" title="false" description="false"]' ); ?>
                            <?php endif; ?>
                        </div> 
                    </div>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php else: ?>
        <?php get_template_part( 'views/errors/404-posts' ); ?>
    <?php endif; ?>
<!-- .container -->
</main>

<?php get_footer(); ?>
