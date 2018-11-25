<div class="site-pagination">
    <?php
    the_posts_pagination(array(
        //'show_all' => true,
        'end_size' => 1,
        'mid_size' => 1,
        'prev_next' => true,
        'prev_text' => __('<i class="fa fa-chevron-left"></i>Назад'),
        'next_text' => __('Вперед<i class="fa fa-chevron-right"></i>')
    ));
    ?>
</div>