<section class="content-block">
    <div class="container">
        <div class="content-block__wrap">

            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 content-block__order-2">
                <!-- NOTIFICATION-BLOCK -->
                <?php get_template_part('includes/inc', 'notification-block'); ?>

                <!-- NEWS-BLOCK -->
                <?php get_template_part('includes/inc', 'news-block'); ?>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 content-block__order-1 content-block__mobile-margin">

                <aside class="sidebar">

                    <!-- SIDEBAR-MENU-BLOCK -->
                    <?php get_template_part('includes/inc', 'sidebar-menu-block'); ?>

                    <!-- SIDEBAR-MAP-BLOCK -->
                    <?php get_template_part('includes/inc', 'sidebar-map-block'); ?>

                    <!-- SIDEBAR-POLL-BLOCK -->
                    <?php get_template_part('includes/inc', 'sidebar-poll-block'); ?>

                    <!-- SIDEBAR-QR-BLOCK -->
                    <?php get_template_part('includes/inc', 'sidebar-qr-block'); ?>

                </aside>

            </div>
        </div>
    </div>
</section>
