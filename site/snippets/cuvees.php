<section class="wrapper">
    <h1><?= $page->title() ?></h1>

    <div class="grid grid-2">
        <?php foreach ($cuvees->sortBy('publication', 'desc') as $cuvee) : ?>
            <article class="column-6">
                <h2><?= $cuvee->title() ?></h2>
                <img src="<?= $cuvee->etiquette()->toFile()->url() ?>" alt="">
                <?= $cuvee->description()->markdown() ?>
            </article>
        <?php endforeach ?>
    </div>
</section>