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
$imgmeta = '';
$imgmeta['width'] = '';
$imgmeta['height'] = '';

if ($gallery):
    $imgmeta = '';
   foreach($gallery as $img):
       $imgmeta = $img['gallery_image'];
   endforeach;
endif;

if ($imgmeta['width'] > $imgmeta['height']) {
    $class = 'landscape';
} else {
    $class = 'portrait';
} ?>

<?php if($gallery): ?>
    <div class="slideshow <?php echo $class; ?>">
            <?php foreach($gallery as $slide) : ?> 
                <div class="gallery__image" style="background-image: url('<?php echo $slide['gallery_image']['url']; ?>')">
                </div>
            <?php endforeach; ?>
    </div>
<?php endif; ?>
