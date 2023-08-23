<div class="swiper card-swiper">
    <div class="swiper-wrapper">
        <?php if ($model->gallery): ?>
            <?php foreach (explode(',', $model->gallery) as $gallery): ?>
                <div class="swiper-slide">
                    <img src="/uploads/<?= $path; ?>/<?= $model->id; ?>/<?= $gallery; ?>" alt="">
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <?php foreach ($images as $image): ?>
                <div class="swiper-slide">
                    <img src="<?= $image; ?>" alt="">
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="swiper-button-next popup-swiper-button-next"></div>
    <div class="swiper-button-prev popup-swiper-button-prev"></div>
</div>