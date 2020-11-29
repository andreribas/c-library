<?php $messages = \AndreRibas\Clibrary\Facade\Flash::getMessages(); ?>

<?php if (count($messages) > 0): ?>
    <?php foreach ($messages as $message): ?>
        <div class="alert alert-<?= $message->getAlertStyle() ?>" role="alert">
            <?= $message->getMessage() ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
