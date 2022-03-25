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
				<div class="swiper-slide"><?= $newsItem['news']; ?></div>
			<?php endforeach  ?>


		</div>
		<!-- If we need pagination -->
		<div class="swiper-pagination"></div>

		<!-- If we need navigation buttons -->
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>

		<!-- If we need scrollbar -->
		<div class="swiper-scrollbar"></div>
	</div>
</div>


<script>
	const swiper = new Swiper('.swiper', {
		// Optional parameters

		loop: true,

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