<?php

/** @var yii\web\View $this */

// $this->title = 'Real Estate';
$this->title = Yii::t('frontend', 'Подбор и продажа инвестиционных предложений в Грузии.');
$c = \backend\modules\language\models\Language::find()->where(['deleted_at' => null, 'key' => Yii::$app->language])->one()->code;
$this->registerJsFile(
    "//maps.googleapis.com/maps/api/js?key=AIzaSyD2FYsdSyKCF85BXwjTabp2lj0hk5YPWsc&region={$c}&language={$c}",
    ['position' => $this::POS_END, 'async'=>true]
);
$this->registerJs("var graph = $graph", $this::POS_END);
$this->registerJs("var districtsData = $data", $this::POS_END);

?>
<main>
<section class="first">
    <div class="container-lg" style="max-width: 1920px; margin-left: auto; margin-right: auto">
        <div class="first-bg background">
            <div class="swiper first-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="images/index/first/first-1-480-1x.jpg, images/index/first/first-1-480-2x.jpg 2x" media="(max-width: 481px)">
                            <source srcset="images/index/first/first-1-1440-1x.jpg, images/index/first/first-1-1440-2x.jpg 2x" media="(max-width: 1440px)">
                            <source srcset="images/index/first/first-1-1600-1x.jpg, images/index/first/first-1-1600-2x.jpg 2x" media="(max-width: 1600px)">
                            <source srcset="images/index/first/first-1-1920-1x.jpg, images/index/first/first-1-1920-2x.jpg 2x" media="(min-width: 1600px)">
                            <source type="image/jpeg" srcset="images/index/first/first-1-1600-1x.jpg, images/index/first/first-1-1600-2x.jpg 2x">
                            <img src="images/index/first/first-1-1600-1x.jpg" alt="">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="images/index/first/first-2-480-2x.jpg" media="(max-width: 481px)">
                            <source type="image/jpeg" srcset="images/index/first/first-2-1920-2x.jpg">
                            <img src="images/index/first/first-2-1920-2x.jpg" alt="">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="images/index/first/first-3-480-2x.jpg" media="(max-width: 481px)">
                            <source type="image/jpeg" srcset="images/index/first/first-3-1920-2x.jpg">
                            <img src="images/index/first/first-3-1920-2x.jpg" alt="">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="images/index/first/first-4-480-2x.jpg" media="(max-width: 481px)">
                            <source type="image/jpeg" srcset="images/index/first/first-4-1920-2x.jpg">
                            <img src="images/index/first/first-4-1920-2x.jpg" alt="">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="images/index/first/first-5-480-2x.jpg" media="(max-width: 481px)">
                            <source type="image/jpeg" srcset="images/index/first/first-5-1920-2x.jpg">
                            <img src="images/index/first/first-5-1920-2x.jpg" alt="">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="images/index/first/first-6-480-2x.jpg" media="(max-width: 481px)">
                            <source type="image/jpeg" srcset="images/index/first/first-6-1920-2x.jpg">
                            <img src="images/index/first/first-6-1920-2x.jpg" alt="">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="images/index/first/first-7-480-2x.jpg" media="(max-width: 481px)">
                            <source type="image/jpeg" srcset="images/index/first/first-7-1920-2x.jpg">
                            <img src="images/index/first/first-7-1920-2x.jpg" alt="">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="images/index/first/first-8-480-2x.jpg" media="(max-width: 481px)">
                            <source type="image/jpeg" srcset="images/index/first/first-8-1920-2x.jpg">
                            <img src="images/index/first/first-8-1920-2x.jpg" alt="">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next first-button-next"></div>
        <div class="swiper-button-prev first-button-prev"></div>
        <div class="container" style="max-width: 1204px; margin-left: auto; margin-right: auto">
            <div class="first-wrapper shadow-black">
                <div thumbsSlider="" class="swiper thumbs-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="first-content">
                                <p class="first-num michroma">01</p>
                                <div class="first-inner">
                                    <p class="title">
                                        <?=Yii::t('frontend', 'Своя недвижимость у моря в премиальном проекте')?>
                                    </p>
                                </div>
                                <a href="#" class="first-consultation border border-white form-target"><?=Yii::t('frontend', 'Консультация')?>&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="first-content large">
                                <p class="first-num michroma">02</p>
                                <div class="first-inner">
                                    <p class="title">
                                        <?=Yii::t('frontend', 'Владейте частью бренда.<br> Апартаменты в международном отеле<br> Wyndham Hotels & Resorts')?>
                                    </p>
                                </div>
                                <a href="#" class="first-consultation border border-white form-target"><?=Yii::t('frontend', 'Консультация')?>&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="first-content left">
                                <p class="first-num michroma">03</p>
                                <div class="first-inner">
                                    <p class="title">
                                        <?=Yii::t('frontend', 'Предложения на 1-й линии моря с доходом 15% годовых')?>
                                    </p>
                                </div>
                                <a href="#" class="first-consultation border border-white form-target"><?=Yii::t('frontend', 'Консультация')?>&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="first-content left small small-text">
                                <p class="first-num michroma">04</p>
                                <div class="first-inner">
                                    <p class="title">
                                        <?=Yii::t('frontend', 'Лучшее место для жизни и отдыха 1-я береговая линия при отеле Radisson Blu')?>
                                    </p>
                                </div>
                                <a href="#" class="first-consultation border border-white form-target"><?=Yii::t('frontend', 'Консультация')?>&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="first-content left">
                                <p class="first-num michroma">05</p>
                                <div class="first-inner">
                                    <p class="title">
                                        <?=Yii::t('frontend', 'Премиальная недвижимость с брендовым отелем Novotel')?>
                                    </p>
                                </div>
                                <a href="#" class="first-consultation border border-white form-target"><?=Yii::t('frontend', 'Консультация')?>&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="first-content">
                                <p class="first-num michroma">06</p>
                                <div class="first-inner">
                                    <p class="title">
                                        <?=Yii::t('frontend', 'Центральный проект города!<br> С самой большой инфраструктурой')?>
                                    </p>
                                </div>
                                <a href="#" class="first-consultation border border-white form-target"><?=Yii::t('frontend', 'Консультация')?>&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="first-content">
                                <p class="first-num michroma">07</p>
                                <div class="first-inner">
                                    <p class="title">
                                        <?=Yii::t('frontend', 'Готовые загородные апартаменты с повышенным комфортом')?>
                                    </p>
                                </div>
                                <a href="#" class="first-consultation border border-white form-target"><?=Yii::t('frontend', 'Консультация')?>&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="first-content left dark">
                                <p class="first-num michroma">08</p>
                                <div class="first-inner">
                                    <p class="title">
                                        <?=Yii::t('frontend', 'Новый проект 2023 года. Узнайте о стоимости и проекте online!')?>
                                    </p>
                                </div>
                                <a href="#" class="first-consultation border border-white form-target"><?=Yii::t('frontend', 'Консультация')?>&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="first-switch">
                    <div class="first-item" data-item="03">
                        <p class="first-digit michroma">01</p>
                        <p class="first-desc"><?=Yii::t('frontend', 'Выгодные проекты для инвестиций')?></p>
                    </div>
                    <div class="first-item" data-item="02">
                        <p class="first-digit michroma">02</p>
                        <p class="first-desc"><?=Yii::t('frontend', 'Апартаменты с видом на море')?></p>
                    </div>
                    <div class="first-item" data-item="06">
                        <p class="first-digit michroma">03</p>
                        <p class="first-desc"><?=Yii::t('frontend', 'Крупные проекты')?></p>
                    </div>
                    <div class="first-item" data-item="07">
                        <p class="first-digit michroma">04</p>
                        <p class="first-desc"><?=Yii::t('frontend', 'Загородная недвижимость')?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->render('projects', compact('model', 'options')) ?>
