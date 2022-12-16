    <article>
        <h3><?= $cuvee->title() ?></h3>

        <?php foreach ($cuvee->layout()->toLayouts() as $layout) : ?>
            <div class="grid" id="<?= $layout->id() ?>">
                <?php foreach ($layout->columns() as $column) : ?>
                    <div class="column column-<?= $column->span() ?>">
                        <?= $column->blocks() ?>
                    </div>
                <?php endforeach ?>
            </div>
        <?php endforeach ?>
    </article>