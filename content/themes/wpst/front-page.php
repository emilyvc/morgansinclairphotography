<?php

/**
 ***************************************************************************
 * Front Page Template
 ***************************************************************************
 *
 * This template is used to show the front page of a WordPress website,
 * regardless of whether or not its a Static Page or Posts landing.
 * More info can be found here:
 * http://codex.wordpress.org/Creating_a_Static_Front_Page
 *
 */


// Get the header
get_header();

?>
<main class="main">
    <div class="container">
        <?php get_template_part('views/globals/project-loop'); ?>
   </div>
</main>

<?php get_footer(); ?>
