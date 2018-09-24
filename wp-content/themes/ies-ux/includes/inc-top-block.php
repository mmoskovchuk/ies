<section class="top-block">
    <div class="container">
        <div class="row">

            <div class="top-block__info">

                <div class="col-md-5">

                    <div class="top-block__wrap">
                        <a href="<?php echo home_url(); ?>">
                            <div class="top-block__logo">
                                <img src="<?php bloginfo('template_url'); ?>/img/logo.png"
                                     alt="<?php bloginfo('name'); ?>" class="top-block__logo-big"/>
                                <span class="top-block__logo-tagline"><?php bloginfo('description'); ?></span>
                            </div>
                            <div class="top-block__logo-title">
                                <p>ННІЕБ</p>
                                <p>Навчально-науковий інститут екологічної безпеки</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="top-block__button_wrap">
                        <a href="#">
                            <span class="top-block__button_block">
                                <i class="fas fa-university fa-2x"></i>
                            </span>
                            Кафедри
                        </a>
                        <a href="//www.lib.nau.edu.ua/main/" target="_blank">
                            <span class="top-block__button_block">
                                <i class="fas fa-book-reader fa-2x"></i>
                            </span>
                            Бібліотека
                        </a>
                        <a href="#">
                            <span class="top-block__button_block">
                                <i class="fas fa-phone-volume fa-2x"></i>
                            </span>
                            Контакти
                        </a>
                    </div>
                </div>

            </div>

            <?php if ((is_front_page()) and (!is_paged())) { ?>
                <div class="top-block__slider">

                    <div class="top-block__news-slider">
                        <ul>
                            <!-- определение категории и количество записей -->
                            <?php $the_query = new WP_Query('cat=5&p=40'); ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <li>
                                    <!-- заголовок записи -->
                                    <a class="top-block__news-slider_img-link" href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(get_the_title(), 0, 60, "...") ?>">
                                        <?php /*echo get_the_post_thumbnail($post->ID, 'large'); */?>
                                        <img src="<?php bloginfo('template_url'); ?>/img/slider/1.jpg" alt="<?php bloginfo('name'); ?>" class="header__logo-big"/>
                                    </a>
                                    <a href="<?php the_permalink() ?>">
                                        <!--<span class="top-block__news-slider"><?php /*the_time(get_option('date_format')); */?></span>-->
                                        <?php /*echo mb_strimwidth(get_the_title(), 0, 60, "...") */?>
                                    </a>
                                    <!-- дата -->
                                </li>
                            <?php endwhile; ?>
                            <!-- функция для правильной работы условных тегов -->
                            <?php wp_reset_query(); ?>
                        </ul>
                    </div>

                </div>
                <div class="clear"></div>
            <?php } ?>

        </div>
    </div>
</section>
