<?php template_extend('layout.php'); ?>

<?php block_set('title', $title); ?>

<?php block_start('content'); ?>
    <h1><?= $title ?></h1>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <?php template_include('side-menu.php'); ?>

        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        </main>
    </div>
<?php block_end(); ?>

