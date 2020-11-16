
<div class="accordion" id="accordion">
    <?php foreach ($headers as $header): ?>
        <div class="">
            <div class="" id="heading<?= $header->id ?>">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?= $header->id ?>" aria-expanded="true" aria-controls="collapse<?= $header->id ?>">
                        <?= $header->title ?>
                    </button>
                </h5>
            </div>

            <div id="collapse<?= $header->id ?>" class="collapse" aria-labelledby="heading" data-parent="#accordion">
                <div class="card-body">
                    <ul>
                        <?php foreach ($header->functionns as $functionn): ?>
                            <li><a href="/function/<?= $functionn->id ?>"><?= $functionn->title ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
