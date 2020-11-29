<?php /** @var \AndreRibas\Clibrary\Model\Header[] $headers  */ ?>

<?php if (count($headers) > 0): ?>
    <ul>
        <?php foreach ($headers as $header): ?>
            <li><a href="/headers/<?= $header->id ?>"><?= $header->title ?></a>: <?= $header->description ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No headers found</p>
<?php endif; ?>
