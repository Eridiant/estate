<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\captcha\Captcha;

// $this->title = Yii::t('frontend', 'Контакты');
$this->title = Yii::t('frontend', 'Подбор и продажа инвестиционных предложений в Грузии.');
$this->params['breadcrumbs'][] = $this->title;
$c = \backend\modules\language\models\Language::find()->where(['deleted_at' => null, 'key' => Yii::$app->language])->one()->code;
// $this->registerJsFile(
//     "//maps.googleapis.com/maps/api/js?key=AIzaSyD2FYsdSyKCF85BXwjTabp2lj0hk5YPWsc&region={$c}&language={$c}",
//     ['position' => $this::POS_END, 'async'=>true]
// );
?>
<main>
    <section class="contacts container" style="max-width: 1204px; margin-left: auto; margin-right: auto">
    <article class="contacts-inf">
        <p class="title"><?=Yii::t('frontend', 'Контакты')?></p>
        <ul>
            <!-- <li>
                <span>
                    <span>GR:</span><a href="tel:+9">+9</a>
                </span>
                <span>
                    <a href="https://telegram.me/+995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                    <a href="https://wa.me/995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                </span>
            </li> -->
            <li>
                <span>
                    <span>RU:</span><a href="tel:89646353313">+7 964 635 33 13</a>
                </span>
                <span>
                    <a href="https://telegram.me/+995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                    <a href="https://wa.me/995555932307"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
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
        <div class="border">
            <svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg> <a href="mailto:dda.rea.est@gmail.com">dda.rea.est@gmail.com</a>
        </div>
        <address class="border">
            <svg width="17" height="24"><use xlink:href="/images/icons.svg#address"></use></svg><?=Yii::t('frontend', '15 Luka Asatiani St, Batumi 6010, Грузия')?>
        </address>
    </article>
    <div id="map" class="contacts-map map">
        <!-- <div id="maps" class="maps"></div> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2981.26852268452!2d41.63132067581549!3d41.649939979668865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4067864016121913%3A0xceec0f057ebeb4f3!2zMTUgTHVrYSBBc2F0aWFuaSBTdCwgQmF0dW1pLCDQk9GA0YPQt9C40Y8!5e0!3m2!1s<?= $c; ?>!2s!4v1690188463962!5m2!1s<?= $c; ?>!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"  {$c}referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<section class="photo container-lg" style="max-width: 1920px; margin-left: auto; margin-right: auto">
    <div class="title"><?=Yii::t('frontend', 'Наш офис и команда')?></div>
    <div class="swiper photo-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="main-border-radius" src="/images/contacts/photo/photo-1.jpg" loading="lazy" width="489" height="358" alt="">
            </div>
            <div class="swiper-slide">
                <img class="main-border-radius" src="/images/contacts/photo/photo-2.jpg" loading="lazy" width="489" height="358" alt="">
            </div>
            <div class="swiper-slide">
                <img class="main-border-radius" src="/images/contacts/photo/photo-3.jpg" loading="lazy" width="489" height="358" alt="">
            </div>
            <div class="swiper-slide">
                <img class="main-border-radius" src="/images/contacts/photo/photo-4.jpg" loading="lazy" width="489" height="358" alt="">
            </div>
            <div class="swiper-slide">
                <img class="main-border-radius" src="/images/contacts/photo/photo-5.jpg" loading="lazy" width="489" height="358" alt="">
            </div>
            <div class="swiper-slide">
                <img class="main-border-radius" src="/images/contacts/photo/photo-6.jpg" loading="lazy" width="489" height="358" alt="">
            </div>
            <div class="swiper-slide">
                <img class="main-border-radius" src="/images/contacts/photo/photo-7.jpg" loading="lazy" width="489" height="358" alt="">
            </div>
            <div class="swiper-slide">
                <img class="main-border-radius" src="/images/contacts/photo/photo-8.jpg" loading="lazy" width="489" height="358" alt="">
            </div>
            <div class="swiper-slide">
                <img class="main-border-radius" src="/images/contacts/photo/photo-9.jpg" loading="lazy" width="489" height="358" alt="">
            </div>
            <div class="swiper-slide">
                <img class="main-border-radius" src="/images/contacts/photo/photo-10.jpg" loading="lazy" width="489" height="358" alt="">
            </div>
        </div>
        <div class="swiper-pagination pagination"></div>
    </div>
</section>
<?= $this->render('_form') ?>
</main>