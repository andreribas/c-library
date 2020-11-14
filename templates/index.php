<h1><?= $title ?></h1>

<ul>
    <?php foreach ($headers as $header): ?>
        <li><a href="/header/<?= $header->id ?>"><?= $header->title ?></a></li>
    <?php endforeach; ?>
</ul>
