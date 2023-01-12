<?php get_header(); ?>
    <main class="main">
        <div class="container">
            <div class="main-container">
                <div class="main-grid">
                    <div class="slick-news">
                        <?php
                        // параметры по умолчанию
$my_posts = get_posts( array(
	'numberposts' => 5,
	'category'    => 0,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'category_name' =>'слайдер',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

global $post;

foreach( $my_posts as $post ){
	setup_postdata( $post );
	?> 
	<a href="<?php the_permalink( $post ); ?>" class="slick-item">
                            <div class="slick-text">
                                <div class="slick-rubrik"><?php the_field( 'рубрика' ); ?></div>
                                <div class="slick-title"><?php the_title();?></div>
                            </div>
                            <div class="slick-img">
                            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                            </div>
                        </a>
	<?php

	// формат вывода the_title() ...
}

wp_reset_postdata(); // сброс
?>
                        
                      </div>
                      
                      
                      
                      
                      <div class="blog">
                          
                          <?php
                    // параметры по умолчанию
$my_posts = get_posts( array(
	'numberposts' => -1,
	'category'    => 0,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'category_name' =>'новости',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

global $post;

foreach( $my_posts as $post ){
	setup_postdata( $post );
	?>
	<a href="<?php the_permalink( $post ); ?>" class="blog-item">
                            <div class="blog-img"><img src="<?php echo get_the_post_thumbnail_url();?>" alt=""></div>
                            <div class="blog-text"><p><?php the_title();?></p></div>
                        </a>
<?php
	// формат вывода the_title() ...
}

wp_reset_postdata(); // сброс 

?>
                      </div>
                      <a href="https://www.reinerlive.ru/news/" class="allnews">
                        <div class="allnews-text">
                            Все новости
                        </div>
                    </a>
                </div>
                <div class="main-grid">
                    <div class="breakingnews">
                        <div class="bn-title">Последние новости</div>
                        <?php
                        // параметры по умолчанию
$my_posts = get_posts( array(
	'numberposts' => 10,
	'category'    => 0,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'breaking',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

global $post;

foreach( $my_posts as $post ){
	setup_postdata( $post );
	?> 
	<div class="bn-subtitle">
                            <div class="bn-date"><?php the_time('j F'); ?> <span><?php the_time('g:i'); ?></span></div>
                            <div class="bn-news"><?php the_title();?></div>
                        </div>
	<?php

	// формат вывода the_title() ...
}

wp_reset_postdata(); // сброс
?>
                    </div>
                    <div class="ad-block">
                        <a href="#" class="ad-block-wraper">
                            <div class="ad-block-text">AD</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <?php get_footer(); ?>