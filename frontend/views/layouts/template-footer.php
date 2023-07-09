<?php

use yii\helpers\Url;

?>

<footer class="footer">
    <div class="container" style="max-width: 1204px; margin-left: auto; margin-right: auto">
        <div class="footer-column">
            <a href="/" class="icon">
                <img src="/images/logo.png" alt="logo">
            </a>
            <p>© DDA REAL ESTATE 2007-<?= date('Y'); ?></p>
            <!-- <a href="privacy-policy.html">Политика конфиденциальности </a> -->
        </div>
        <div class="footer-column footer-link">
            <ul>
                <li><a href="<?= Url::toRoute('/'); ?>">Главная</a></li>
                <li><a href="<?= Url::toRoute('/about'); ?>">О нас</a></li>
                <li><a href="<?= Url::toRoute('/contact'); ?>">Контакты</a></li>
            </ul>
            <a href="mailto:dda.rea.est@gmail.com" class="border dt"><svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg> dda.rea.est@gmail.com</a>
        </div>
        <div class="footer-column">
            <div class="header-localization-links footer-inner">
                <ul>
                    <li>
                        <span>
                            <span>GR:</span><a href="tel:+995555932307">+995 555 932 307</a>
                        </span>
                        <span>
                            <a href="https://telegram.me/+995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                            <a href="https://wa.me/+995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
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
            </div>
            <div class="footer-inner">
                Соцсети:
                <!-- <a href="https://facebook.com" target="_blank"><svg width="13" height="25"><use xlink:href="/images/icons.svg#fb"></use></svg></a> -->
                <a href="#" target="_blank"><svg width="26" height="26"><use xlink:href="/images/icons.svg#youtube"></use></svg></a>
                <a href="https://telegram.me/+995555932307" target="_blank"><svg width="26" height="25"><use xlink:href="/images/icons.svg#telega"></use></svg></a>
                <a href="https://wa.me/+995555932307" target="_blank"><svg width="24" height="25"><use xlink:href="/images/icons.svg#whatsapp"></use></svg></a>
            </div>
            <div class="footer-inner">
                <a href="mailto:dda.rea.est@gmail.com" class="border mb"><svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg> dda.rea.est@gmail.com</a>
            </div>
        </div>
    </div>
</footer>

<div class="menu-icon">
    <p><span>&#8801;</span></p>
    <p class="menu-show"><span>&times;</span></p>
</div>
<div id="menu" class="menu">
    <div class="menu-wrapper">
        <div class="menu-header">
            <a href="<?= Url::toRoute('/'); ?>" class="icon">
                <img src="/images/logo.png" alt="logo">
            </a>
            <div class="menu-header-phone">
                <p class="header-localization-inf">Все номера есть на <svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg> <svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></p>
                <p class="header-localization-phone michroma"><a href="tel:+77002100685">+7 700 210 06 85</a> <span>:KZ</span></p>
                <p class="header-localization-phone michroma"><a href="tel:89646353313">8 964 635 33 13</a> <span>:RU</span></p>
                <p class="header-localization-phone michroma"><a href="tel:+995555932307">+995 555 932 307</a> <span>:GR</span></p>
            </div>
        </div>
        <div class="menu-nav">
            <div class="menu-link">
                <ul>
                    <li><a href="<?= Url::toRoute('/'); ?>">Home</a></li>
                    <li><a href="<?= Url::toRoute('/about'); ?>">About</a></li>
                    <li><a href="<?= Url::toRoute('/contact'); ?>">Contacts</a></li>
                </ul>
            </div>
            <div>
                <div class="border">
                    <svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg> <a href="mailto:dda.rea.est@gmail.com">dda.rea.est@gmail.com</a>
                </div>
                <address class="border">
                    <svg width="17" height="24"><use xlink:href="/images/icons.svg#address"></use></svg>15 Luka Asatiani St, Batumi 6010, Грузия
                </address>
            </div>
        </div>
    </div>
</div>

<div class="popup">
    <div class="popup-wrapper">
        <div class="popup-close"><svg width="14" height="14"><use xlink:href="/images/icons.svg#close"></use></svg></div>
        <div class="popup-inner"></div>
    </div>
</div>

<div class="form form-popup">
    <div class="form-wrap">
        <div class="form-close"><svg width="14" height="14"><use xlink:href="/images/icons.svg#close"></use></svg></div>
        <div class="form-inner">
            <div class="form-wrapper">
                <p class="caption">Получите консультацию</p>
                <p class="form-desc">Оставьте заявку на сайте или  позвоните по телефону</p>
                <div class="header-localization-links">
                    <ul>
                        <li>
                            <span>
                                <span>GR:</span><a href="tel:+995555932307">+995 555 932 307</a>
                            </span>
                            <span>
                                <a href="https://telegram.me/+995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                                <a href="https://wa.me/+995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                            </span>
                        </li>
                        <li>
                            <span>
                                <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
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
                </div>
                <form id="form" class="form-form" action="#" method="post">
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
                    <button class="form-btn btn" type="submit">
                        <span>
                            <span>отправить</span>
                            <svg width="16" height="16"><use xlink:href="/images/icons.svg#arrow"></use></svg>
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="success">
    <div class="success-wrapper">
        <div class="success-content">
            <div class="success-true">
                <svg width="19" height="17"><use xlink:href="/images/icons.svg#success"></use></svg>
            </div>
            <div class="success-inner">
                <p class="caption">Спасибо</p>
                <p class="subtitle">Ваша заявка отправлена, мы перезвоним</p>
            </div>
        </div>
        <div class="success-close">
            <svg width="14" height="14"><use xlink:href="/images/icons.svg#close"></use></svg>
        </div>
    </div>
</div>

<div class="cont-container" style="max-width: 1600px; margin-left: auto; margin-right: auto">
    <div class="cont-wrapper cont-wa">
        <div class="cont-inner">
            <a href="https://telegram.me/+995555932307" class="cont-wa-link">
                <svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg>
            </a>
        </div>
        <div class="cont-inner">
            <a href="https://wa.me/+995555932307" class="cont-wa-link">
                <svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg>
            </a>
        </div>
        <div class="cont-inner form-target">
            <div><svg width="24" height="24"><use xlink:href="/images/icons.svg#contact"></use></svg></div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>