<?php /** @var \AndreRibas\Clibrary\Model\Functionn[] $functionns */ ?>
<?php /** @var \AndreRibas\Clibrary\Model\Header $header */ ?>

<?php template_extend('base_template.php'); ?>

<?php block_set('title', "Header - {$header->title}"); ?>

<?php block_start('content'); ?>
    <h1><?= $header->title ?></h1>
    <p><?= $header->description ?></p>

    <h4>Functions</h4>
    <?php template_include('partial/list_functionns.php', ['functionns' => $functionns]); ?>
<?php block_end(); ?>