    <article id="post-<?php the_ID(); ?>" class="hentry page">
        <?php get_template_part('templates-parts/header/header', 'title'); ?>
        <div class="entry-content-wraper">
            <div class="entry-content" data-aos="fade-up" data-aos-delay="300">
                <?php the_content(); ?>
            </div>
            <div class="entry-content-form">
                <div class="entry-content-form__wrap" data-aos="fade-up" data-aos-delay="150">
                    <?php echo do_shortcode('[contact-form-7 id="97b0597" title="Formularz lp"]'); ?>
                </div>
            </div>
        </div>
    </article>