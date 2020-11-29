<?php /** @var \AndreRibas\Clibrary\Model\Header[] $headers */ ?>

<?php template_extend('base_template.php'); ?>

<?php block_set('title', "Headers"); ?>

<?php block_start('content'); ?>
    <h1>Headers</h1>
    <?php template_include('partial/list_headers.php', ['functionns' => $headers]); ?>
<?php block_end(); ?>

