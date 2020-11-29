<?php /** @var \AndreRibas\Clibrary\Model\Header $header */ ?>

<?php template_extend('base_template.php'); ?>

<?php block_set('title', "Create Header"); ?>

<?php block_start('content'); ?>
    <form method="post" action="/headers/<?= $header->id ?>/update">
        <input type="hidden" name="id" value="<?= $header->id ?>">

        <h2>Edit Header</h2>

        <div class="form-group">
            <label for="headerTitle">Header Title</label>
            <input type="text" class="form-control" id="headerTitle" name="title" value="<?= $header->title ?>">
        </div>

        <div class="form-group">
            <label for="headerDescription">Header Description</label>
            <input type="text" class="form-control" id="headerDescription" name="description" value="<?= $header->description ?>">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
<?php block_end(); ?>
