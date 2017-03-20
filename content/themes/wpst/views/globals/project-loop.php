<?php 
/**
 * Query to get project posts
 */
global $post;
$qo = get_queried_object();
$args = [
    'post_type'      => 'projects',
    'posts_per_page' => -1,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
    'post_status'    => 'publish'
];

if ( is_a($qo, 'WP_Term') ) {
    $args['project_type'] = $qo->slug;
}

$projects = new WP_Query( $args );

?>


<?php if ( $projects->have_posts() ): ?>
    <div class="grid grid--compact">
        <?php while ( $projects->have_posts() ) : $projects->the_post(); ?>
            <?php
                $image = get_field('project_image');
                 $terms = wp_get_object_terms($post->ID, 'project_type');

            ?>
            <div class="grid__item grid__item--6-12-bp1 grid__item--4-12-bp3 grid__item--3-12-bp4">
                <a href="<?php the_permalink(); ?>" class="box" style="background-image: url('<?php echo $image['sizes']['project']; ?>');">
                    <div class="box__overlay">
                        <div class="box__content">
                            <?php foreach($terms as $term): ?>
                                <span class="zeta box__meta"><?php echo $term->name; ?></span>
                            <?php endforeach; ?>
                            <h1 class="box__title"><?php the_title(); ?></h1>
                        </div>
                    </div>
                </a>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
<?php else:  ?>
        <p>No projects</p>
<?php endif; ?>
