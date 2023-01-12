<?php get_header(); ?>
<?php  
    /*template Name: news*/
?>
<main class="main-news">
        <div class="container">
            <div class="news-title">
                Новости
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
	'category_name' =>'новости',
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
                    
                    <a href="content.html" class="blog-item-news">
                        <div class="blog-img-news"><img src="img/slick2" alt=""></div>
                        <div class="blog-text-news">
                        <div class="blog-title-news"><p>Главу спецслужбы Германии уволили после обвинений в связях с Россией</p></div>
                        <div class="blog-news-date">20 октября, 2022</div>
                    </div>
                    </a>
                    
                    <a href="content.html" class="blog-item-news">
                        <div class="blog-img-news"><img src="img/slick1" alt=""></div>
                        <div class="blog-text-news">
                        <div class="blog-title-news"><p>Минобороны заявило о попытке захвата Запорожской АЭС силами украинского десанта</p></div>
                        <div class="blog-news-date">20 октября, 2022</div>
                        </div>
                    </a>
                    <a href="content.html" class="blog-item-news">
                        <div class="blog-img-news"><img src="https://api.theins.info/images/gAlnpYeQzuwjDFMyEKee3pH4yxgvDUHRtK82Fv-WLqs/rs:auto:480:360:0:0/dpr:2/q:80/bG9jYWw6L3B1Ymxp/Yy9zdG9yYWdlL3Bv/c3QvMjU1NzUxL2Zp/bGUtNGY2OGQ5YjA2/MzIzZjk3MmMxMTQ3/ZmQ4OGU4YmQxZTIu/anBlZw.jpg" alt=""></div>
                        <div class="blog-text-news">
                        <div class="blog-title-news"><p>В России возбуждено 149 дел по статье о «фейках» про армию </p></div>
                        <div class="blog-news-date">19 октября, 2022</div>
                        </div>
                    </a>
                    <a href="content.html" class="blog-item-news">
                        <div class="blog-img-news"><img src="https://api.theins.info/images/YG1WVqPKR9ZngbCuKgOD4Ens9KqPxtDQ0m4r5ww0Cko/rs:auto:480:360:0:0/dpr:2/q:80/bG9jYWw6L3B1Ymxp/Yy9zdG9yYWdlL3Bv/c3QvMjU0NTE0L2Zp/bGUtOTlkNjc5Yjdm/ZTJmODgyMDNhN2Rl/OTc1ODVmNjg2OTgu/anBn.jpg" alt=""></div>
                        <div class="blog-text-news">
                        <div class="blog-title-news"><p>Украинские войска перешли в наступление к западу от Херсона</p></div>
                        <div class="blog-news-date">19 октября, 2022</div>
                        </div>
                    </a>
                    <a href="content.html" class="blog-item-news">
                        <div class="blog-img-news"><img src="./img/slick1" alt=""></div>
                        <div class="blog-text-news">
                        <div class="blog-title-news"><p>Главу спецслужбы Германии уволили после обвинений в связях с Россией</p></div>
                        <div class="blog-news-date">19 октября, 2022</div>
                        </div>
                    </a>
                    <a href="content.html" class="blog-item-news">
                        <div class="blog-img-news"><img src="https://api.theins.info/images/0MZg8LEv8SrT5GInOGXJahlePowjOP4vMTO3Sgne5Bg/rs:auto:480:360:0:0/dpr:2/q:80/bG9jYWw6L3B1Ymxp/Yy9zdG9yYWdlL3Bv/c3QvMjU0MjM0L2Zp/bGUtOTllOWZlZDIy/ZDFhNGVmNmJhYWY2/Nzk2NzFkYTY2ODUu/anBn.jpg" alt=""></div>
                        <div class="blog-text-news">
                        <div class="blog-title-news"><p>В США завели 20 уголовных дел за уклонение от санкций против России</p></div>
                        <div class="blog-news-date">18 октября, 2022</div>
                        </div>
                    </a>
                    <a href="content.html" class="blog-item-news">
                        <div class="blog-img-news"><img src="https://api.theins.info/images/WHO5GcK0_ZZvFSsdvcIkSESWCDBJqpcL6OnwZ5bKHE8/rs:auto:480:360:0:0/dpr:2/q:80/bG9jYWw6L3B1Ymxp/Yy9zdG9yYWdlL3Bv/c3QvMjU1NzE4L2Zp/bGUtZmE3MDRmMjgx/YjRmODVjNjc0ZDA3/ZjVmMTZmNDZhMTUu/anBn.jpg" alt=""></div>
                        <div class="blog-text-news">
                        <div class="blog-title-news"><p>Главу спецслужбы Германии уволили после обвинений в связях с Россией</p></div>
                        <div class="blog-news-date">18 октября, 2022</div>
                        </div>
                    </a>
                    <a href="content.html" class="blog-item-news">
                        <div class="blog-img-news"><img src="https://api.theins.info/images/jQ6cBTcHlje_tB0c8Oml3IlnVmGePeeDP4CFOGluBAM/rs:auto:480:360:0:0/dpr:2/q:80/bG9jYWw6L3B1Ymxp/Yy9zdG9yYWdlL3Bv/c3QvMjU0ODI5L2Zp/bGUtMmZhODZjOTNi/MjhlNWVmYTc3YWYz/NmFjMTY1NDNhOTcu/anBn.jpg" alt=""></div>
                        <div class="blog-text-news">
                        <div class="blog-title-news"><p>В Белгородской области два человека пострадали от обстрелов</p></div>
                        <div class="blog-news-date">18 октября, 2022</div>
                        </div>
                    </a>
                    <a href="content.html" class="blog-item-news">
                        <div class="blog-img-news"><img src="img/slick1" alt=""></div>
                        <div class="blog-text-news">
                        <div class="blog-title-news"><p>Главу спецслужбы Германии уволили после обвинений в связях с Россией</p></div>
                        <div class="blog-news-date">17 октября, 2022</div>
                        </div>
                    </a>
                    <a href="content.html" class="blog-item-news">
                        <div class="blog-img-news"><img src="img/slick1" alt=""></div>
                        <div class="blog-text-news">
                        <div class="blog-title-news"><p>Главу спецслужбы Германии уволили после обвинений в связях с Россией</p></div>
                        <div class="blog-news-date">17 октября, 2022</div>
                        </div>
                    </a>
                    <a href="content.html" class="blog-item-news">
                        <div class="blog-img-news"><img src="img/slick1" alt=""></div>
                        <div class="blog-text-news">
                        <div class="blog-title-news"><p>Главу спецслужбы Германии уволили после обвинений в связях с Россией</p></div>
                        <div class="blog-news-date">17 октября, 2022</div>
                        </div>
                    </a>
                    <a href="content.html" class="blog-item-news">
                        <div class="blog-img-news"><img src="img/slick1" alt=""></div>
                        <div class="blog-text-news">
                        <div class="blog-title-news"><p>Главу спецслужбы Германии уволили после обвинений в связях с Россией</p></div>
                        <div class="blog-news-date">17 октября, 2022</div>
                        </div>
                    </a>
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