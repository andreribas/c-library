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
        <ul>
            <?php foreach ($headers as $header): ?>
                <li><a href="/headers/<?= $header->id ?>"><?= $header->title ?></a>: <?= $header->description ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>


    <?php if (count($functionns) > 0): ?>
        <h4>Functions</h4>
        <?php foreach ($functionns as $functionn): ?>
            <li><a href="/functions/<?= $functionn->id ?>"><?= $functionn->title ?></a>: <?= $functionn->description ?></li>
        <?php endforeach; ?>
    <?php endif; ?>


<?php block_end(); ?>

