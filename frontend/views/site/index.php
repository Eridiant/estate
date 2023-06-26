<?php

/** @var yii\web\View $this */

$this->title = 'My Application';
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
        <div class="container" style="max-width: 1204px; margin-left: auto; margin-right: auto">
            <div class="first-wrapper">
                <div class="first-content">
                    <p class="first-num michroma">01</p>
                    <div class="first-inner">
                        <p class="title">
                            Сэкономьте время и деньги на изучение и анализ
                        </p>
                        <p>
                            Полная база предложений в 1 каталоге. Получить консультацию со Старшим менеджером
                        </p>
                    </div>
                    <a href="#" class="first-consultation border border-white form-target">Консультация&#8195;<svg width="16" height="16"><use xlink:href="/images/icons.svg#arrow"></use></svg></a>
                </div>
                <div class="first-switch">
                    <div class="first-item active">
                        <p class="first-digit michroma">01</p>
                        <p class="first-desc">Сэкономьте время
                            на изучение</p>
                    </div>
                    <div class="first-item">
                        <p class="first-digit michroma">02</p>
                        <p class="first-desc">Сэкономьте время
                            на изучение</p>
                    </div>
                    <div class="first-item">
                        <p class="first-digit michroma">03</p>
                        <p class="first-desc">Сэкономьте время
                            на изучение</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="projects container" style="max-width: 1204px; margin-left: auto; margin-right: auto">
    <p class="title">Надежные проекты</p>
    <div class="projects-switch">
        <a href="#" class="active">Все</a>
        <a href="#">Квартира</a>
        <a href="#">Виллы</a>
        <a href="#">Пентхаусы</a>
        <a href="#">Коммерческая недвижимость</a>
    </div>
    <div class="swiper-buttons">
        <div class="projects-swiper-button-prev">&#8249;</div>
        <div class="projects-swiper-button-next">&#8250;</div>
    </div>
    <div class="swiper projects-swiper card">
        <div class="swiper-wrapper text-white">
            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">AL Mare Batumi</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>2023</span></p>
                        <p><span>Варианты юнитов:</span> <span>Студио, 1спальня</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            Проект на 1-й береговой линии в районе “Нового бульвара” Отличное расположение, оптимальное предложение для инвестиций и жизни, находится в 200 метрах от моря.
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">Centropolis</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>2027</span></p>
                        <p><span>Варианты юнитов:</span> <span>Студио, 1,2 спальни</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            Центральный объект на рынке Батуми, самый обсуждаемый и популярный проект за последние 5 лет. Инвестирование будет приносит Вам доход круглый год. 1-я линия от моря развитая инфраструктура.
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">Batumi View</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>Сдан в эксплуатацию</span></p>
                        <p><span>Варианты юнитов:</span> <span>Студио, 1спальня</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            1-я береговая линия, с завершенным строительством в 2021 году. Современный и многофункциональный комплекс в уютном и живописном месте в Батуми в 50 метрах от моря.  
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">Black Sea Line Residence</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>2023</span></p>
                        <p><span>Варианты юнитов:</span> <span>Студио, 1спальня</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            Жилой комплекс Black Sea Line Residence – здание средней этажности с престижными апартаментами улучшенной планировки, расположенное в курортном поселке Гонио всего в десяти километрах от Батуми. Объект расположен в экологически чистом районе. В наличии квартиры под любой бюджет и разной наполняемостью.   
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">Optima Residences</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>2025</span></p>
                        <p><span>Варианты юнитов:</span> <span>Студио, 1, 2, 3 спальни</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            Крупный девелопер для инвестиций, привлекателен для тех кто ищет готовые проекты. Находится в эксклюзивном квартале на 1- береговой линии.  
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">Marina Club</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>2025</span></p>
                        <p><span>Варианты юнитов:</span> <span>Студио, 1, 2 спальни</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            Жилой комплекс премиум- класса, состоящий из 3-х блоков, с развитой инфраструктурой для жителей. Квартиры с видом на горы и Море.
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">Family Club</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>2025</span></p>
                        <p><span>Варианты юнитов:</span> <span>Студио, 1, 2 спальни, Пентхаус</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            Первая в Грузии семейная резиденция. Оазис для инвестирования если Вы хотите стабильность и успех,то этот объект для вас. Богатая инфраструктура спа, бассейн, аква зона с морской водой, массажные кабинеты, клиника, банный комплекс и многое другое
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">Aqua</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>2025</span></p>
                        <p><span>Варианты юнитов:</span> <span>Студио, 1, 2 спальни</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            Приобретайте блиндированную недвижимость в экологически чистом районе,которая подарит Вам доход и комфорт. 
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">Riviera</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>2024</span></p>
                        <p><span>Варианты юнитов:</span> <span>Пентхаусы 130 и 151 м²</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            ЕДИНСТВЕННЫЙ ОТЕЛЬ ИЗ ТАУНХАУСОВ В БАТУМИ 130 и 151 м² Первый в Грузии курорт All Inclusive под элитным брендом Wyndham Grand Residences 850 метров до пляжа. Первый в Грузии отельный комплекс из таунхаусов и вилл. Танхаус 130 кв, 151 кв.
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">Calligraphy Towers</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>Блок А 2024, Б 2025, С2025</span></p>
                        <p><span>Варианты юнитов:</span> <span>Студио, 1, 2 спальни</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            Самый многофункциональный комплекс состоящий из 3-х корпусов расположенный в центральном районе Батуми, на “Аллее Героев” Проект “Calligraphy Towers” очень популярен у инвесторов благодаря своей развитой инфраструктуре, 5* и международным отеле “Hampton by Hilton” в котором можно приобрести апартаменты.  
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">Green Cape Botanico</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>2023</span></p>
                        <p><span>Варианты юнитов:</span> <span>Студио, 1, 2 спальни</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            Популярное и историческое место для туризма всей Грузии “Зеленый мыс” объект расположен в центральной части заповедника. В шаговой доступности Ботанический сайт, концепция проекта сочетается с ландшафтом и в экологическом стиле. До города Батуми 10 мин. Сочетает в себе воссоединение с природой и современную застройку.
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">Homex Villas</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>2023</span></p>
                        <p><span>Варианты юнитов:</span> <span>Виллы 160 кв. 176, 1 кв</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            Привилегия роскоши отражена в проекте “Homex Villas” это частные виллы 50 метров от пляжа, своя закрытая территория без лишних глаз, уютное место для отдыха и спокойного время пребывания,  расположены в 25 минутах езды от Батуми, в шикарной локации возле моря.
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">Lagoon Resort</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>2026</span></p>
                        <p><span>Варианты юнитов:</span> <span>Студио, 1, 2 спальни, Пентхаусы 300-400 кв.м</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            Эксклюзивный жилой комплекс для роскошной жизни и инвестирования, проект включает в себя 3 корпуса и богатую инфраструктуру для отдыха и постоянного проживания.  Расположенный в живописном месте в 500 метрах от моря , проект предлагает гостям и жителям потрясающую атмосферу ,сервис и новое качество жизни в Батуми.
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">iVillas</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>2024</span></p>
                        <p><span>Варианты юнитов:</span> <span>Виллы 165 кв, 200 кв.</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            "iVillas" — это престижный жилой комплекс в районе “Зеленого мыса” в 10 минутах от Батуми. Проект представляющий собой роскошные и комфортабельные виллы состоящий из 14 трехэтажных вилл элит-класса доступные для постоянного проживания и инвестиций. Просторные террасы с видом на море и горы, выгодное  вложений инвестиций. Комплекс расположен в экологически чистом районе, рядом с Ботаническим садом.
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">Blue Sky Tower</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>Сдан в эксплуатацию, завершение 2024</span></p>
                        <p><span>Варианты юнитов:</span> <span>Студио, 1, 2 спальни</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            Жилой комплекс из 36 этажей в престижном районе Батуми с развитой инфраструктурой. В комплекс входит 5* отель Holiday Inn что дает преимущество перед другими проектами.
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">Prime Residence</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>2025</span></p>
                        <p><span>Варианты юнитов:</span> <span>Сдан в эксплуатацию, завершение 2024</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            PRIME RESIDENCE — это жилой дом с концепцией для продвинутых людей , он связывает идею работы и жизни. Уникальность комплекса это собственным коворкингом, спорт зал, панорамные виды на море и горы. Жилой дом бизнес - класса по доступным ценам. Студия , 1 спальня. Дата сдачи 12.2024.
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">MARDI Hills</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>2024</span></p>
                        <p><span>Варианты юнитов:</span> <span>Студио, 1, 2 спальни</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            Проект с высоты 200 метров над уровнем моря и панорамным видом на весь город. Элитный жилой комплекс клубного типа с полной внутренней инфраструктурой , высоким уровнем сервиса стандарта 5 звезд под управлением международной компании ACCOR.
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">Mardi Novotel</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>Блок А 2024, Б 2025</span></p>
                        <p><span>Варианты юнитов:</span> <span>Студио, 1, 2 спальни</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            Предложение с уникальной ценой и невероятной инфраструктурой премиум класса. Жилой загородный комплекс с международным сетевым отелем “Novotel” частный пляж, 1-я линия моря, премиальные лоты и многое другое. на берегу моря.
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">Aquapark</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>2028</span></p>
                        <p><span>Варианты юнитов:</span> <span>Студио, 1 спальни</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            Уникальный отель с новой системой "All Inclusive" под управление гостиничной группы ACCOR. Который предлагает широкий спектр процедур для укрепления здоровья.
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">Next</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>2024</span></p>
                        <p><span>Варианты юнитов:</span> <span>Студио, 1 спальни</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            Новый проект совместно с международным брендом Wyndham Residences Ваша личная 5-звездочная резиденция на берегу моря.
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">Radisson Blu Apartmens</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>2025</span></p>
                        <p><span>Варианты юнитов:</span> <span>Студио, 1 спальни</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            Эксклюзивные 5-звездочные резиденции на берегу моря.
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">Collection</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>2025</span></p>
                        <p><span>Варианты юнитов:</span> <span>Студио, 1, 2 спальни</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            Архитекторы подобрали решения, чтобы сделать проект легким и воздушным, органично вписанным в природный ландшафт. Помимо плавных линий и форм здания, этой цели служит масштабное озеленение и открытые бассейны во внутреннем пространстве комплекса.
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">ADDRESS</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>2027</span></p>
                        <p><span>Варианты юнитов:</span> <span>Студио, 1 спальни</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            Проект привлекателен тем, что сочетает в себе три различных интереса батумских инвесторов в недвижимость: туристическую, жилую и бизнес -  недвижимость. 3 Блока.
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">Royal Residence</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>2024</span></p>
                        <p><span>Варианты юнитов:</span> <span>Студио, 1, 2 спальни</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            Это премиальный жилой комплекс  на первой береговой линии, в 150 метрах от моря с видом на горы и море.
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">Cube</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>2027</span></p>
                        <p><span>Варианты юнитов:</span> <span>Студио, 1 спальни</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            Инвестиционный проект состоит апартаментов , которые имеют исключительные удобства для работы и отдыха. 5 минут до моря. 
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide destination">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="images/index/projects/projects-1.jpg" alt="">
                    </picture>
                </div>
                <a href="#" class="card-active border border-white target">Посмотреть&#8195;<svg width="16" height="16"><use xlink:href="images/icons.svg#small-arrow"></use></svg></a>
                <div class="card-content">
                    <header>
                        <p class="subtitle dn">лофт</p>
                        <p class="caption">Oval</p>
                    </header>
                    <footer>
                        <p class="dn"><span>Country:</span> <span>United Arab Emirates</span></p>
                        <p><span>Сдача объекта:</span> <span>12.2027</span></p>
                        <p><span>Варианты юнитов:</span> <span>Студио, 1 спальни</span></p>
                        <p class="dn"><span>Starting price ($):</span> <span>327,780</span></p>
                    </footer>
                    <div class="card-popup">
                        <p class="popup-desc">
                            Овал является идеальным фоном для счастливой , современной и полноценной жизни в быстро меняющемся мире. 5 минут до моря. 
                        </p>
                        <div class="popup-connect">
                            <ul class="popup-phone">
                                <li>
                                    <span>
                                        <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                                    </span>
                                    <span>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#telegram"></use></svg></a>
                                        <a href="#"><svg width="20" height="20"><use xlink:href="images/icons.svg#viber"></use></svg></a>
                                    </span>
                                </li>
                            </ul>
                            <div class="popup-action">
                                <a href="" class="btn-black btn form-target">
                                    <span>
                                        <span>Хочу этот объект</span>
                                        <svg width="16" height="16"><use xlink:href="images/icons.svg#arrow"></use></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination pagination"></div>
    </div>