<?= $this->render('_services') ?>
<section class="opinion container" style="max-width: 1204px; margin-left: auto; margin-right: auto">
    <div class="opinion-img main-border-radius">
        <picture>
            <img src="/images/index/opinion/opinion.jpg" alt="">
        </picture>
    </div>
    <div class="opinion-desc">
        <p class="title"><?=Yii::t('frontend', 'Мнение эксперта')?></p>
        <p>
            <?=Yii::t('frontend', 'Самый заметный рост на рынке жилья Грузии начался с начала 2022 года +38%, с развитием сегмента новостроек можно отметить рост цен и быстрое развитие рынка за последние 5 лет. Вторичный рынок столкнулся с дефицитом эксклюзивных предложений от 80 кв.')?>
        </p>
        <p class="right"><?=Yii::t('frontend', 'Эксперт по недвижимости - Халина Александра')?></p>
        <!-- <p><?//=Yii::t('frontend', 'средняя стоимость недвижимость в Грузии новостройки за 1 кв.м')?></p> -->
    </div>
    <div class="opinion-chart">
        <p class="center"><?=Yii::t('frontend', 'средняя стоимость за 1 кв.м в Грузии')?></p>
        <canvas class="opinion-chart" id="chart"></canvas>
    </div>
</section>
<?= $this->render('districts', compact('districts')) ?>
<section class="experts container" style="max-width: 1204px; margin-left: auto; margin-right: auto">
    <p class="title"><?=Yii::t('frontend', 'Наши специалисты')?></p>
    <div class="swiper experts-swiper card">
        <div class="swiper-wrapper text-white shadow-black">
            <div class="swiper-slide destination fz" data-class="expert">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="/images/index/experts/experts-1.jpg" alt="">
                    </picture>
                </div>
                <div class="card-content">
                    <header>
                        <a href="#" class="card-link-hover target popup-hide"><svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg></a>
                    </header>
                    <footer class="card-inner">
                        <div>
                            <p class="subtitle"><?=Yii::t('frontend', 'Брокер по продаже недвижимости')?></p><br>
                            <p class="caption"><?=Yii::t('frontend', 'Пермяков андрей')?><span class="card-popup">&nbsp;</span></p><br>
                            <p><?=Yii::t('frontend', 'Языки')?>: <?=Yii::t('frontend', 'Английский')?>, <?=Yii::t('frontend', 'Русский')?></p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">+7 964 635 33 13</a>
                            </span>
                            <span>
                                <a href="https://telegram.me/+995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                                <a href="https://wa.me/995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            </span>
                        </div>
                        <aside>
                            <div class="card-popup"><?=Yii::t('frontend', 'Соцсети')?>:</div>
                            <a href="https://telegram.me/+995555932307" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                            <a href="https://wa.me/995555932307" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            <a href="mailto:dda.rea.est@gmail.com" class="card-link"><svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg></a>
                        </aside>
                        <div class="popup-action card-popup">
                            <a href="" class="btn-black btn form-target">
                                <span>
                                    <span><?=Yii::t('frontend', 'Получить консультацию')?></span>
                                    <svg width="16" height="16"><use xlink:href="/images/icons.svg#arrow"></use></svg>
                                </span>
                            </a>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="swiper-slide destination fz" data-class="expert">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="/images/index/experts/experts-2.jpg" alt="">
                    </picture>
                </div>
                <div class="card-content">
                    <header>
                        <a href="#" class="card-link-hover target popup-hide"><svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg></a>
                    </header>
                    <footer class="card-inner">
                        <div>
                            <p class="subtitle"><?=Yii::t('frontend', 'Брокер по продаже недвижимости')?></p><br>
                            <p class="caption"><?=Yii::t('frontend', 'ибрагимов егор')?><span class="card-popup">&nbsp;</span></p><br>
                            <p><?=Yii::t('frontend', 'Языки')?>: <?=Yii::t('frontend', 'Английский')?>, <?=Yii::t('frontend', 'Русский')?></p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">+7 964 635 33 13</a>
                            </span>
                            <span>
                                <a href="https://telegram.me/+995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                                <a href="https://wa.me/995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            </span>
                        </div>
                        <aside>
                            <div class="card-popup"><?=Yii::t('frontend', 'Соцсети')?>:</div>
                            <a href="https://telegram.me/+995555932307" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                            <a href="https://wa.me/995555932307" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            <a href="mailto:dda.rea.est@gmail.com" class="card-link"><svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg></a>
                        </aside>
                        <div class="popup-action card-popup">
                            <a href="" class="btn-black btn form-target">
                                <span>
                                    <span><?=Yii::t('frontend', 'Получить консультацию')?></span>
                                    <svg width="16" height="16"><use xlink:href="/images/icons.svg#arrow"></use></svg>
                                </span>
                            </a>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="swiper-slide destination fz" data-class="expert">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="/images/index/experts/experts-3.jpg" alt="">
                    </picture>
                </div>
                <div class="card-content">
                    <header>
                        <a href="#" class="card-link-hover target popup-hide"><svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg></a>
                    </header>
                    <footer class="card-inner">
                        <div>
                            <p class="subtitle"><?=Yii::t('frontend', 'Брокер по продаже недвижимости')?></p><br>
                            <p class="caption"><?=Yii::t('frontend', 'халина александра')?><span class="card-popup">&nbsp;</span></p><br>
                            <p><?=Yii::t('frontend', 'Языки')?>: <?=Yii::t('frontend', 'Английский')?>, <?=Yii::t('frontend', 'Русский')?></p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">+7 964 635 33 13</a>
                            </span>
                            <span>
                                <a href="https://telegram.me/+995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                                <a href="https://wa.me/995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            </span>
                        </div>
                        <aside>
                            <div class="card-popup"><?=Yii::t('frontend', 'Соцсети')?>:</div>
                            <a href="https://telegram.me/+995555932307" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                            <a href="https://wa.me/995555932307" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            <a href="mailto:dda.rea.est@gmail.com" class="card-link"><svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg></a>
                        </aside>
                        <div class="popup-action card-popup">
                            <a href="" class="btn-black btn form-target">
                                <span>
                                    <span><?=Yii::t('frontend', 'Получить консультацию')?></span>
                                    <svg width="16" height="16"><use xlink:href="/images/icons.svg#arrow"></use></svg>
                                </span>
                            </a>
                        </div>
                    </footer>
                </div>
            </div>

            <!-- <div class="swiper-slide destination" data-class="expert">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="/images/index/experts/experts-1.jpg" alt="">
                    </picture>
                </div>
                <div class="card-content">
                    <header>
                        <a href="#" class="card-link-hover target popup-hide"><svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg></a>
                    </header>
                    <footer class="card-inner">
                        <div>
                            <p class="subtitle"><?=Yii::t('frontend', 'Брокер по продаже недвижимости')?></p><br>
                            <p class="caption">Пермяков андрей<span class="card-popup">&nbsp;Романович</span></p><br>
                            <p>Языки: <?=Yii::t('frontend', 'Английский')?>, <?=Yii::t('frontend', 'Русский')?></p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">+7 964 635 33 13</a>
                            </span>
                            <span>
                                <a href="https://telegram.me/+995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                                <a href="https://wa.me/995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            </span>
                        </div>
                        <aside>
                            <div class="card-popup">Соцсети:</div>
                            <a href="https://telegram.me/+995555932307" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                            <a href="https://wa.me/995555932307" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            <a href="mailto:dda.rea.est@gmail.com" class="card-link"><svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg></a>
                        </aside>
                        <div class="popup-action card-popup">
                            <a href="" class="btn-black btn form-target">
                                <span>
                                    <span>Получить консультацию</span>
                                    <svg width="16" height="16"><use xlink:href="/images/icons.svg#arrow"></use></svg>
                                </span>
                            </a>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="swiper-slide destination" data-class="expert">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="/images/index/experts/experts-2.jpg" alt="">
                    </picture>
                </div>
                <div class="card-content">
                    <header>
                        <a href="#" class="card-link-hover target popup-hide"><svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg></a>
                    </header>
                    <footer class="card-inner">
                        <div>
                            <p class="subtitle"><?=Yii::t('frontend', 'Брокер по продаже недвижимости')?></p><br>
                            <p class="caption">ибрагимов егор<span class="card-popup">&nbsp;</span></p><br>
                            <p>Языки: <?=Yii::t('frontend', 'Английский')?>, <?=Yii::t('frontend', 'Русский')?></p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">+7 964 635 33 13</a>
                            </span>
                            <span>
                                <a href="https://telegram.me/+995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                                <a href="https://wa.me/995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            </span>
                        </div>
                        <aside>
                            <div class="card-popup">Соцсети:</div>
                            <a href="https://telegram.me/+995555932307" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                            <a href="https://wa.me/995555932307" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            <a href="mailto:dda.rea.est@gmail.com" class="card-link"><svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg></a>
                        </aside>
                        <div class="popup-action card-popup">
                            <a href="" class="btn-black btn form-target">
                                <span>
                                    <span>Получить консультацию</span>
                                    <svg width="16" height="16"><use xlink:href="/images/icons.svg#arrow"></use></svg>
                                </span>
                            </a>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="swiper-slide destination" data-class="expert">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="/images/index/experts/experts-3.jpg" alt="">
                    </picture>
                </div>
                <div class="card-content">
                    <header>
                        <a href="#" class="card-link-hover target popup-hide"><svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg></a>
                    </header>
                    <footer class="card-inner">
                        <div>
                            <p class="subtitle"><?=Yii::t('frontend', 'Брокер по продаже недвижимости')?></p><br>
                            <p class="caption">халина александра<span class="card-popup">&nbsp;</span></p><br>
                            <p>Языки: <?=Yii::t('frontend', 'Английский')?>, <?=Yii::t('frontend', 'Русский')?></p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">+7 964 635 33 13</a>
                            </span>
                            <span>
                                <a href="https://telegram.me/+995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                                <a href="https://wa.me/995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            </span>
                        </div>
                        <aside>
                            <div class="card-popup">Соцсети:</div>
                            <a href="https://telegram.me/+995555932307" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                            <a href="https://wa.me/995555932307" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            <a href="mailto:dda.rea.est@gmail.com" class="card-link"><svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg></a>
                        </aside>
                        <div class="popup-action card-popup">
                            <a href="" class="btn-black btn form-target">
                                <span>
                                    <span>Получить консультацию</span>
                                    <svg width="16" height="16"><use xlink:href="/images/icons.svg#arrow"></use></svg>
                                </span>
                            </a>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="swiper-slide destination" data-class="expert">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="/images/index/experts/experts-1.jpg" alt="">
                    </picture>
                </div>
                <div class="card-content">
                    <header>
                        <a href="#" class="card-link-hover target popup-hide"><svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg></a>
                    </header>
                    <footer class="card-inner">
                        <div>
                            <p class="subtitle"><?=Yii::t('frontend', 'Брокер по продаже недвижимости')?></p><br>
                            <p class="caption">Пермяков андрей<span class="card-popup">&nbsp;Романович</span></p><br>
                            <p>Языки: <?=Yii::t('frontend', 'Английский')?>, <?=Yii::t('frontend', 'Русский')?></p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">+7 964 635 33 13</a>
                            </span>
                            <span>
                                <a href="https://telegram.me/+995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                                <a href="https://wa.me/995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            </span>
                        </div>
                        <aside>
                            <div class="card-popup">Соцсети:</div>
                            <a href="https://telegram.me/+995555932307" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                            <a href="https://wa.me/995555932307" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            <a href="mailto:dda.rea.est@gmail.com" class="card-link"><svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg></a>
                        </aside>
                        <div class="popup-action card-popup">
                            <a href="" class="btn-black btn form-target">
                                <span>
                                    <span>Получить консультацию</span>
                                    <svg width="16" height="16"><use xlink:href="/images/icons.svg#arrow"></use></svg>
                                </span>
                            </a>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="swiper-slide destination" data-class="expert">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="/images/index/experts/experts-2.jpg" alt="">
                    </picture>
                </div>
                <div class="card-content">
                    <header>
                        <a href="#" class="card-link-hover target popup-hide"><svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg></a>
                    </header>
                    <footer class="card-inner">
                        <div>
                            <p class="subtitle"><?=Yii::t('frontend', 'Брокер по продаже недвижимости')?></p><br>
                            <p class="caption">ибрагимов егор<span class="card-popup">&nbsp;</span></p><br>
                            <p>Языки: <?=Yii::t('frontend', 'Английский')?>, <?=Yii::t('frontend', 'Русский')?></p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">+7 964 635 33 13</a>
                            </span>
                            <span>
                                <a href="https://telegram.me/+995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                                <a href="https://wa.me/995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            </span>
                        </div>
                        <aside>
                            <div class="card-popup">Соцсети:</div>
                            <a href="https://telegram.me/+995555932307" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                            <a href="https://wa.me/995555932307" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            <a href="mailto:dda.rea.est@gmail.com" class="card-link"><svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg></a>
                        </aside>
                        <div class="popup-action card-popup">
                            <a href="" class="btn-black btn form-target">
                                <span>
                                    <span>Получить консультацию</span>
                                    <svg width="16" height="16"><use xlink:href="/images/icons.svg#arrow"></use></svg>
                                </span>
                            </a>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="swiper-slide destination" data-class="expert">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="/images/index/experts/experts-3.jpg" alt="">
                    </picture>
                </div>
                <div class="card-content">
                    <header>
                        <a href="#" class="card-link-hover target popup-hide"><svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg></a>
                    </header>
                    <footer class="card-inner">
                        <div>
                            <p class="subtitle"><?=Yii::t('frontend', 'Брокер по продаже недвижимости')?></p><br>
                            <p class="caption">халина александра<span class="card-popup">&nbsp;Романович</span></p><br>
                            <p>Языки: <?=Yii::t('frontend', 'Английский')?>, <?=Yii::t('frontend', 'Русский')?></p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">+7 964 635 33 13</a>
                            </span>
                            <span>
                                <a href="https://telegram.me/+995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                                <a href="https://wa.me/995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            </span>
                        </div>
                        <aside>
                            <div class="card-popup">Соцсети:</div>
                            <a href="https://telegram.me/+995555932307" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                            <a href="https://wa.me/995555932307" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            <a href="mailto:dda.rea.est@gmail.com" class="card-link"><svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg></a>
                        </aside>
                        <div class="popup-action card-popup">
                            <a href="" class="btn-black btn form-target">
                                <span>
                                    <span>Получить консультацию</span>
                                    <svg width="16" height="16"><use xlink:href="/images/icons.svg#arrow"></use></svg>
                                </span>
                            </a>
                        </div>
                    </footer>
                </div>
            </div> -->
        </div>
        <div class="swiper-button-next experts-next"></div>
        <div class="swiper-button-prev experts-prev"></div>
        <div class="swiper-pagination pagination"></div>
    </div>
