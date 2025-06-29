<?php
$link_one_text = get_theme_mod('header_btn_one_text', '');
$link_two_text = get_theme_mod('header_btn_two_text', '');
$link_one_url = get_theme_mod('header_btn_one_link', '');
$link_two_url = get_theme_mod('header_btn_two_link', '');

?>

<div class="h-buttons">
    <?php if (!empty($link_one_text) && !empty($link_one_url)) : ?>
    <a href="<?php echo $link_one_url; ?>" class="btn-rev"><?php echo $link_one_text; ?></a>
    <?php endif; ?>
    <?php if (!empty($link_two_text) && !empty($link_two_url)) : ?>
    <a href="<?php echo $link_two_url; ?>" class="btn-main">
        <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M27.3114 20.466V24.38C27.3129 24.7434 27.2384 25.1031 27.0925 25.436C26.9466 25.7689 26.7327 26.0678 26.4644 26.3134C26.1962 26.559 25.8794 26.7461 25.5345 26.8625C25.1896 26.9789 24.8242 27.0221 24.4616 26.9894C20.4389 26.5532 16.5748 25.1813 13.1798 22.984C10.0212 20.9809 7.3433 18.3083 5.33619 15.1559C3.12687 11.7523 1.75197 7.8771 1.32287 3.84433C1.2902 3.48355 1.33316 3.11992 1.44902 2.77661C1.56488 2.43331 1.75109 2.11783 1.99581 1.85029C2.24052 1.58274 2.53838 1.36897 2.8704 1.2226C3.20243 1.07623 3.56136 1.00047 3.92434 1.00013H7.84616C8.48059 0.993895 9.09564 1.21811 9.57668 1.63098C10.0577 2.04386 10.3719 2.61721 10.4607 3.24418C10.6262 4.49676 10.9332 5.72664 11.3758 6.91034C11.5517 7.37732 11.5897 7.88483 11.4855 8.37273C11.3812 8.86064 11.139 9.30849 10.7875 9.66322L9.12729 11.3202C10.9883 14.5865 13.6981 17.291 16.9709 19.1483L18.6312 17.4913C18.9866 17.1405 19.4353 16.8988 19.9242 16.7947C20.4131 16.6907 20.9216 16.7287 21.3895 16.9042C22.5756 17.3459 23.8079 17.6523 25.0629 17.8175C25.698 17.9069 26.2779 18.2261 26.6925 18.7145C27.1071 19.2028 27.3274 19.8261 27.3114 20.466Z"
                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <span> <?php echo $link_two_text; ?></span>
    </a>
    <?php endif; ?>
</div>