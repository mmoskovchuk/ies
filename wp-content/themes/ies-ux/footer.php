</div><?php //END MAIN ?>

<?php  $url = get_site_url().'/wp-content/themes/ies-ux'; ?>

<!--FOOTER-->
<footer class="footer">

    <div class="footer__top">
        <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 footer__top-block">
                <div>
                    <h4>Адреса факультету:</h4>
                    <p>03058, Україна</p>
                    <p>м.Київ, просп.Космонавта Комарова 1</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 footer__top-block">
                <div>
                    <h4>Дирекція факультету:</h4>
                    <p>ауд. 5-202, тел.: +38 (044) 406-78-90</p>
                    <p>тел/факс: +38 (044) 406-77-65</p>
                    <p>(обідня перерва з 12:00 до 13:00)</p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__bottom">
        <div class="container">

            <button id="js_form-toggle" class="contact-form_button">
                <span>< Лист розробнику /></span>
            </button>
            <form id="contactForm" action="<?php echo $url.'/mail.php' ?>" method="post" role="form">
                <div id="note"></div>
                <div id="contact-form" class="contact-form">
                    <div class="contact-form__left">
                        <div class="form-group">
                            <label for="formName">Ім'я *</label>
                            <input id="formName" type="text" autocomplete="off" class="input" name="name" data-message="Будь-ласка, введіть Ваше ім'я"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="formEmail">E-mail *</label>
                            <input id="formEmail" type="email" autocomplete="off" class="input" name="email" data-message="Будь-ласка, введіть Ваш e-mail"
                                   required>
                        </div>
                    </div>
                    <div class="contact-form__right">
                        <div class="form-group">
                            <label for="message">Повідомлення *</label>
                            <textarea id="message" class="textarea" name="message" rows="3" cols="60" data-message="Будь-ласка, введіть Ваше повідомлення"
                                      required></textarea>
                            <!-- antispam code -->
                            <div class="g-recaptcha" data-sitekey="6Lfb6oEUAAAAALpXWktPIpAcKYaGkQzyMeVJS5ZJ" style="transform:scale(0.77);-webkit-transform:scale(0.77); width: 260px;" data-theme="dark"></div>
                        </div>
                        <button value="Submit" id="submit" class="contact-form__submit" type="submit"><i class="fa fa-paper-plane"></i>
                            Надіслати</button>
                    </div>
                </div>
            </form>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="copyright">&copy; <?php echo date("Y"); ?> Факультет екологічної безпеки, інженерії та
                    технологій (НАУ)
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>
