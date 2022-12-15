<section class="wrapper">
    <h1><?= $page->title() ?></h1>

    <?php foreach ($vignes as $vigne) : ?>
        <article>
            <h2><?= $vigne->title() ?></h2>

            <?php foreach ($vigne->text()->toLayouts() as $layout) : ?>
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
</section>