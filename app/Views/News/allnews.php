<?= $this->extend('./layouts/frontlayout.php') ?>

<?= $this->section('title') ?>
Notes Taking app
<?= $this->endSection() ?>

<?= $this->section('body') ?>
Welocome PO
<div class="container">
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->

            <?php foreach ($news as $newsItem) : ?>
                <?php $tags = explode(',', $newsItem['tags'])  ?>
                <div class="swiper-slide">
                    <div class="news-section">
                        <?= esc($newsItem['news']) ?>
                    </div>
                    <div class="tag-section">
                        <?php foreach ($tags as $tag) : ?>
                            <?= $tag ?>
                        <?php endforeach ?>
                    </div>
                </div>


            <?php endforeach  ?>


        </div>
        <!-- If we need pagination -->
        <!-- <div class="swiper-pagination"></div> -->

        <!-- If we need navigation buttons -->
        <!-- <div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div> -->

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>
</div>


<script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        effect: "flip",

        loop: true,
        spaceBetween: 10,
        grabCursor: true,
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },
       
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
</script>
<?= $this->endSection() ?>