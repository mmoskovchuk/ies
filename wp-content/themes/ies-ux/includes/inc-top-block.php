<section class="top-block">
    <div class="container">

            <div class="top-block__info">

                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">

                    <div class="top-block__wrap">
                        <a href="<?php echo home_url(); ?>">
                            <div class="top-block__logo">
                                <img src="<?php bloginfo('template_url'); ?>/img/logo.png"
                                     alt="<?php bloginfo('name'); ?>" class="top-block__logo-big"/>
                                <span class="top-block__logo-tagline"><?php bloginfo('description'); ?></span>
                            </div>
                            <div class="top-block__logo-title">
                                <p>факультет</p>
                                <p>екологічної безпеки,</p>
                                <p>інженерії</p>
                                <p>та технологій</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <div class="top-block__button_wrap">
                        <a href="//phone.nau.edu.ua/" target="_blank">
                            <span class="top-block__button_block">
                                <i class="far fa-address-book fa-2x"></i>
                            </span>
                            <p>Довідник</p>
                        </a>
                        <a href="//www.lib.nau.edu.ua/main/" target="_blank">
                            <span class="top-block__button_block">
                                <i class="fas fa-book-reader fa-2x"></i>
                            </span>
                            <p>Бібліотека</p>
                        </a>
                        <a href="/kontakty">
                            <span class="top-block__button_block">
                                <i class="fas fa-phone-volume fa-2x"></i>
                            </span>
                            <p>Контакти</p>
                        </a>
                    </div>
                </div>

            </div>

            <?php if ((is_front_page()) and (!is_paged())) { ?>
            <div class="top-block__slider">


                        <?php
                        $stati_children = new WP_Query('posts_per_page=7&post_type=page&post_parent=293');

                        if ($stati_children->have_posts()) :
                            while ($stati_children->have_posts()): $stati_children->the_post();

                                echo '<div class="top-block__news-slider"><ul><li><a class="top-block__news-slider_img-link" href="' . get_the_permalink() . '">' . '<img src="' . get_the_post_thumbnail_url($post_id, 'full') . '"' . ' alt="#" class="header__logo-big" />' . '<h3>' . get_the_title() . '</h3>' . '</a></li></ul></div>';

                            endwhile; ?>

                        <?php endif;
                        wp_reset_query(); ?>

                <?php } ?>
            </div>
            <div class="clear"></div>

    </div>
</section>
