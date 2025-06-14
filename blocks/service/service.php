<?php
$uslugi = get_field('uslugi');
$class_name = 'b-service';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
?>
<?php if ($uslugi) :

?>
    <div class="  <?php echo $class_name; ?>">
        <div class="b-service__wrap">
            <?php
            if ($uslugi):
                global $post; ?>
                <div class="service-recom " data-aos="fade-up">
                    <?php foreach ($uslugi as $post):  setup_postdata($post); ?>
                        <div class="service-cart">
                            <?php if (has_post_thumbnail()) {   ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('gallery'); ?>
                                </a>
                            <?php } ?>
                            <div class="desc">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" class="btn-rev">Dowiedz się wiecej</a>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <?php wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>
        </div>

    </div>
<?php endif; ?>