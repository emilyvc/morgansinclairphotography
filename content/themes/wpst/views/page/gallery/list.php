<?php

/**
 ***************************************************************************
 * Partial: Gallery List
 ***************************************************************************
 *
 * This partial is used to list the gallery images for galleries.
 *
 */

$gallery = get_field('project_gallery');

if($gallery) :
?>
    <div class="slideshow">
        <?php foreach($gallery as $slide) : ?>
            <img src="<?php echo $slide['gallery_image']['url']; ?>" alt="" class="gallery__image">
        <?php endforeach; ?>
    </div>
<?php endif; ?>
