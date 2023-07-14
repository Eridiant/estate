<?php

/** @var yii\web\View $this */

$this->title = 'Real Estate';

?>
<main>
<section class="first">
    <div class="container-lg" style="max-width: 1920px; margin-left: auto; margin-right: auto">
        <div class="first-bg background">
            <picture>
				<source srcset="/images/index/first/first-1-480-1x.jpg, images/index/first/first-1-480-2x.jpg 2x" media="(max-width: 481px)">
				<source srcset="/images/index/first/first-1-1440-1x.jpg, images/index/first/first-1-1440-2x.jpg 2x" media="(max-width: 1440px)">
				<source srcset="/images/index/first/first-1-1600-1x.jpg, images/index/first/first-1-1600-2x.jpg 2x" media="(max-width: 1600px)">
				<source srcset="/images/index/first/first-1-1920-1x.jpg, images/index/first/first-1-1920-2x.jpg 2x" media="(min-width: 1600px)">
                <source type="image/jpeg" srcset="/images/index/first/first-1-1600-1x.jpg, images/index/first/first-1-1600-2x.jpg 2x">
                <img src="/images/index/first/first-1-1600-1x.jpg" alt="">
            </picture>
        </div>
        <div class="first-button">
            <div class="first-button-prev">
                <svg width="48" height="48"><use xlink:href="/images/icons.svg#pointer"></use></svg>
            </div>
            <div class="first-button-next">
                <svg width="48" height="48"><use xlink:href="/images/icons.svg#pointer"></use></svg>
            </div>
        </div>
        <div class="container" style="max-width: 1204px; margin-left: auto; margin-right: auto">
            <div class="first-wrapper shadow-black">
                <div class="first-content">
                    <p class="first-num michroma">01</p>
                    <div class="first-inner">
                        <p class="title">
                            Сэкономьте время и деньги на изучение и анализ
                        </p><br>
                        <p class="lead">
                            отправить вложение в <a href="https://wa.me/995555932307"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                        </p>
                    </div>
                    <a href="#" class="first-consultation border border-white form-target">Консультация&#8195;<svg width="16" height="16"><use xlink:href="/images/icons.svg#arrow"></use></svg></a>
                </div>
                <div class="first-switch">
                    <div class="first-item" data-item="03">
                        <p class="first-digit michroma">01</p>
                        <p class="first-desc">Выгодные проекты для инвестиций</p>
                    </div>
                    <div class="first-item" data-item="02">
                        <p class="first-digit michroma">02</p>
                        <p class="first-desc">Апартаменты с видом на море</p>
                    </div>
                    <div class="first-item" data-item="06">
                        <p class="first-digit michroma">03</p>
                        <p class="first-desc">Крупные проекты</p>
                    </div>
                    <div class="first-item" data-item="07">
                        <p class="first-digit michroma">04</p>
                        <p class="first-desc">Загородная недвижимость</p>
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
        <p class="title">Мнение эксперта</p>
        <p>
            Самый заметный рост на рынке жилья Грузии начался с начала 2022 года +38%, с развитием сегмента новостроек можно отметить рост цен и быстрое развитие рынка за последние 5 лет. Вторичный рынок столкнулся с дефицитом эксклюзивных предложений от 80 кв.
        </p>
        <p>средняя стоимость недвижимость в Грузии новостройки за 1 кв.м</p>
    </div>
    <div class="opinion-chart">
        <canvas class="opinion-chart" id="chart"></canvas>
    </div>
