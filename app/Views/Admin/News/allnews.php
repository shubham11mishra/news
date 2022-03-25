<?= $this->extend('./layouts/frontlayout.php') ?>

<?= $this->section('title') ?>
Notes Taking app
<?= $this->endSection() ?>

<?= $this->section('body') ?>
Welocome PO
<div class="container">


    <?php foreach ($news as $newsItem) : ?>
        <?php $tags = explode(',', $newsItem['tags'])  ?>
       
            <div class="news-section">
                <?= esc($newsItem['news']) ?>
            </div>
            <div class="tag-section">
                <?php foreach ($tags as $tag) : ?>
                    <?= $tag ?>
                <?php endforeach ?>
            </div>
      


    <?php endforeach  ?>

</div>



<?= $this->endSection() ?>