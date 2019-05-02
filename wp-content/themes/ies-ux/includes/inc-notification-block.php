<div class="content-block__notification-wrap">

    <h2 class="title-ribbon">Оголошення</h2>

    <?php
    $stati_children = new WP_Query('orderby=date&posts_per_page=3&post_type=page&post_parent=274');

    if ($stati_children->have_posts()) :
        while ($stati_children->have_posts()): $stati_children->the_post();

            echo '<a href="' . get_the_permalink() . '">' . '<span><b>[' . get_field('date_ad') . ']</b>' . '&nbsp;' . get_the_title() . '</span></a>';

        endwhile;?>

    <?php endif; wp_reset_query(); ?>

    <div class="content-block__all-notification-wrap">
        <a href="/oholoshennia"><i class="far fa-list-alt"></i>&nbsp;Всі оголошення</a>
    </div>

</div>