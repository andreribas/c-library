<?php template_extend('base_template.php'); ?>

<?php block_set('title', "Function - {$functionn->title}"); ?>

<?php block_start('content'); ?>
    <h1><?= $functionn->title ?></h1>
    <p><?= $functionn->description ?></p>
<?php block_end(); ?>

