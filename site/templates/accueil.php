<?php snippet('header') ?>

<main>
  <section id="presentation" class="wrapper">
    <?php snippet('layouts', ['field' => $page->presentation()]) ?>
  </section>

  <section id="actualites" class="wrapper">
    <h2>Quoi de nouveau ?</h2>
    <?php foreach ($actualites->sortBy('publication', 'desc')->limit(1) as $actualite) : ?>
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

    <a href="<?= $site->url() ?>/actualites">Lire toutes les actualités</a>
  </section>

  <section id="nos-cuvees">
    <div class="wrapper">
      <h2>Ce que l'on boit !</h2>

      <div class="grid grid-2">
        <?php foreach ($cuvees->sortBy('publication', 'desc')->limit(4) as $cuvee) : ?>
          <article class="column-6">
            <h3><?= $cuvee->title() ?></h3>
            <img src="<?= $cuvee->etiquette()->toFile()->url() ?>" alt="">
            <?= $cuvee->description()->markdown() ?>
          </article>
        <?php endforeach ?>
      </div>

      <a href="<?= $site->url() ?>/cuvees">Toutes les cuvées</a>
    </div>
  </section>

  <section id="a-la-vigne" class="wrapper">
    <h2>La viticulture à l'épreuve du temps</h2>
    <?php foreach ($vignes->sortBy('publication', 'desc')->limit(1) as $vigne) : ?>
      <article>
        <h3><?= $vigne->title() ?></h3>

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
    
    <a href="<?= $site->url() ?>/vignes">Lire tout sur la viticulture</a>
  </section>
</main>

<?php snippet('footer') ?>