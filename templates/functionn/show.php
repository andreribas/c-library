<?php /** @var \AndreRibas\Clibrary\Model\Functionn $functionn */ ?>

<?php template_extend('base_template.php'); ?>

<?php block_set('title', "Function - {$functionn->title}"); ?>

<?php block_start('content'); ?>
    <div class="float-right d-inline-flex">
        <form class="mr-2" action="/functions/<?= $functionn->id ?>/edit" method="get">
            <button type="submit" class="btn btn-primary">Edit Function</button>
        </form>
        <form action="/functions/<?= $functionn->id ?>/delete" method="post">
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete the function <?= $functionn->title ?>');">Delete Function</button>
        </form>
    </div>

    <h1><?= $functionn->title ?></h1>
    <p><?= $functionn->description ?></p>
<?php block_end(); ?>

