<?php
/**
 * Template part for displaying featured car section
 *
 * @package Auto Motors
 * @subpackage auto_motors
 */

$auto_motors_static_image = get_template_directory_uri() . '/assets/images/sliderimage.png';

if (get_theme_mod('auto_motors_featured_car_show_hide', true)) { ?>
    <section id="featured-car" class="py-5 text-center">
        <div class="container">
            <?php if (get_theme_mod('auto_motors_featured_car_section_tittle', true)) { ?>
                <h2 class="mb-5"><?php echo esc_html(get_theme_mod('auto_motors_featured_car_section_tittle', '')); ?></h2>
            <?php } ?>
            
            <div class="owl-carousel">
                <?php
                $auto_motors_post_category = get_theme_mod('auto_motors_featured_car_section_category');
                $auto_motors_num_posts = get_theme_mod('auto_motors_num_posts', 3); // Get the number of posts
                
                if ($auto_motors_post_category) {
                    $auto_motors_page_query = new WP_Query(array(
                        'category_name' => esc_html($auto_motors_post_category),
                        'posts_per_page' => absint($auto_motors_num_posts),
                    ));

                    $post_index = 1;
                    while ($auto_motors_page_query->have_posts()) : $auto_motors_page_query->the_post(); ?>
                        <div class="cat-inner-box mb-3">
                            <div class="car-inner-content py-4 px-3">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php
                                $auto_motors_compare_price = get_theme_mod('auto_motors_compare_price' . $post_index, '');
                                if (!empty($auto_motors_compare_price)) : ?>
                                    <p class="cours-price my-3"><?php echo esc_html($auto_motors_compare_price); ?></p>
                                <?php endif; ?>

                                <?php if (has_post_thumbnail()) { ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php } else { ?>
                                    <img src="<?php echo esc_url($auto_motors_static_image); ?>" alt="Car Image">
                                <?php } ?>
                            </div>

                            <div class="featured-car-box">
                                <?php
                                $auto_motors_body_type = get_theme_mod('auto_motors_body_type' . $post_index, '');
                                if (!empty($auto_motors_body_type)) : ?>
                                    <span><?php echo esc_html($auto_motors_body_type); ?></span>
                                <?php endif; ?>

                                <?php
                                $auto_motors_model_year = get_theme_mod('auto_motors_model_year' . $post_index, '');
                                if (!empty($auto_motors_model_year)) : ?>
                                    <span><?php echo esc_html($auto_motors_model_year); ?></span>
                                <?php endif; ?>

                                <?php
                                $auto_motors_engine_type = get_theme_mod('auto_motors_engine_type' . $post_index, '');
                                if (!empty($auto_motors_engine_type)) : ?>
                                    <span><?php echo esc_html($auto_motors_engine_type); ?></span>
                                <?php endif; ?>

                                <?php
                                $auto_motors_car_color = get_theme_mod('auto_motors_car_color' . $post_index, '');
                                if (!empty($auto_motors_car_color)) : ?>
                                    <span><?php echo esc_html($auto_motors_car_color); ?></span>
                                <?php endif; ?>

                                <?php
                                $auto_motors_mileage = get_theme_mod('auto_motors_mileage' . $post_index, '');
                                if (!empty($auto_motors_mileage)) : ?>
                                    <span><?php echo esc_html($auto_motors_mileage); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php
                        $post_index++;
                    endwhile;
                    wp_reset_postdata();
                }
                ?>
            </div>
        </div>
    </section>
<?php } ?>
