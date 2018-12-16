<?
/*
 * Template name: single
 * */
?>
<?php get_header(); ?>
    <!-- TOP-BLOCK -->
<?php get_template_part('includes/inc', 'top-block'); ?>

    <!-- BREADCRUMBS -->
<?php get_template_part('includes/inc', 'breadcrumbs'); ?>

    <!--CONTENT-->
    <section class="content-block">
        <div class="container">
            <div class="row content-block__wrap">

                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 content-block__order-1 content-block__default-page">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <h3>
                                <?php the_title(); ?>
                            </h3>
                            <?php the_content(); ?>
                            <div class="content-block__default-page_info-wrap">
                                <div class="content-block__default-page_date">
                                    <i class="far fa-calendar-alt"></i> <?php the_date(); ?>
                                </div>
                                <div class="social-likes social-likes_light">
                                    <div class="facebook" title="Поділитися лінком на Фейсбук">Facebook</div>
                                    <div class="plusone" title="Поділитися лінком на Гугл-плюс">Google+</div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 content-block__order-2 content-block__mobile-margin">

                    <aside class="sidebar">

                        <!-- SIDEBAR-MENU-BLOCK -->
                        <?php get_template_part('includes/inc', 'sidebar-menu-block'); ?>

                        <!-- SIDEBAR-MAP-BLOCK -->
                        <?php get_template_part('includes/inc', 'sidebar-map-block'); ?>

                        <!-- SIDEBAR-POLL-BLOCK -->
                        <?php get_template_part('includes/inc', 'sidebar-poll-block'); ?>

                    </aside>

                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>