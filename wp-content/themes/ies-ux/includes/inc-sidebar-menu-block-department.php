<div class="sidebar-menu__wrap">
    <div class="menu-block">
        <h2 class="title-ribbon">Навігація кафедри:</h2>
        <nav class="sidebar__menu" id="sidebar-nav-department">
            <!--Ecology Department-->
            <?php if (is_page(298)): ?>
                <?php
                $nav_args = array(
                    'theme_location' => 'sidebar_menu_department_ecology',
                    'container' => '',
                    'depth' => 2
                );
                wp_nav_menu($nav_args);
                ?>
            <?php endif; ?>
            <!--Land Management Department-->
            <?php if (is_page(123)): ?>
                <?php
                $nav_args = array(
                    'theme_location' => 'sidebar_menu_department_land_management',
                    'container' => '',
                    'depth' => 2
                );
                wp_nav_menu($nav_args);
                ?>
            <?php endif; ?>
        </nav>
    </div>
</div>