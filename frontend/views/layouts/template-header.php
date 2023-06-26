<?php

use yii\helpers\Url;

?>
<header class="header">
    <div class="container-lg" style="max-width: 1920px; margin-left: auto; margin-right: auto">
        <nav>
            <div class="header-logo">
                <a href="<?= Url::toRoute('/'); ?>" class="icon">
                    <img src="/images/logo.png" alt="logo">
                </a>
            </div>
            <div class="header-nav">
                <ul>
                    <li><a href="<?= Url::toRoute('/'); ?>">Home</a></li>
                    <li><a href="<?= Url::toRoute('/about'); ?>">About</a></li>
                    <li><a href="<?= Url::toRoute('/contact'); ?>">Contacts</a></li>
                </ul>
                <address class="border">
                    <svg width="17" height="24"><use xlink:href="/images/icons.svg#address"></use></svg> 15 Luka Asatiani St, Batumi 6010, Грузия
                </address>
            </div>
            <div class="header-localization">
                <div class="language-selection select">
                    <select>
                        <option value="kz">kz</option>
                        <option value="en">en</option>
                        <option value="ru">ru</option>
                    </select>
                </div>
                <div class="social-links">
                    <a href="https://telegram.com" target="_blank"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                    <a href="https://whatsapp.com" target="_blank"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                </div>
                <div class="phone-link">
                    <a href="tel:+77002100685">+7 700 210 06 85</a>
                </div>
                <div class="country-selection select">
                    <select>
                        <option value="kz">kz</option>
                        <option value="ru">ru</option>
                        <option value="gr">gr</option>
                    </select>
                </div>
            </div>
            <div class="header-localization-mb">
                <p class="header-localization-inf">Все номера есть на <svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg> <svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></p>
                <p class="header-localization-phone michroma"><a href="tel:+77002100685">+7 700 210 06 85</a> <span>:KZ</span></p>
                <p class="header-localization-phone michroma"><a href="tel:89646353313">8 964 635 33 13</a> <span>:RU</span></p>
                <p class="header-localization-phone michroma"><a href="tel:+995706070141">+9 957 060 701 41</a> <span>:GR</span></p>
            </div>
        </nav>
    </div>
</header>