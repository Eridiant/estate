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
                <li><a href="<?= Url::toRoute('/'); ?>"><?=Yii::t('frontend', 'Главная')?></a></li>
                <li><a href="<?= Url::toRoute('/about'); ?>"><?=Yii::t('frontend', 'О нас')?></a></li>
                <li><a href="<?= Url::toRoute('/contact'); ?>"><?=Yii::t('frontend', 'Контакты')?></a></li>
            </ul>
            <a href="mailto:dda.rea.est@gmail.com" class="border dt"><svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg> dda.rea.est@gmail.com</a>
        </div>
        <div class="footer-column">
            <div class="header-localization-links footer-inner">
                <ul>
                    <li>
                        <span>
                            <span>GR:</span><a href="tel:+995706070141">+995 706 070 141</a>
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
                            <a href="https://telegram.me/+79646353313"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                            <a href="https://wa.me/+79646353313"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
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
                <div class="footer-inner-block">
                    <a href="httdivs://syndicate.ge/">
                        Made by&nbsp;&nbsp;&nbsp;
                        <img src="/images/syndicate.png" alt="">
                    </a>
    v>          </div>
            </div>
            <div class="footer-inner">
                <?=Yii::t('frontend', 'Соцсети')?>:
                <!-- <a href="https://facebook.com" target="_blank"><svg width="13" height="25"><use xlink:href="/images/icons.svg#fb"></use></svg></a> -->
                <a href="https://youtube.com/@dda_georgia_invest" target="_blank"><svg width="26" height="26"><use xlink:href="/images/icons.svg#youtube"></use></svg></a>
                <a href="https://telegram.me/+995555932307" target="_blank"><svg width="26" height="25"><use xlink:href="/images/icons.svg#telega"></use></svg></a>
                <a href="https://wa.me/995555932307" target="_blank"><svg width="24" height="25"><use xlink:href="/images/icons.svg#whatsapp"></use></svg></a>
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
                <!-- <p class="header-localization-inf"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg> <svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></p> -->
                <p class="header-localization-phone michroma"><a href="tel:+995706070141">+995 706 070 141</a> <span>:GR</span></p>
                <p class="header-localization-phone michroma"><a href="tel:89646353313">+7 964 635 33 13</a> <span>:RU</span></p>
                <p class="header-localization-phone michroma"><a href="tel:+77002100685">+7 700 210 06 85</a> <span>:KZ</span></p>
            </div>
        </div>
        <div class="menu-nav">
            <div class="menu-link">
                <ul>
                    <li><a href="<?= Url::toRoute('/'); ?>"><?=Yii::t('frontend', 'Главная')?></a></li>
                    <li><a href="<?= Url::toRoute('/about'); ?>"><?=Yii::t('frontend', 'О нас')?></a></li>
                    <li><a href="<?= Url::toRoute('/contact'); ?>"><?=Yii::t('frontend', 'Контакты')?></a></li>
                </ul>
            </div>
            <div>
                <div class="border">
                    <svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg> <a href="mailto:dda.rea.est@gmail.com">dda.rea.est@gmail.com</a>
                </div>
                <address class="border">
                    <svg width="17" height="24"><use xlink:href="/images/icons.svg#address"></use></svg> <?=Yii::t('frontend', '15 Luka Asatiani St, Batumi 6010, Грузия')?>
                </address>
            </div>
        </div>
    </div>
</div>

<div class="popup">
    <div class="popup-wrapper">
        <div class="popup-close"><svg width="24" height="24"><use xlink:href="/images/icons.svg#cls"></use></svg></div>
        <div class="popup-inner"></div>
    </div>
</div>

<div class="form form-popup">
    <div class="form-wrap">
        <div class="form-close"><svg width="24" height="24"><use xlink:href="/images/icons.svg#cls"></use></svg></div>
        <div class="form-inner">
            <div class="form-wrapper">
                <p class="caption"><?=Yii::t('frontend', 'Получите консультацию')?></p>
                <p class="form-desc"><?=Yii::t('frontend', 'Оставьте заявку на сайте или  позвоните по телефону')?></p>
                <div class="header-localization-links">
                    <ul>
                        <li>
                            <span>
                                <span>GR:</span><a href="tel:+995706070141">+995 706 070 141</a>
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
                                <a href="https://telegram.me/+79646353313"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                                <a href="https://wa.me/+79646353313"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
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
                                <input type="text" id="name" name="name" pattern="[\p{L}\s\-]+" placeholder="<?=Yii::t('frontend', 'Имя')?>" title="<?=Yii::t('frontend', 'только буквы и пробелы')?>" required>
                                <label for="name"><?=Yii::t('frontend', 'Имя')?>:</label>
                            </div>
        
                            <div class="form-inner-container">
                                <input type="tel" id="phone" name="phone" placeholder="<?=Yii::t('frontend', 'Телефон')?>"  pattern="\+?[0-9\s\-\(\)]+" minlength="7" maxlength="20" title="<?=Yii::t('frontend', 'только цифры')?>" required>
                                <label for="phone"><?=Yii::t('frontend', 'Телефон')?>:</label>
                            </div>
                        </div>
                        <div class="form-inner-container">
                            <textarea id="message" name="message" placeholder="<?=Yii::t('frontend', 'Сообщение')?>" required></textarea>
                            <label for="message"><?=Yii::t('frontend', 'Сообщение')?>:</label>
                        </div>
                    </div>
                    <button class="form-btn btn" type="submit">
                        <span>
                            <span><?=Yii::t('frontend', 'отправить')?></span>
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
                <p class="caption"><?=Yii::t('frontend', 'Спасибо')?></p>
                <p class="subtitle"><?=Yii::t('frontend', 'Ваша заявка отправлена, мы перезвоним')?></p>
            </div>
        </div>
        <div class="success-close">
            <svg width="24" height="24"><use xlink:href="/images/icons.svg#cls"></use></svg>
        </div>
    </div>
</div>

<div class="cont-container" style="max-width: 1600px; margin-left: auto; margin-right: auto">
    <div class="cont-wrapper cont-wa">
        <div class="cont-inner">
            <a href="https://telegram.me/+995555932307" class="cont-wa-link" target="_blank">
                <svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg>
            </a>
        </div>
        <div class="cont-inner">
            <a href="https://wa.me/995555932307" class="cont-wa-link" target="_blank">
                <svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg>
            </a>
        </div>
        <div class="cont-inner form-target">
            <div><svg width="24" height="24"><use xlink:href="/images/icons.svg#contact"></use></svg></div>
        </div>
    </div>
</div>


<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> -->