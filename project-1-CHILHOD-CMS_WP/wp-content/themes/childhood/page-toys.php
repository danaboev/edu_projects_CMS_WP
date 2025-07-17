<?php 
/*
Template Name: Игрушки
*/
?>

<?php 
get_header();
?>

    <div class="toys">
        <div class="container">
            <h2 class="subtitle">Мягкие игрушки</h2>
            <div class="toys__wrapper">
                <?php
                    // параметры по умолчанию
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'soft_toys',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        global $post;
                        foreach( $my_posts as $post ){
                            setup_postdata( $post );

                ?>
                        <?php
                        $image_url = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/img/not-found.jpg';
                        ?>
                        <div class="toys__item" style="background-image: url('<?php echo esc_url($image_url); ?>')">


                        <div class="toys__item-info">
                            <div class="toys__item-title"> <?php the_title();?></div>
                            <div class="toys__item-descr">
                                <?php the_field('toys_descr');?>                            
                            </div>
                            <div class="minibutton toys__trigger">Подробнее</div>
                        </div>
                    </div>

                <?php
                    }

                    wp_reset_postdata(); // сброс
                ?> 
            
            </div>

            <div class="toys__wrapper">
                <?php
                    $my_posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'soft_toys_edu',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true,
                    ) );

                    global $post;
                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                ?>
                    <div class="toys__item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/toy_7.jpg')">
                        <div class="toys__item-info">
                            <div class="toys__item-title">Воздушный змей</div>
                            <div class="toys__item-descr">
                                Кто в детстве не хотел научиться летать? А змей поможет поймать ветер и унести все заботы далеко-далеко...    
                            </div>
                            <div class="minibutton toys__trigger">Подробнее</div>
                        </div>
                    </div>
                <?php
                    }
                    wp_reset_postdata();
                ?> 

                <div class="toys__item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/toy_8.jpg')">
                    <div class="toys__item-info">
                        <div class="toys__item-title">Музыкальные</div>
                        <div class="toys__item-descr">
                            Попробуйте заинтересовать ребенка музыкой! Может в нем таится будущий Джаред Лето!
                        </div>
                        <div class="minibutton toys__trigger">Подробнее</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="toys__alert">
                        <?php the_field('not_found')?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
get_footer();
?>