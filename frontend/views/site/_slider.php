<div class="swiper popup-swiper">
    <div class="swiper-wrapper">
        <?php foreach ($images as $image): ?>
            <div class="swiper-slide">
                <img src="<?= $image; ?>" alt="">
            </div>
        <?php endforeach; ?>
    </div>
    <div class="swiper-button-next popup-swiper-button-next"></div>
    <div class="swiper-button-prev popup-swiper-button-prev"></div>
</div>
