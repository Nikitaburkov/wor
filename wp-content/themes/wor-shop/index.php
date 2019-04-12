

<?php get_header();?>
<!--
    Template name: main
-->
<main class="content">
    <section class="container">
        <div class="logo">
                <img src="<?= get_template_directory_uri();?>/images/BORODINSKILogo.png" alt="" class="img-logo">
        </div>
        <div class="header-info-panel">
            <div class="block">
                <h2>быстро</h2>
                <div class="rhomb"></div>
                <p>мы делаем свою работу быстро! два часа пролетят незаметно и вы-счастливый обладатель стильной стрижки-минутки</p>
            </div>
            <div class="block">
                <h2>круто</h2>
                <div class="rhomb"></div>
                <p>забудьте,как вы стриглись раньше. мысделаем из вас звезду футбола или кино! во всяком случае внешне</p>
            </div>
            <div class="block">
                <h2>дорого</h2>
                <div class="rhomb"></div>
                <p>наши мастера-профессионалы своего дела и не могут стоить дёшево. к тому же, развек цена не даёт определенный статус</p>
            </div>
        </div>
    </section>
    <section class="container ">
        <div class="main-section">
            <div class="news">
                <h2>новости</h2>
                <?php
                global $post;
                $args = array('posts_per_page' => 2);
                $myposts = get_posts( $args );
                if ($myposts!=null){
                    foreach( $myposts as $post ){ setup_postdata($post);
                        ?>
                        <div>
                            <div class="content-post"><?php the_content(); ?></div>
                            <p class="date-news"><?php the_time('j F Y'); ?></p>
                        </div>
                        <?php

                    }}else{?>
                    <h3><?php echo "нету новостей";?></h3>
                <?php }
                wp_reset_postdata();
                ?>
                <a href="/informations" class="btn all-news">все новости</a>
            </div>
            <div class="photogallery">
                <h2>фотогалерея</h2>

                <div id="carouselOne" class="owl-theme owl-carousel">
                    <div class="slider"><img src="<?= get_template_directory_uri();?>/images/photo.jpg" class="image-item slider-item" alt=""></div>
                    <div class="slider"><img src="<?= get_template_directory_uri();?>/images/hoyts-barber-hero.jpg" class="image-item slider-item" alt=""></div>
                </div>

            </div>
        </div>
    </section>
    <section class="container  ">
        <div class="main-section-two">
            <div class="contact-information">
                <h2>контактная информация</h2>
                <div class=info>
                    <?php global $redux_demo;?>
                    <p><?php echo $redux_demo['opt-multitext'][0];?></p>
                    <p><?php echo $redux_demo['opt-multitext'][1];?></p>
                    <p><?php echo $redux_demo['opt-multitext'][2];?></p>



                </div>
                <div class="operating-time">
                    <p>время работы:</p>
                    <p><?php echo $redux_demo['operating-time'][0];?></p>
                    <p><?php echo $redux_demo['operating-time'][1];?></p>
                </div>

                <a href="form" class="btn feedback">обратная связь</a>
            </div>
            <div class="record">
                    <h2>записаться</h2>
                    <p>укажите желаемую дату и время и мы свяжемся с вами для поддтверждения брони</p>
                    <!--<div class="feedback-contacts">-->
                        <!--<input type="text" placeholder="время" class="time">
                        <input type="text" placeholder="дата" class="date">
                        <input type="text" placeholder="ваше имя" class="name">
                        <input type="text" placeholder="телефон" class="phone">-->

                        <?php echo do_shortcode( '[contact-form-7 id="109" title="Записи"]' ); ?>
                    <!--</div>-->
                <!--<input type="submit" class="btn send">-->
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>

