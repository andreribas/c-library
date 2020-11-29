<?php /** @var \AndreRibas\Clibrary\Model\Header[] $headers */ ?>

<?php template_extend('base_template.php'); ?>

<?php block_set('title', "Create Function"); ?>

<?php block_start('content'); ?>
    <form method="post" action="/functions">

        <h2>Create Function</h2>

        <div class="form-group">
            <label for="functionTitle">Function Title</label>
            <input type="text" class="form-control" id="functionTitle" name="title">
        </div>

        <div class="form-group">
            <label for="functionHeader">Header</label>
            <select id="functionHeader" class="form-control" name="header_id">
                <?php foreach ($headers as $header): ?>
                    <option value="<?= $header->id ?>"><?= $header->title ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="functionDescription">Function Description</label>
            <textarea class="form-control" id="functionDescription" name="description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
<?php block_end(); ?>