<main class="wrapper">
<article>
    <h3><?= $page->title() ?></h3>

    <?php foreach ($page->text()->toLayouts() as $layout) : ?>
        <div class="grid">
            <?php foreach ($layout->columns() as $column) : ?>
                <div class="column column-<?= $column->span() ?>">
                    <?= $column->blocks() ?>
                </div>
            <?php endforeach ?>
        </div>
    <?php endforeach ?>
</article>
</main>