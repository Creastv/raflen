<?php
$bullets = get_field('bullets', 'options');
?>

<?php if ($bullets) : ?>
    <div class="b-bullets" data-aos="fade-up">
        <div class="container">
            <div class="b-bullets__wrap">
                <?php foreach ($bullets as $bullet): ?>
                    <div class="b-bullet">
                        <?php if ($bullet['ikona']) : ?>
                            <?php echo wp_get_attachment_image($bullet['ikona'], 'medium'); ?>
                        <?php endif; ?>
                        <?php if ($bullet['tytul']) : ?>
                            <h4> <?php echo  $bullet['tytul']; ?></h4>
                        <?php endif; ?>
                        <?php if ($bullet['opis']) : ?>
                            <p><?php echo  $bullet['opis']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>