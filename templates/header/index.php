<?php /** @var \AndreRibas\Clibrary\Model\Header[] $headers */ ?>

<?php template_extend('base_template.php'); ?>

<?php block_set('title', "Headers"); ?>

<?php block_start('content'); ?>
    <div class="float-right">
        <form action="/headers/create" method="get">
            <button type="submit" class="btn btn-primary">Create new Header</button>
        </form>
    </div>

    <h1>Headers</h1>
    <?php template_include('partial/list_headers.php', ['functionns' => $headers]); ?>
<?php block_end(); ?>

