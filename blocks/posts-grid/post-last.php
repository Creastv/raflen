<?php
$po = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'ignore_sticky_posts' => 1,
);
$query_posts_one = new WP_Query($po);

?>
<section class="posts-grid">
    <div class="posts-grid__wrap--style-one">
        <?php while ($query_posts_one->have_posts()) {
            $query_posts_one->the_post();
            $term_list = wp_get_post_terms(get_the_id(), 'category');
        ?>
        <div class="col">
            <article class="post" data-aos="fade-up">
                <div class="post__img">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('post-futured'); ?>
                    </a>
                </div>
                <div class="post__content">
                    <h2 class="entry-title">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <p class="entry-content">
                        <?php echo custom_excerpt(30); ?>
                    </p>
                </div>
            </article>
        </div>
        <?php }
        wp_reset_postdata(); ?>
    </div>
</section>