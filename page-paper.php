<?php get_header(); ?>

<?php  
    /*template Name: paper*/
?>
<main class="main-news">
        <div class="container">
            <div class="news-title">
                Cтатьи
            </div>
            <div class="main-news-container">
                <div class="main-news-grid">
                <div class="blog-news">
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
	'category_name' =>'статьи',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

global $post;

foreach( $my_posts as $post ){
	setup_postdata( $post );
	?>
	<a href="<?php the_permalink( $post ); ?>" class="blog-item-news">
                        <div class="blog-img-news"><img src="<?php echo get_the_post_thumbnail_url();?>" alt=""></div>
                        <div class="blog-text-news">
                        <div class="blog-title-news"><p><?php the_title();?></p></div>
                        <div class="blog-news-date"><?php the_time('j F, Y'); ?></div>
                    </div>
                    </a>
<?php
	// формат вывода the_title() ...
}

wp_reset_postdata(); // сброс 

?>
                  </div>
                  <div class="allnews allnews-news">
                    <div class="allnews-text">
                        Загрузить еще
                    </div>
                </div>
                </div>
                  <div class="main-news-grid">
                    <div class="ad-block-news">
                        <a href="#" class="ad-block-wraper-news">
                            <div class="ad-block-text-news">AD</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</main>
<?php get_footer(); ?>