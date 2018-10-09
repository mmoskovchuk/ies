<?php
/**
 * Template Name: 404
 */
?>

<?php get_header(); ?>


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
                                    <p>факультет</p>
                                    <p>екологічної безпеки,</p>
                                    <p>інженерії</p>
                                    <p>та технологій</p>
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

            </div>
        </div>
    </section>


    <section class="404">
        <div class="container">
            <div class="col-md-9 404__content">
                <h1>Сторінку не знайдено</h1>
                <p>На жаль, сторінку __ не вдалося знайти. Причини, що могли призвести до помилки:</p>
                <ul>
                    <li>Ви невірно набрали адресу - перевірте правильність адреси;</li>
                    <li>Такої сторінки ніколи не було на нашому сайті - зайдіть на головну сторінку або скористайтеся пошуком ;</li>
                    <li>Така сторінка була, але за цiєю адресою її більше немає - будь ласка, сповістіть web-майстра про це;</li>
                    <li>Сторiнка була, але її перенесли пiд час змiни структури сайту - скористайтесь пошуком;</li>
                </ul>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </section>

<?php get_footer(); ?>