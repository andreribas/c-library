<?php /** @var \AndreRibas\Clibrary\Model\Header[] $headers */ ?>

<?php template_extend('base_template.php'); ?>

<?php block_set('title', "Functions"); ?>

<?php block_start('content'); ?>
<h1>Functions</h1>

<?php foreach ($headers as $header): ?>
    <h3><?= $header->title ?></h3>

    <?php template_include('partial/list_functionns.php', ['functionns' => $header->functionns]); ?>
<?php endforeach; ?>
<?php block_end(); ?>
