<?php
$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
?>
<div class="navbar__brand">
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <?php if (has_custom_logo()) {
            echo '<img src="' . esc_url($logo[0]) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
        } else {
            echo '<h1>' . esc_html(get_bloginfo('name')) . '</h1>';
        } ?>
    </a>
</div>