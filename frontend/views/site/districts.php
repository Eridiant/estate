
<section class="districts container" style="max-width: 1204px; margin-left: auto; margin-right: auto">
    <p class="title"><?=Yii::t('frontend', 'Районы')?></p>
    <div class="swiper districts-swiper card">
        <div class="swiper-wrapper text-white shadow-black">
            <?php foreach ($districts as $district): ?>
                <div class="swiper-slide destination" data-target="<?= $district->id; ?>">
                    <?= $this->render('_district', compact('district')) ?>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-button-next districts-next"></div>
        <div class="swiper-button-prev districts-prev"></div>
        <div class="swiper-pagination pagination"></div>
    </div>
    <!-- <div class="districts-block">
        <div class="districts-img">
            <picture>
                <img src="/images/index/districts/map.jpg" alt="">
            </picture>
        </div>
        <div class="districts-svg">
            <object id="districts" data="/images/svg/districts/map.svg" type="image/svg+xml">
                <img src="/images/dist/bg-1920x1450.jpg" alt=""> 
            </object>
        </div>
    </div> -->

    <div id="districts-map" class="districts-block">
        <div id="districts" class="maps"></div>
    </div>

    <!-- <div id="map" class="contacts-map map">
    </div> -->
</section>