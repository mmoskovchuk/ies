<div class="content-block__news-wrap">
    <h2 class="title-ribbon">Новини</h2>
    <?php
    $pc = new WP_Query('cat=1&orderby=date&posts_per_page=5'); ?>
    <?php while ($pc->have_posts()) : $pc->the_post(); ?>

        <div class="content-block__news-block">
            <?php if (has_post_thumbnail()) : ?>
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
                        <span><?php the_date(); ?></span>
                        <a href="<?php the_permalink(); ?>">
                            Читати далі <i class="fas fa-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            <?php else : ?>

                <div class="content-block__news-thumbnail">
                    <img src="<?php bloginfo('template_url'); ?>/img/default-img.png"
                         alt="<?php bloginfo('name'); ?>" class="content-block__news-thumbnail-noimg"/>
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

            <?php endif; ?>
        </div>

    <?php endwhile; ?>
    <div class="content-block__all-news-wrap">
        <a href="/news"><i class="fas fa-newspaper"></i>&nbsp;Всі новини</a>
    </div>
</div>