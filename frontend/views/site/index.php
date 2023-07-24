<?php

/** @var yii\web\View $this */

// $this->title = 'Real Estate';
$this->title = Yii::t('frontend', 'Подбор и продажа инвестиционных предложений в Грузии.');
$this->registerJsFile(
    "//maps.googleapis.com/maps/api/js?key=AIzaSyD2FYsdSyKCF85BXwjTabp2lj0hk5YPWsc&region=EN&language=en",
    ['position' => $this::POS_END, 'async'=>true]
);
$this->registerJs("var districtsData = [
    {
        id: 1,
        name: 'Old City',
        polygon: [
            {lng: 41.6196452, lat: 41.6451351},
            {lng: 41.6196633, lat: 41.6450409},
            {lng: 41.6196089, lat: 41.6449587},
            {lng: 41.6180962, lat: 41.6438202},
            {lng: 41.6186059, lat: 41.6433712},
            {lng: 41.6193784, lat: 41.6427218},
            {lng: 41.621036, lat: 41.6416274},
            {lng: 41.6219453, lat: 41.6409679},
            {lng: 41.6230154, lat: 41.6402523},
            {lng: 41.6241902, lat: 41.6410621},
            {lng: 41.6402405, lat: 41.646033},
            {lng: 41.6410559, lat: 41.6461292},
            {lng: 41.6418284, lat: 41.646001},
            {lng: 41.6489952, lat: 41.6444937},
            {lng: 41.6491508, lat: 41.6463377},
            {lng: 41.6475415, lat: 41.6463658},
            {lng: 41.6463506, lat: 41.6466463},
            {lng: 41.645731, lat: 41.646971},
            {lng: 41.6452348, lat: 41.6473478},
            {lng: 41.6449505, lat: 41.6477808},
            {lng: 41.6447359, lat: 41.648855},
            {lng: 41.6443282, lat: 41.6502339},
            {lng: 41.6437381, lat: 41.6510837},
            {lng: 41.6443604, lat: 41.6528634},
            {lng: 41.6437596, lat: 41.6530237},
            {lng: 41.6433304, lat: 41.6528955},
            {lng: 41.6425257, lat: 41.6540418},
            {lng: 41.6429442, lat: 41.6548474},
            {lng: 41.6431051, lat: 41.6552923},
            {lng: 41.6430622, lat: 41.6556129},
            {lng: 41.6393822, lat: 41.6569036},
            {lng: 41.6387009, lat: 41.6570158},
            {lng: 41.6379338, lat: 41.6570639},
            {lng: 41.6369575, lat: 41.6568956},
            {lng: 41.6361314, lat: 41.656599},
            {lng: 41.635391, lat: 41.6562462},
            {lng: 41.6260325, lat: 41.6512401},
            {lng: 41.6186916, lat: 41.6463938},
            {lng: 41.6196452, lat: 41.6451351}
        ],
        position: { lng: 41.6315, lat: 41.64743 },
        labelColor: '#ffffff',
        color: '#FF0000'
    },
    {
        id: 2,
        name: 'Alley of Heroes',
        polygon: [
            {lng: 41.6070363, lat: 41.6353766},
            {lng: 41.6101491, lat: 41.6336757},
            {lng: 41.6111368, lat: 41.633162},
            {lng: 41.6121674, lat: 41.6326723},
            {lng: 41.6148412, lat: 41.6345968},
            {lng: 41.6174275, lat: 41.636397},
            {lng: 41.6186406, lat: 41.6371547},
            {lng: 41.6229445, lat: 41.6402738},
            {lng: 41.6209007, lat: 41.641715},
            {lng: 41.6196079, lat: 41.6425469},
            {lng: 41.6186316, lat: 41.6433607},
            {lng: 41.6181165, lat: 41.6438417},
            {lng: 41.6166283, lat: 41.6428079},
            {lng: 41.6114495, lat: 41.6389518},
            {lng: 41.6070363, lat: 41.6353766}
        ],
        position: { lng:41.61444, lat: 41.63797 },
        labelColor: '#ffffff',
        color: '#ff6e00'
    },
    {
        id: 3,
        name: 'New Boulevard',
        polygon: [
            {lng: 41.5890464, lat: 41.6190985},
            {lng: 41.5944645, lat: 41.6159383},
            {lng: 41.5947648, lat: 41.6163634},
            {lng: 41.5959664, lat: 41.6175144},
            {lng: 41.596814, lat: 41.6180818},
            {lng: 41.59749, lat: 41.6188699},
            {lng: 41.5974498, lat: 41.6192168},
            {lng: 41.5975597, lat: 41.6201171},
            {lng: 41.5975999, lat: 41.6202294},
            {lng: 41.5978131, lat: 41.620482},
            {lng: 41.5982362, lat: 41.6208971},
            {lng: 41.6001644, lat: 41.6223878},
            {lng: 41.6005492, lat: 41.62264},
            {lng: 41.6011063, lat: 41.6230949},
            {lng: 41.6014654, lat: 41.6234326},
            {lng: 41.6020605, lat: 41.6238986},
            {lng: 41.6041848, lat: 41.6245423},
            {lng: 41.6042921, lat: 41.6246395},
            {lng: 41.6043725, lat: 41.6247884},
            {lng: 41.604445, lat: 41.6251856},
            {lng: 41.604567, lat: 41.6255326},
            {lng: 41.6046817, lat: 41.6260549},
            {lng: 41.6052298, lat: 41.6270539},
            {lng: 41.6061155, lat: 41.6284616},
            {lng: 41.6062715, lat: 41.6286102},
            {lng: 41.6076206, lat: 41.6296367},
            {lng: 41.6074503, lat: 41.6300537},
            {lng: 41.6081993, lat: 41.6304667},
            {lng: 41.6103602, lat: 41.6318039},
            {lng: 41.610931, lat: 41.6320956},
            {lng: 41.6116724, lat: 41.6324339},
            {lng: 41.6117668, lat: 41.6324747},
            {lng: 41.612049, lat: 41.6326479},
            {lng: 41.6118107, lat: 41.6327919},
            {lng: 41.6113938, lat: 41.6329821},
            {lng: 41.6094151, lat: 41.6340355},
            {lng: 41.6069911, lat: 41.6353414},
            {lng: 41.6026163, lat: 41.6318753},
            {lng: 41.601632, lat: 41.6307666},
            {lng: 41.6014711, lat: 41.6305181},
            {lng: 41.6014335, lat: 41.6303136},
            {lng: 41.6015247, lat: 41.6301091},
            {lng: 41.6021577, lat: 41.6295798},
            {lng: 41.602265, lat: 41.629267},
            {lng: 41.5948836, lat: 41.6228352},
            {lng: 41.5928719, lat: 41.6225264},
            {lng: 41.5922309, lat: 41.6223801},
            {lng: 41.5916099, lat: 41.6221384},
            {lng: 41.5911178, lat: 41.6218166},
            {lng: 41.5894115, lat: 41.6201407},
            {lng: 41.5889446, lat: 41.6195755},
            {lng: 41.588899, lat: 41.619337},
            {lng: 41.5890464, lat: 41.6190985}
        ],
        position: { lng: 41.60077, lat: 41.62613 },
        labelColor: '#ffffff',
        color: '#00a99d'
    },
    {
        id: 4,
        name: ' ',
        polygon: [
            {lng: 41.6985371, lat: 41.6819989},
            {lng: 41.6922929, lat: 41.6735528},
            {lng: 41.6913836, lat: 41.6726813},
            {lng: 41.6922124, lat: 41.6715213},
            {lng: 41.6936769, lat: 41.671349},
            {lng: 41.6955116, lat: 41.6717737},
            {lng: 41.6975338, lat: 41.6730118},
            {lng: 41.6994703, lat: 41.674875},
            {lng: 41.7018845, lat: 41.6791142},
            {lng: 41.7017719, lat: 41.6796551},
            {lng: 41.6996207, lat: 41.6814299},
            {lng: 41.6985371, lat: 41.6819989}
        ],
        position: { lng:41.69689, lat: 41.67636 },
        labelColor: '#ffffff',
        color: '#f8e71c'
    },
    {
        id: 5,
        name: 'Gonio-Kvariati',
        polygon: [
            { lng: 41.5633444, lat: 41.5512717},
            { lng: 41.5616273, lat: 41.5451643},
            { lng: 41.561284, lat: 41.5447949},
            { lng: 41.5604042, lat: 41.5443131},
            { lng: 41.5593742, lat: 41.5435101},
            { lng: 41.5592026, lat: 41.5422895},
            { lng: 41.5592455, lat: 41.5399447},
            { lng: 41.5618204, lat: 41.5389168},
            { lng: 41.565039, lat: 41.538981},
            { lng: 41.5671419, lat: 41.5393986},
            { lng: 41.5689443, lat: 41.5409083},
            { lng: 41.5695881, lat: 41.5427071},
            { lng: 41.5693096, lat: 41.5441737},
            { lng: 41.5680221, lat: 41.5468717},
            { lng: 41.5659193, lat: 41.5484133},
            { lng: 41.5652326, lat: 41.5498265},
            { lng: 41.565061, lat: 41.5514002},
            { lng: 41.5642456, lat: 41.5517214},
            { lng: 41.5633444, lat: 41.5512717}
        ],
        position: { lng: 41.5639351, lat: 41.5437867 },
        labelColor: '#ffffff',
        color: '#ab47bc'
    }
];",$this::POS_HEAD);
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
                <div class="first-content">
                    <p class="first-num michroma">01</p>
                    <div class="first-inner">
                        <p class="title">
                            <?=Yii::t('frontend', 'Сэкономьте время и деньги на изучение и анализ')?>
                        </p><br>
                        <p class="lead">
                            <!-- <?//=Yii::t('frontend', 'отправить вложение в')?> <a href="https://wa.me/995555932307"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a> -->
                        </p>
                    </div>
                    <a href="#" class="first-consultation border border-white form-target"><?=Yii::t('frontend', 'Консультация')?>&#8195;<svg width="16" height="16"><use xlink:href="/images/icons.svg#arrow"></use></svg></a>
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

