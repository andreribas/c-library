<?php /** @var \AndreRibas\Clibrary\Model\Header[] $headers */ ?>

<?php template_extend('base_template.php'); ?>

<?php block_set('title', "Headers"); ?>

<?php block_start('content'); ?>
    <h1>Headers</h1>

    <ul>
        <?php foreach ($headers as $header): ?>
            <li><a href="/headers/<?= $header->id ?>"><?= $header->title ?></a>: <?= $header->description ?></li>
        <?php endforeach; ?>
    </ul>
<?php block_end(); ?>

