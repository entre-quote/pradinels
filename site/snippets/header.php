<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?= $site->description()->html() ?>">

  <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">

  <?= css([
    'assets/css/styles.css',
    '@auto'
  ]) ?>

  <title>
    <?= $site->title()->html() ?>
  </title>
</head>

<body>
  <header>
    <h1>
      <a href="<?= $site->url() ?>" class="logo">
        <img src="<?= $site->url() ?>/assets/pradinels-logo.png" alt="<?= $site->title()->html() ?> - logo">

      </a>
    </h1>

    <nav class="main-nav">
      <ul>
        <li><a href="<?= $site->url() ?>/#actualites">Quoi de nouveau ?</a></li>
        <li><a href="<?= $site->url() ?>/#nos-cuvees">Ce que l'on boit !</a></li>
        <li><a href="<?= $site->url() ?>/#a-la-vigne">À la vigne</a></li>
      </ul>
    </nav>

    <div>
      <?= $site->contactheader()->text() ?>
    </div>
  </header>