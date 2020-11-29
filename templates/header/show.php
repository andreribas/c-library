<?php /** @var \AndreRibas\Clibrary\Model\Functionn[] $functionns */ ?>
<?php /** @var \AndreRibas\Clibrary\Model\Header $header */ ?>

<?php template_extend('base_template.php'); ?>

<?php block_set('title', "Header - {$header->title}"); ?>

<?php block_start('content'); ?>
    <div class="float-right">
        <form action="/headers/<?= $header->id ?>/delete" method="post">
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete the header <?= $header->title ?>');">Delete Header</button>
        </form>
    </div>

    <h1><?= $header->title ?></h1>
    <p><?= $header->description ?></p>

    <h4>Functions</h4>
    <?php template_include('partial/list_functionns.php', ['functionns' => $functionns]); ?>
<?php block_end(); ?>