<?php
$category_object = get_the_category(get_the_ID());
$category_name = $category_object[0]->name;
$active = get_the_ID();

$articles = new WP_Query(array(
    'post_type' => 'realizacje',
    'posts_per_page' => -1,
    'order' => 'DESC',
    'category_name' => $category_name,
    'orderby'        => 'rand',
    'post__not_in' => array($active),

));
?>
<div class="realizacje">
    <div class="realizacje__posts-wraper">
        <?php while ($articles->have_posts()) : $articles->the_post(); ?>
            <?php get_template_part('templates-parts/content/content-cart-post');  ?>
        <?php endwhile;
        wp_reset_query(); ?>
    </div>
</div>