</section>


<section class="services container" style="max-width: 1204px; margin-left: auto; margin-right: auto">
    <p class="title">Какие услуги оказываем?</p>
    <div class="services-items">
        <div class="services-item">
            <a href="#" class="caption">
                Подбор недвижимости&nbsp;&nbsp;<svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg>
            </a>
            <div class="services-item-inner big-border-radius">
                <img src="/images/about/services/services-1.jpg" alt="">
                <a href="#" class="caption over-img">
                    Подбор недвижимости&nbsp;&nbsp;<svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg>
                </a>
            </div>
        </div>
        <div class="services-item">
            <a href="#" class="caption">
                Инвестирование в недвижимость&nbsp;&nbsp;<svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg>
            </a>
            <div class="services-item-inner big-border-radius">
                <img src="/images/about/services/services-2.jpg" alt="">
                <a href="#" class="caption over-img">
                    Инвестирование в недвижимость&nbsp;&nbsp;<svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg>
                </a>
            </div>
        </div>
        <div class="services-item">
            <a href="#" class="caption">
                Продажа недвижимости&nbsp;&nbsp;<svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg>
            </a>
            <div class="services-item-inner big-border-radius">
                <img src="/images/about/services/services-3.jpg" alt="">
                <a href="#" class="caption over-img">
                    Продажа недвижимости&nbsp;&nbsp;<svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg>
                </a>
            </div>
        </div>
        <div class="services-item">
            <a href="#" class="caption">
                Оценка стоимости объектов&nbsp;&nbsp;<svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg>
            </a>
            <div class="services-item-inner big-border-radius">
                <img src="/images/about/services/services-4.jpg" alt="">
                <a href="#" class="caption over-img">
                    Оценка стоимости объектов&nbsp;&nbsp;<svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg>
                </a>
            </div>
        </div>
        <div class="services-item">
            <a href="#" class="caption">
                Продажа коммерческой недвижимости&nbsp;&nbsp;<svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg>
            </a>
            <div class="services-item-inner big-border-radius">
                <img src="/images/about/services/services-5.jpg" alt="">
                <a href="#" class="caption over-img">
                    Продажа коммерческой недвижимости&nbsp;&nbsp;<svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg>
                </a>
            </div>
        </div>
        <div class="services-item">
            <a href="#" class="caption">
                Консалтинг и юридические услуги&nbsp;&nbsp;<svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg>
            </a>
            <div class="services-item-inner big-border-radius">
                <img src="/images/about/services/services-6.jpg" alt="">
                <a href="#" class="caption over-img">
                    Консалтинг и юридические услуги&nbsp;&nbsp;<svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg>
                </a>
            </div>
        </div>
    </div>
