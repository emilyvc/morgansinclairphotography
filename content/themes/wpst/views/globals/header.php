<?php 
    $terms = get_terms('project_type');
?>

<a href="#navigation" class="is-hidden">Skip to Navigation</a>

<header class="header">
    <div class="container">
        <a href="/" class="beta header__title" title="<?php bloginfo('name'); ?>">
            Morgan Sinclair Photography
        </a>


        <nav class="nav-container | header__nav" id="navigation" role="navigation">
            <ul class="nav nav--primary | cf">
                <?php foreach ($terms as $term ) { ?>
                    <li class="nav__item"><a class="nav__link" href="/project_type/<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
                <?php } ?>
                <li class="nav__item"><a class="nav__link" href="/about">About me</a></li>
                <li class="nav__item"><a class="nav__link" href="/about">Contact</a></li>
            </ul>
        </nav>

        <a id="mobile-nav-toggle" class="u-button-reset | toggle | icon--menu-open">
            <span class="is-hidden">Toggle mobile menu</span>
        </a>

    </div>
</header>
