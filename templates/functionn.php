<?php template_extend('layout.php'); ?>

<?php block_set('title', "Function - {$functionn->title}"); ?>

<?php block_start('content'); ?>
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <?php template_include('side-menu.php'); ?>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <h1><?= $functionn->title ?></h1>
            <p><?= $functionn->description ?></p>
        </main>
    </div>
<?php block_end(); ?>