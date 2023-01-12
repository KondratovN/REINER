<?php get_header(); ?>

    <div class="content-wrapper">
    <main class="main-content">
        <div class="container">
            <div class="content-container">
        <div class="content-title"><?php the_title();?></div>
        <div class="content-date"><div><?php the_time('j F, Y'); ?></div> <div><?php the_field( 'autor' ); ?></div></div>
        <div class="content-subtitle">

            <?php the_content(); ?>
        
        </div>
        </div>
            </div>

        </main>

<?php get_footer(); ?>