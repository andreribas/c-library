<?php template_extend('base_template.php'); ?>

<?php block_set('title', $title); ?>

<?php block_start('content'); ?>
    <h1><?= $title ?></h1>
<?php block_end(); ?>