</section>
<?= $this->render('_form') ?>
<section class="company container" style="max-width: 1204px; margin-left: auto; margin-right: auto">
    <div class="company-desc">
        <p class="subtitle">DDA Real Estate</p><br>
        <p class="title"><?=Yii::t('frontend', 'О компании')?></p>
        <input type="checkbox" class="read-more-state" id="post-1">
        <p class="read-more-wrap">
            <?=Yii::t('frontend', 'Международное агентство по продаже недвижимости в Грузии,ОАЭ, Турции и Тайланде, созданное в 2007 году, входит в группу компаний «Бизнес - Юрист». Единственная Компания на рынке ,которая имеет более 400 филиалов в России от Калининграда до Камчатки ,офисы в Казахстане, Белоруссии, Турции и головной офис в Дубае.<br>
            <span class="read-more-target">Мы стремимся учитывать индивидуальные потребности каждого нашего Клиента и предоставить наиболее эффективные решения для реализации их целей в области недвижимости. Наша команда профессионалов всегда готова ответить на любые вопросы и предоставить полную информацию о всех услугах агентства.<br>
            Мы уделяем особое внимание своей репутации и несем ответственность за все свои действия. Именно поэтому мы уверены в качестве наших услуг и уверены, что сможем удовлетворить все запросы и потребности наших Клиентов в области недвижимости.<br>
            Выбирая нашу Компанию, Вы можете быть уверены, что получите лучший сервис и профессиональную помощь в решении всех вопросов, связанных с недвижимостью. Мы всегда готовы помочь Вам достигнуть ваших целей в сфере недвижимости и обеспечить высококачественный сервис.')?>
            </span>
        </p>
        <label for="post-1" class="read-more-trigger"></label>
    </div>
    <div class="company-img">
        <picture>
            <img src="images/about/about.jpg" alt="">
        </picture>
    </div>
    <a href="<?= \yii\helpers\Url::toRoute('/about'); ?>" class="company-btn btn">
        <span>
            <span><?=Yii::t('frontend', 'Подробнее')?></span>
        </span>
        <svg width="16" height="16"><use xlink:href="/images/icons.svg#arrow"></use></svg>
    </a>
    <!-- <div class="company-video">
        <video src="#"></video>
    </div> -->
</section>
</main>

