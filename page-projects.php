<?php
/*
 Template name: Проекты
 */
?>
<?php
    get_header();
?>
<section class="projects main__projects">
    <img class="brushstrokes projects__brushstrokes--top"
         src="<?php echo bloginfo('template_url'); ?>/assets/brushstrokes-white.png" alt="краска">
    <div class="container">
        <h1 class="main-title projects__title">&lt;Проекты&#47;&#62;</h1>
        <ul class="projects__content">
            <?php
            $posts = get_posts(array(
                'numberposts' => 0, //чтобы вывести ВСЕ посты
                'category_name' => 'projects', //выводим только рубрику projects
                'orderby' => 'date',
                'order' => 'ASC', //DESC - прямой порядок
                'post_type' => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));
            foreach ($posts as $post) {
                setup_postdata($post);
                ?>

                <li class="projects__thumbnail thumbnail">
                    <h2 class="thumbnail__title sub-title"><?php the_title(); ?></h2>
                    <div class="thumbnail__content">
                        <img class="thumbnail__image" src="<?php the_field('project_img'); ?>" alt="проект">
                        <nav class="thumbnail__overlay">
                            <ul class="thumbnail__list">
                                <li class="thumbnail__item thumbnail__item--top fromTopToBottom"><a
                                        class="thumbnail__link sub-title" target="_blank"
                                        href="pages/notebook-app.html">Описание проекта</a></li>
                                <li class="thumbnail__item">
                                    <a class="thumbnail__link git-href sub-title"
                                       target="_blank" rel="nofollow noopener"
                                       href="<?php the_field('project_git-link'); ?>">Код на
                                        GitHub</a></li>
                                <li class="thumbnail__item thumbnail__item--bottom fromBottomToTop">
                                    <a class="thumbnail__link sub-title" target="_blank"
                                       rel="nofollow noopener"
                                       href="https://notebook-js-app.web.app/">Перейти на сайт</a></li>
                            </ul>
                        </nav>
                    </div>
                </li>
                <?php
            }
            wp_reset_postdata();
            ?>
        </ul>
    </div>
    <img class="brushstrokes projects__brushstrokes--bottom"
         src="<?php echo bloginfo('template_url'); ?>/assets/brushstrokes-white.png" alt="краска">
</section>

<?php
    get_footer();
?>
