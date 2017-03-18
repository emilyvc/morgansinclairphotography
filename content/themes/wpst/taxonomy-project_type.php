<?php

/**
 ***************************************************************************
 * Example Custom Template
 ***************************************************************************
 *
 * All custom templates should be prefixed with `tpl-` for navigation
 * purposes. To associate this template with WordPress, write the
 * template name underneath like so.
 *
 * Template Name: Gallery
 *
 */



// Get the header
get_header();

?>

<main class="main">
   <?php get_template_part('views/globals/project-loop'); ?>
</main>


<?php get_footer(); ?>
