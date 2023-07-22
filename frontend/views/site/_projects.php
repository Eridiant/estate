<?php

?>
    <div class="swiper projects-swiper card">
        <div class="swiper-wrapper text-white shadow-black">
            <?php foreach ($model as $item): ?>
                <div class="swiper-slide destination" data-type="flats" data-id="<?= $item->id; ?>">
                    <div class="card-image main-border-radius">
                        <picture>
                            <img src="/images/index/projects/projects-<?= $item->id; ?>.jpg" alt="">
                        </picture>
                        <div class="card-sl">
                            <svg width="31" height="31"><use xlink:href="/images/icons.svg#btn"></use></svg>
                        </div>
                    </div>
                    <a href="#" class="card-active border border-white project"><?=Yii::t('frontend', 'Посмотреть')?>&#8195;<svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg></a>
                    <div class="card-content">
                        <header>
                            <p class="subtitle dn"><?= $item->type; ?></p>
                            <p class="caption"><?= $item?->name; ?></p>
                        </header>
                        <footer>
                            <p class="dn"><span><?=Yii::t('frontend', 'Страна')?>:</span> <span><?= $item?->country; ?></span></p>
                            <p><span><?=Yii::t('frontend', 'Сдача объекта')?>:</span> <span><?= $item?->date; ?></span></p><br>
                            <p><span><?=Yii::t('frontend', 'Варианты юнитов')?>:</span> <span><?= $item?->variant; ?></span></p>
                            <p class="dn"><span><?=Yii::t('frontend', 'Начальная цена')?> ($):</span> <span><?= $item?->price; ?></span></p>
                        </footer>
                        <div class="card-popup">
                            <p class="popup-desc">
                                <p><?= $item->content->desc ?? $item->excerpt ?? ''; ?></p>
                            </p>
                            <div class="popup-connect">
                                <ul class="popup-phone">
                                    <li>
                                        <span>
                                            <span>GR:</span><a href="tel:+995555932307">+995 555 932 307</a>
                                        </span>
                                        <span>
                                            <a href="https://telegram.me/+995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                                            <a href="https://wa.me/995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <span>RU:</span><a href="tel:89646353313">+7 964 635 33 13</a>
                                        </span>
                                        <span>
                                            <a href="https://telegram.me/+89646353313"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                                            <a href="https://wa.me/+89646353313"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                        </span>
                                        <span>
                                            <a href="https://telegram.me/+77002100685"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                                            <a href="https://wa.me/+77002100685"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                                        </span>
                                    </li>
                                </ul>
                                <div class="popup-action">
                                    <a href="" class="btn-black btn form-target">
                                        <span>
                                            <span><?=Yii::t('frontend', 'Хочу этот объект')?></span>
                                            <svg width="16" height="16"><use xlink:href="/images/icons.svg#arrow"></use></svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-button-next projects-next"></div>
        <div class="swiper-button-prev projects-prev"></div>
        <div class="swiper-pagination pagination"></div>
    </div>