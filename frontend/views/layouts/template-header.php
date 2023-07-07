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
                    <li><a href="<?= Url::toRoute('/'); ?>">Главная</a></li>
                    <li><a href="<?= Url::toRoute('/about'); ?>">О нас</a></li>
                    <li><a href="<?= Url::toRoute('/contact'); ?>">Контакты</a></li>
                </ul>
                <address class="border">
                    <svg width="17" height="24"><use xlink:href="/images/icons.svg#address"></use></svg> 15 Luka Asatiani St, Batumi 6010, Грузия
                </address>
            </div>
            <div class="header-localization michroma">
                <div class="dropdown">
                    <div class="select"><span><?= $cLang->code; ?></span></div>
                    <div class="dropdown-options">
                        <!-- <span>kz</span>
                        <span>en</span>
                        <span>ru</span> -->
                        <?php foreach ($model as $lang): ?>
                            <?php if ($lang->key != $currentLang): ?>
                                <a href="/site/set-locale?locale=<?=$lang->key?>" rel="nofollow">
                                    <?= $lang->code; ?>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
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
            </div>
            <div class="header-localization-mb">
                <p class="header-localization-inf">Все номера есть на <svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg> <svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></p>
                <p class="header-localization-phone michroma"><a href="tel:+77002100685">+7 700 210 06 85</a> <span>:KZ</span></p>
                <p class="header-localization-phone michroma"><a href="tel:89646353313">8 964 635 33 13</a> <span>:RU</span></p>
                <p class="header-localization-phone michroma"><a href="tel:+995555932307">+995 555 932 307</a> <span>:GR</span></p>
            </div>
        </nav>
    </div>
</header>