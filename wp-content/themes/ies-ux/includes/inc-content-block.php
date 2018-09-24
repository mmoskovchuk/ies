<section class="content-block">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="content-block__ad-wrap">
                    <h2>Оголошення</h2>

                    <?php
                    $pc = new WP_Query('cat=3&orderby=date&posts_per_page=3'); ?>
                    <?php while ($pc->have_posts()) : $pc->the_post(); ?>

                        <a href="<?php the_permalink(); ?>">
                            <span><b>[<?php the_date(); ?>]</b> <?php the_title(); ?></span>
                        </a>

                    <?php endwhile; ?>

                </div>

                <div class="content-block__news-wrap">
                    <h2>Новини</h2>
                    <?php
                    $pc = new WP_Query('cat=1&orderby=date&posts_per_page=5'); ?>
                    <?php while ($pc->have_posts()) : $pc->the_post(); ?>

                        <div class="content-block__news-block">
                            <div class="content-block__news-thumbnail">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                } ?>
                            </div>
                            <div class="content-block__news-info">

                                <h3>
                                    <?php the_title(); ?>
                                </h3>

                                <p>
                                    <?php the_truncated_post(450); ?>
                                </p>
                                <div class="content-block__news-info-block">
                                    <span>
                                        <?php the_date(); ?>
                                    </span>
                                    <a href="<?php the_permalink(); ?>">
                                        Читати далі <i class="fas fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                    <div class="content-block__all-news-wrap">
                        <a href="#"><i class="fas fa-newspaper"></i>&nbsp;Всі новини</a>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="sidebar-menu__wrap">
                    <div class="menu-block">
                        <h2>Навігація</h2>
                        <nav class="sidebar__menu" id="sidebar-nav">
                            <?php
                            $nav_args = array(
                                'theme_location' => 'sidebar_menu',
                                'container' => '',
                                'depth' => 2
                            );
                            wp_nav_menu($nav_args);
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
