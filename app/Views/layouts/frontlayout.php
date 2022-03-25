<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $this->renderSection('title'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- css -->
    <?= link_tag('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css') ?>
    <?= link_tag('https://unpkg.com/swiper@8/swiper-bundle.min.css') ?>
    <?= link_tag('https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/base.min.css') ?>
    <?= link_tag('https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css')?>
    <!-- scripts -->
    <?= script_tag('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js') ?>
    <?= script_tag('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') ?>
    <?= script_tag('https://unpkg.com/swiper@8/swiper-bundle.min.js') ?>
    <?= script_tag('https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js')?>
    <?= link_tag('assets/css/main.css') ?>
</head>

<body>
    <?= $this->renderSection('body') ?>

 
</body>

</html>