<?php foreach ($actualites as $actualite) : ?>
    <article>
        <h3><?= $actualite->title() ?></h3>

        <?php foreach ($actualite->text()->toLayouts() as $layout) : ?>
            <div class="grid">
                <?php foreach ($layout->columns() as $column) : ?>
                    <div class="column column-<?= $column->span() ?>">
                        <?= $column->blocks() ?>
                    </div>
                <?php endforeach ?>
            </div>
        <?php endforeach ?>
    </article>
<?php endforeach ?>