<?php /** @var string $search */ ?>
<?php /** @var \AndreRibas\Clibrary\Model\Header[] $headers */ ?>
<?php /** @var \AndreRibas\Clibrary\Model\Functionn[] $functionns */ ?>

<?php template_extend('base_template.php'); ?>

<?php block_set('title', "Search results for '{$search}'"); ?>

<?php block_start('content'); ?>
    <h2>Search results for <em>'<?= $search ?>'</em></h2>

    <?php if (count($headers) == 0 && count($functionns) == 0): ?>
        <p>No results found</p>
    <?php endif; ?>

    <?php if (count($headers) > 0): ?>
        <h4>Headers</h4>
        <?php template_include('partial/list_headers.php', ['functionns' => $headers]); ?>
    <?php endif; ?>

    <?php if (count($functionns) > 0): ?>
        <h4>Functions</h4>
        <?php template_include('partial/list_functionns.php', ['functionns' => $functionns]); ?>
    <?php endif; ?>

<?php block_end(); ?>