</section>
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
        <canvas class="opinion-chart" id="chart"></canvas>
    </div>
</section>
    <section class="districts container" style="max-width: 1204px; margin-left: auto; margin-right: auto">
    <p class="title">Районы</p>
    <div class="swiper-buttons">
        <div class="districts-swiper-button-prev">&#8249;</div>
        <div class="districts-swiper-button-next">&#8250;</div>
    </div>
    <div class="swiper districts-swiper card">
        <div class="swiper-wrapper text-white">
            <div class="swiper-slide destination" data-target="1">
                <div class="card-image main-border-radius">
                    <picture>
                        <img src="/images/index/districts/districts-1.jpg" alt="">
                    </picture>
                </div>
                <div class="card-content">
                    <header>
                        <p class="subtitle">район</p>
                        <p class="caption">Старый город</p>
                    </header>
                    <footer>
                        <p>
                            туристический центр и сердце города Батуми, уютные кварталы и многообразие архитектуры
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
                        <p class="subtitle">район</p>
                        <p class="caption">Аллея героев</p>
                    </header>
                    <footer>
                        <p>
                            новый центр города с концепцией “Зеленый коридор” большинство домов высотные многофункциональные строения
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
                        <p class="subtitle">район</p>
                        <p class="caption">новый бульвар</p>
                    </header>
                    <footer>
                        <p>
                            жемчужина Батуми, современный и новый район с быстро развивающейся инфраструктурой
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
                        <p class="subtitle">район</p>
                        <p class="caption">Старый город</p>
                    </header>
                    <footer>
                        <p>
                            туристический центр и сердце города Батуми, уютные кварталы и многообразие архитектуры
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
                        <p class="subtitle">район</p>
                        <p class="caption">Аллея героев</p>
                    </header>
                    <footer>
                        <p>
                            новый центр города с концепцией “Зеленый коридор” большинство домов высотные многофункциональные строения
                        </p>
                        <a href="#" class="card-link-hover target popup-hide"><svg width="16" height="16">
                                <use xlink:href="/images/icons.svg#small-arrow"></use>
                            </svg></a>
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
                        <p class="subtitle">район</p>
                        <p class="caption">новый бульвар</p>
                    </header>
                    <footer>
                        <p>
                            жемчужина Батуми, современный и новый район с быстро развивающейся инфраструктурой
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
                        <p class="subtitle">район</p>
                        <p class="caption">Старый город</p>
                    </header>
                    <footer>
                        <p>
                            туристический центр и сердце города Батуми, уютные кварталы и многообразие архитектуры
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
                        <p class="subtitle">район</p>
                        <p class="caption">Аллея героев</p>
                    </header>
                    <footer>
                        <p>
                            новый центр города с концепцией “Зеленый коридор” большинство домов высотные многофункциональные строения
                        </p>
                        <a href="#" class="card-link-hover target popup-hide"><svg width="16" height="16">
                                <use xlink:href="/images/icons.svg#small-arrow"></use>
                            </svg></a>
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
                        <p class="subtitle">район</p>
                        <p class="caption">новый бульвар</p>
                    </header>
                    <footer>
                        <p>
                            жемчужина Батуми, современный и новый район с быстро развивающейся инфраструктурой
                        </p>
                        <a href="#" class="card-link-hover target popup-hide"><svg width="16" height="16">
                                <use xlink:href="/images/icons.svg#small-arrow"></use>
                            </svg></a>
                    </footer>
                </div>
            </div>
        </div>
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
        <div class="swiper-wrapper text-white">
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
                            <p class="subtitle">Брокер по продаже недвижимости</p>
                            <p class="caption">Пермяков андрей<span class="card-popup">&nbsp;Романович</span></p>
                            <p>Языки: Английский, Русский</p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                            </span>
                            <span>
                                <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                                <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            </span>
                        </div>
                        <aside>
                            <div class="card-popup">Соцсети:</div>
                            <a href="#" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                            <a href="#" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            <a href="#" class="card-link"><svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg></a>
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
                            <p class="subtitle">Брокер по продаже недвижимости</p>
                            <p class="caption">ибрагимов
                                егор<span class="card-popup">&nbsp;</span></p>
                            <p>Языки: Английский, Русский</p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                            </span>
                            <span>
                                <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                                <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            </span>
                        </div>
                        <aside>
                            <div class="card-popup">Соцсети:</div>
                            <a href="#" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                            <a href="#" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            <a href="#" class="card-link"><svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg></a>
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
                            <p class="subtitle">Брокер по продаже недвижимости</p>
                            <p class="caption">халина александра<span class="card-popup">&nbsp;</span></p>
                            <p>Языки: Английский, Русский</p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                            </span>
                            <span>
                                <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                                <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            </span>
                        </div>
                        <aside>
                            <div class="card-popup">Соцсети:</div>
                            <a href="#" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                            <a href="#" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            <a href="#" class="card-link"><svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg></a>
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
                            <p class="subtitle">Брокер по продаже недвижимости</p>
                            <p class="caption">Пермяков андрей<span class="card-popup">&nbsp;Романович</span></p>
                            <p>Языки: Английский, Русский</p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                            </span>
                            <span>
                                <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                                <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            </span>
                        </div>
                        <aside>
                            <div class="card-popup">Соцсети:</div>
                            <a href="#" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                            <a href="#" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            <a href="#" class="card-link"><svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg></a>
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
                            <p class="subtitle">Брокер по продаже недвижимости</p>
                            <p class="caption">ибрагимов егор<span class="card-popup">&nbsp;</span></p>
                            <p>Языки: Английский, Русский</p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                            </span>
                            <span>
                                <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                                <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            </span>
                        </div>
                        <aside>
                            <div class="card-popup">Соцсети:</div>
                            <a href="#" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                            <a href="#" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            <a href="#" class="card-link"><svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg></a>
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
                            <p class="subtitle">Брокер по продаже недвижимости</p>
                            <p class="caption">халина александра<span class="card-popup">&nbsp;</span></p>
                            <p>Языки: Английский, Русский</p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                            </span>
                            <span>
                                <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                                <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            </span>
                        </div>
                        <aside>
                            <div class="card-popup">Соцсети:</div>
                            <a href="#" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                            <a href="#" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            <a href="#" class="card-link"><svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg></a>
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
                            <p class="subtitle">Брокер по продаже недвижимости</p>
                            <p class="caption">Пермяков андрей<span class="card-popup">&nbsp;Романович</span></p>
                            <p>Языки: Английский, Русский</p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                            </span>
                            <span>
                                <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                                <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            </span>
                        </div>
                        <aside>
                            <div class="card-popup">Соцсети:</div>
                            <a href="#" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                            <a href="#" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            <a href="#" class="card-link"><svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg></a>
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
                            <p class="subtitle">Брокер по продаже недвижимости</p>
                            <p class="caption">ибрагимов егор<span class="card-popup">&nbsp;</span></p>
                            <p>Языки: Английский, Русский</p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                            </span>
                            <span>
                                <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                                <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            </span>
                        </div>
                        <aside>
                            <div class="card-popup">Соцсети:</div>
                            <a href="#" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                            <a href="#" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            <a href="#" class="card-link"><svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg></a>
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
                            <p class="subtitle">Брокер по продаже недвижимости</p>
                            <p class="caption">халина александра<span class="card-popup">&nbsp;Романович</span></p>
                            <p>Языки: Английский, Русский</p>
                        </div>
                        <div class="card-popup">
                            <span class="michroma">
                                <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                            </span>
                            <span>
                                <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                                <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            </span>
                        </div>
                        <aside>
                            <div class="card-popup">Соцсети:</div>
                            <a href="#" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                            <a href="#" class="card-link"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            <a href="#" class="card-link"><svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg></a>
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
        <div class="swiper-pagination pagination"></div>
    </div>
