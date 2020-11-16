<?php template_extend('layout.php'); ?>

<?php block_set('title', "Header - {$header->title}"); ?>

<?php block_start('content'); ?>
    <h1><?= $header->title ?></h1>
    <p><?= $header->description ?></p>

    <ul>
        <?php foreach ($functionns as $functionn): ?>
            <li><a href="/function/<?= $functionn->id ?>"><?= $functionn->title ?></a></li>
        <?php endforeach; ?>
    </ul>
<?php block_end(); ?>