</section>
<section class="districts container" style="max-width: 1204px; margin-left: auto; margin-right: auto">
    <p class="title">Районы</p>
    <!-- <div class="swiper-buttons">
        <div class="districts-swiper-button-prev">&#8249;</div>
        <div class="districts-swiper-button-next">&#8250;</div>
    </div> -->
    <div class="swiper districts-swiper card">
        <div class="swiper-wrapper text-white shadow-black">
            <div class="swiper-slide destination" data-target="1">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="/images/index/districts/districts-1.jpg" alt="">
                    </picture>
                </div>
                <div class="card-content">
                    <header>
                        <p class="subtitle">район</p><br>
                        <p class="caption">Старый город</p>
                    </header>
                    <footer>
                        <p>
                            Район "Старый город" это культурное и центральное место всего города, ваша надежная инвестиция на долгие годы. Шаговая доступность ко всем услугам, изобилие выбора ресторанов, потрясающая архитектура города, является главным преимуществом для покупателя.
                        </p>
                        <a href="#" class="card-link-hover target popup-hide"><svg width="16" height="16">
                                <use xlink:href="/images/icons.svg#small-arrow"></use>
                            </svg></a>
                    </footer>
                </div>
            </div>
            <div class="swiper-slide destination" data-target="2">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="/images/index/districts/districts-2.jpg" alt="">
                    </picture>
                </div>
                <div class="card-content">
                    <header>
                        <p class="subtitle">район</p><br>
                        <p class="caption">Аллея героев</p>
                    </header>
                    <footer>
                        <p>
                            Район "Алея Героев" была открыта в 2012, концепция данного района это новый центр Батуми, жилые комплексы и небоскребы создают атмосферу мегаполиса с шаговой доступностью к морю. На аее высажены пальмы, прогулочная зона разделяющая дорогами с обеих сторон. Чаще девелоперы строят многофункциональные жилые комплексы.
                        </p>
                        <a href="#" class="card-link-hover target popup-hide"><svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg></a>
                    </footer>
                </div>
            </div>
            <div class="swiper-slide destination" data-target="3">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="/images/index/districts/districts-3.jpg" alt="">
                    </picture>
                </div>
                <div class="card-content">
                    <header>
                        <p class="subtitle">район</p><br>
                        <p class="caption">новый бульвар</p>
                    </header>
                    <footer>
                        <p>
                            Район "Новый бульвар" центральный и самая современный район для инвестиций, высокое количество предложений. Огромный парк спроектированный Испанский архитектором с детскими площадками и АРТ инсталляциями.
                        </p>
                        <a href="#" class="card-link-hover target popup-hide"><svg width="16" height="16">
                                <use xlink:href="/images/icons.svg#small-arrow"></use>
                            </svg></a>
                    </footer>
                </div>
            </div>


            <div class="swiper-slide destination" data-target="4">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="/images/index/districts/districts-4.jpg" alt="">
                    </picture>
                </div>
                <div class="card-content">
                    <header>
                        <p class="subtitle">район</p><br>
                        <p class="caption">Махинджаури</p>
                    </header>
                    <footer>
                        <p>
                            Район "Махинджаури" один из самых популярных районов для курортного отдыха, близкое расположение к морю, много новых проектов в стадии завершен. Интересный район для инвестиций
                        </p>
                        <a href="#" class="card-link-hover target popup-hide"><svg width="16" height="16">
                                <use xlink:href="/images/icons.svg#small-arrow"></use>
                            </svg></a>
                    </footer>
                </div>
            </div>
            <div class="swiper-slide destination" data-target="5">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="/images/index/districts/districts-5.jpg" alt="">
                    </picture>
                </div>
                <div class="card-content">
                    <header>
                        <p class="subtitle">район</p><br>
                        <p class="caption">Гонио-Квариати</p>
                    </header>
                    <footer>
                        <p>
                            Район "Гонио-Квариати" это оазис для жизни и отдыха, 80% этот район направлен на курортный формат, расположение до Батуми 10 минут на машине. Крупные франшизы отелей уже появиться в 2025-26 году.
                        </p>
                        <a href="#" class="card-link-hover target popup-hide"><svg width="16" height="16">
                                <use xlink:href="/images/icons.svg#small-arrow"></use>
                            </svg></a>
                    </footer>
                </div>
            </div>



            <div class="swiper-slide destination" data-target="1">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="/images/index/districts/districts-1.jpg" alt="">
                    </picture>
                </div>
                <div class="card-content">
                    <header>
                        <p class="subtitle">район</p><br>
                        <p class="caption">Старый город</p>
                    </header>
                    <footer>
                        <p>
                            Район "Старый город" это культурное и центральное место всего города, ваша надежная инвестиция на долгие годы. Шаговая доступность ко всем услугам, изобилие выбора ресторанов, потрясающая архитектура города, является главным преимуществом для покупателя.
                        </p>
                        <a href="#" class="card-link-hover target popup-hide"><svg width="16" height="16">
                                <use xlink:href="/images/icons.svg#small-arrow"></use>
                            </svg></a>
                    </footer>
                </div>
            </div>
            <div class="swiper-slide destination" data-target="2">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="/images/index/districts/districts-2.jpg" alt="">
                    </picture>
                </div>
                <div class="card-content">
                    <header>
                        <p class="subtitle">район</p><br>
                        <p class="caption">Аллея героев</p>
                    </header>
                    <footer>
                        <p>
                            Район "Алея Героев" была открыта в 2012, концепция данного района это новый центр Батуми, жилые комплексы и небоскребы создают атмосферу мегаполиса с шаговой доступностью к морю. На аее высажены пальмы, прогулочная зона разделяющая дорогами с обеих сторон. Чаще девелоперы строят многофункциональные жилые комплексы.
                        </p>
                        <a href="#" class="card-link-hover target popup-hide"><svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg></a>
                    </footer>
                </div>
            </div>
            <div class="swiper-slide destination" data-target="3">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="/images/index/districts/districts-3.jpg" alt="">
                    </picture>
                </div>
                <div class="card-content">
                    <header>
                        <p class="subtitle">район</p><br>
                        <p class="caption">новый бульвар</p>
                    </header>
                    <footer>
                        <p>
                            Район "Новый бульвар" центральный и самая современный район для инвестиций, высокое количество предложений. Огромный парк спроектированный Испанский архитектором с детскими площадками и АРТ инсталляциями.
                        </p>
                        <a href="#" class="card-link-hover target popup-hide"><svg width="16" height="16">
                                <use xlink:href="/images/icons.svg#small-arrow"></use>
                            </svg></a>
                    </footer>
                </div>
            </div>


            <div class="swiper-slide destination" data-target="4">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="/images/index/districts/districts-4.jpg" alt="">
                    </picture>
                </div>
                <div class="card-content">
                    <header>
                        <p class="subtitle">район</p><br>
                        <p class="caption">Махинджаури</p>
                    </header>
                    <footer>
                        <p>
                            Район "Махинджаури" один из самых популярных районов для курортного отдыха, близкое расположение к морю, много новых проектов в стадии завершен. Интересный район для инвестиций
                        </p>
                        <a href="#" class="card-link-hover target popup-hide"><svg width="16" height="16">
                                <use xlink:href="/images/icons.svg#small-arrow"></use>
                            </svg></a>
                    </footer>
                </div>
            </div>
            <div class="swiper-slide destination" data-target="5">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="/images/index/districts/districts-5.jpg" alt="">
                    </picture>
                </div>
                <div class="card-content">
                    <header>
                        <p class="subtitle">район</p><br>
                        <p class="caption">Гонио-Квариати</p>
                    </header>
                    <footer>
                        <p>
                            Район "Гонио-Квариати" это оазис для жизни и отдыха, 80% этот район направлен на курортный формат, расположение до Батуми 10 минут на машине. Крупные франшизы отелей уже появиться в 2025-26 году.
                        </p>
                        <a href="#" class="card-link-hover target popup-hide"><svg width="16" height="16">
                                <use xlink:href="/images/icons.svg#small-arrow"></use>
                            </svg></a>
                    </footer>
                </div>
            </div>

        </div>
        <div class="swiper-button-next districts-next"></div>
        <div class="swiper-button-prev districts-prev"></div>
        <div class="swiper-pagination pagination"></div>
    </div>
    <div class="districts-block">
        <div class="districts-img">
            <picture>
                <img src="/images/index/districts/map.jpg" alt="">
            </picture>
        </div>
        <div class="districts-svg">
            <object id="districts" data="/images/svg/districts/map.svg" type="image/svg+xml">
                <!-- <img src="/images/dist/bg-1920x1450.jpg" alt=""> -->
            </object>
        </div>
    </div>
