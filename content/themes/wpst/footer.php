<?php 
    $twitter = get_field('twitter' , 'options' );
    $facebook = get_field('facebook' , 'options' );
    $instagram = get_field('instagram' , 'options' );
    $email = get_field('email' , 'options' );
?>

<footer>
    <div class="container">
        <ul class="list--unset | footer__icons">
            <a href="https://www.instagram.com/<?php echo $instagram; ?>"><li class="icon icon--instagram"></li></a>
            <a href="<?php echo $facebook; ?>"><li class="icon icon--facebook"></li></a>
            <a href="https://twitter.com/<?php echo $twitter; ?>"><li class="icon icon--twitter"></li></a>
            <a href="mailto:<?php echo $email; ?>" class="icon icon--mail">
            </a>
        </ul>
        <p class="email u-zero-bottom"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
        
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