</section>
    <section class="form container text-white" style="max-width: 1204px; margin-left: auto; margin-right: auto">
    <div class="form-background background main-border-radius">
        <picture>
            <img src="/images/contacts/form.jpg" alt="">
        </picture>
    </div>
    <div class="form-wrapper">
        <p class="title">Получите консультацию</p>
        <p class="form-desc">Оставьте заявку на сайте или  позвоните по телефону <a href="tel:+77002100685">+7 700 210 06 85</a></p>

        <form class="form-form" action="#" method="post">
            <div class="form-inner">
                <div class="form-inner-fl">
                    <div class="form-inner-container">
                        <input type="text" id="name" name="name" placeholder="Имя" required>
                        <label for="name">Имя:</label>
                    </div>

                    <div class="form-inner-container">
                        <input type="tel" id="phone" name="phone" placeholder="Телефон" required>
                        <label for="phone">Телефон:</label>
                    </div>
                </div>
                <div class="form-inner-container">
                    <textarea id="message" name="message" placeholder="Сообщение" required></textarea>
                    <label for="message">Сообщение:</label>
                </div>
            </div>
            <div>
                <button class="form-btn btn" type="submit">
                    <span>
                        <span>отправить</span>
                        <svg width="16" height="16"><use xlink:href="/images/icons.svg#arrow"></use></svg>
                    </span>
                </button>
            </div>
        </form>
    </div>
