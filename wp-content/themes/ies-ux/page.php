<?php
//FUNCTION: FILTER CONTENT
//--------------------------------------------------
function filterContent ( $text ){
    $random_links = '<div data-ajax-content="random-pages.php"></div>';
    $order_steps = '<div data-ajax-content="order-steps"></div>';
    $why_us = '<div data-ajax-content="why-us"></div>';
    $order_btn = '<div class="footer-order-btn btn-wrap">
    <a href="/order" class="btn btn-default big-btn" id="order_btn_footer">Order Now</a>
</div>';


    $pattern1 = '/(<h1>.*?)(<h[2-6]>)/is';
    $tmp = preg_replace($pattern1, "
        <section class='content-top'>
            <div class='container'>
                <div class='article'>$1</div>
            </div>
        </section>
        $random_links
        $order_steps
   
        $why_us
        <section id='content_block' class='content-accordion'>
            <div class='container'>
                <div class='article'>
                    <div data-accordion='container' class='content-accordion__container'>$2", $text, 1);

    $pattern2 = '/(<h[2-6]>.*?<\/h[2-6]>)/i';
    $tmp = preg_replace($pattern2, "
        </div><div data-accordion='header' class='content-accordion__header'>$1</div>
        <div data-accordion='body' class='content-accordion__body'>", $tmp);

    $pos = strpos($tmp, "</div><div data-accordion='header'");

    $result = substr_replace($tmp, '', $pos, 6) . "
                        </div><!--END .content-accordion__body (last)-->
                    </div><!--END .content-accordion__container-->
                </div><!--END .article-->
                $order_btn
            </div><!--END .container-->
        </section><!--END .content-accordion-->";

    return $result;
}

add_filter('the_content', 'filterContent');
?>

<?php get_header(); ?>

    <script>
        var sheet = document.createElement('style')
        sheet.innerHTML = ".content-accordion__body {display:none}";
        document.head.appendChild(sheet);
    </script>

<?php get_template_part('includes/inc', 'top-block-seo-page'); ?>
<?php get_template_part('includes/inc', 'breadcrumbs'); ?>


    <!--CONTENT-->
    <section class="seo-page-content content">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); //content will be filtered by the "filterContent" function ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>

<?php get_footer(); ?>