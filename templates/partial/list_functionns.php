<?php /** @var \AndreRibas\Clibrary\Model\Functionn[] $functionns  */ ?>

<?php if (count($functionns) > 0): ?>
    <ul>
        <?php foreach ($functionns as $functionn): ?>
            <li><a href="/functions/<?= $functionn->id ?>"><?= $functionn->title ?></a>: <?= $functionn->description ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No functions found</p>
<?php endif; ?>