</section>
    <section class="company container" style="max-width: 1204px; margin-left: auto; margin-right: auto">
    <div class="company-desc">
        <p class="subtitle">DDA Real Estate</p>
        <p class="title">О компании</p>
        <p>
            Международное агентство по продаже недвижимости в Грузии,ОАЭ, Турции и Тайланде, созданное в 2007 году, входит в группу компаний «Бизнес - Юрист». Единственная Компания на рынке ,которая имеет более 350 филиалов в России от Калининграда до Камчатки ,офисы в Казахстане, Белоруссии, Турции и головной офис в Дубае.
        </p>
        <p>
            Мы стремимся учитывать индивидуальные потребности каждого нашего Клиента и предоставить наиболее эффективные решения для реализации их целей в области недвижимости. Наша команда профессионалов всегда готова ответить на любые вопросы и предоставить полную информацию о всех услугах агентства.
        </p>
        <p>
            Мы уделяем особое внимание своей репутации и несем ответственность за все свои действия. Именно поэтому мы уверены в качестве наших услуг и уверены, что сможем удовлетворить все запросы и потребности наших Клиентов в области недвижимости.
        </p>
        <p>
            Выбирая нашу Компанию, Вы можете быть уверены, что получите лучший сервис и профессиональную помощь в решении всех вопросов, связанных с недвижимостью. Мы всегда готовы помочь Вам достигнуть ваших целей в сфере недвижимости и обеспечить высококачественный сервис.
        </p>
        <a href="#" class="company-btn btn">
            <span>
                <span>Подробнее</span>
            </span>
            <svg width="16" height="16"><use xlink:href="/images/icons.svg#arrow"></use></svg>
        </a>
    </div>
    <!-- <div class="company-video">
        <video src="#"></video>
    </div> -->
</section>
</main>

