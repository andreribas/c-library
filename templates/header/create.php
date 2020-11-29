<?php template_extend('base_template.php'); ?>

<?php block_set('title', "Create Header"); ?>

<?php block_start('content'); ?>
    <form method="post" action="/headers">

        <h2>Create Header</h2>

        <div class="form-group">
            <label for="headerTitle">Header Title</label>
            <input type="text" class="form-control" id="headerTitle" name="title">
        </div>

        <div class="form-group">
            <label for="headerDescription">Header Description</label>
            <input type="text" class="form-control" id="headerDescription" name="description">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
<?php block_end(); ?>