</section>
<section class="experts container" style="max-width: 1204px; margin-left: auto; margin-right: auto">
    <p class="title">Наши специалисты</p>
    <div class="swiper experts-swiper card">
        <div class="swiper-wrapper text-white shadow-black">
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
                            <p class="subtitle">Брокер по продаже недвижимости</p><br>
                            <p class="caption">Пермяков андрей<span class="card-popup">&nbsp;Романович</span></p><br>
                            <p>Языки: Английский, Русский</p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
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
                            <p class="subtitle">Брокер по продаже недвижимости</p><br>
                            <p class="caption">ибрагимов егор<span class="card-popup">&nbsp;</span></p><br>
                            <p>Языки: Английский, Русский</p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
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
                            <p class="subtitle">Брокер по продаже недвижимости</p><br>
                            <p class="caption">халина александра<span class="card-popup">&nbsp;</span></p><br>
                            <p>Языки: Английский, Русский</p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
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
                            <p class="subtitle">Брокер по продаже недвижимости</p><br>
                            <p class="caption">Пермяков андрей<span class="card-popup">&nbsp;Романович</span></p><br>
                            <p>Языки: Английский, Русский</p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
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
                            <p class="subtitle">Брокер по продаже недвижимости</p><br>
                            <p class="caption">ибрагимов егор<span class="card-popup">&nbsp;</span></p><br>
                            <p>Языки: Английский, Русский</p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
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
                            <p class="subtitle">Брокер по продаже недвижимости</p><br>
                            <p class="caption">халина александра<span class="card-popup">&nbsp;</span></p><br>
                            <p>Языки: Английский, Русский</p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
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
                            <p class="subtitle">Брокер по продаже недвижимости</p><br>
                            <p class="caption">Пермяков андрей<span class="card-popup">&nbsp;Романович</span></p><br>
                            <p>Языки: Английский, Русский</p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
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
                            <p class="subtitle">Брокер по продаже недвижимости</p><br>
                            <p class="caption">ибрагимов егор<span class="card-popup">&nbsp;</span></p><br>
                            <p>Языки: Английский, Русский</p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
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
                            <p class="subtitle">Брокер по продаже недвижимости</p><br>
                            <p class="caption">халина александра<span class="card-popup">&nbsp;Романович</span></p><br>
                            <p>Языки: Английский, Русский</p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
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
        <p class="title">О компании</p>
        <input type="checkbox" class="read-more-state" id="post-1">
        <p class="read-more-wrap">
            Международное агентство по продаже недвижимости в Грузии,ОАЭ, Турции и Тайланде, созданное в 2007 году, входит в группу компаний «Бизнес - Юрист». Единственная Компания на рынке ,которая имеет более 350 филиалов в России от Калининграда до Камчатки ,офисы в Казахстане, Белоруссии, Турции и головной офис в Дубае.<br>
            <span class="read-more-target">Мы стремимся учитывать индивидуальные потребности каждого нашего Клиента и предоставить наиболее эффективные решения для реализации их целей в области недвижимости. Наша команда профессионалов всегда готова ответить на любые вопросы и предоставить полную информацию о всех услугах агентства.<br>
            Мы уделяем особое внимание своей репутации и несем ответственность за все свои действия. Именно поэтому мы уверены в качестве наших услуг и уверены, что сможем удовлетворить все запросы и потребности наших Клиентов в области недвижимости.<br>
            Выбирая нашу Компанию, Вы можете быть уверены, что получите лучший сервис и профессиональную помощь в решении всех вопросов, связанных с недвижимостью. Мы всегда готовы помочь Вам достигнуть ваших целей в сфере недвижимости и обеспечить высококачественный сервис.</span>
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
            <span>Подробнее</span>
        </span>
        <svg width="16" height="16"><use xlink:href="/images/icons.svg#arrow"></use></svg>
    </a>
    <!-- <div class="company-video">
        <video src="#"></video>
    </div> -->
</section>
</main>

