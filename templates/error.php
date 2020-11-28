<?php /** @var \Throwable $error */ ?>
<?php template_extend('base_template.php'); ?>

<?php block_set('title', 'Error'); ?>

<?php block_start('content'); ?>
    <h1><?= $error->getMessage() ?></h1>
    <h2><?= $error::class ?></h2>
    <pre><?= $error->getTraceAsString() ?></pre>
<?php block_end(); ?>
