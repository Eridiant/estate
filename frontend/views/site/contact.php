<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<main>
    <section class="contacts container" style="max-width: 1204px; margin-left: auto; margin-right: auto">
    <article class="contacts-inf">
        <p class="title">Контакты</p>
        <ul>
            <li>
                <span>
                    <span>KZ:</span><a href="tel:+77002100685">+7 700 210 06 85</a>
                </span>
                <span>
                    <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                    <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                </span>
            </li>
            <li>
                <span>
                    <span>RU:</span><a href="tel:89646353313">8 964 635 33 13</a>
                </span>
                <span>
                    <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                    <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                </span>
            </li>
            <li>
                <span>
                    <span>GR:</span><a href="tel:+995706070141">+9 957 060 701 41</a>
                </span>
                <span>
                    <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
                    <a href="#"><svg width="20" height="20"><use xlink:href="/images/icons.svg#viber"></use></svg></a>
                </span>
            </li>
        </ul>
        <div class="border">
            <svg width="17" height="13"><use xlink:href="/images/icons.svg#mail"></use></svg> <a href="mailto:dda.rea.est@gmail.com">dda.rea.est@gmail.com</a>
        </div>
        <address class="border">
            <svg width="17" height="24"><use xlink:href="/images/icons.svg#address"></use></svg>15 Luka Asatiani St, Batumi 6010, Грузия
        </address>
    </article>
    <div id="map" class="contacts-map map">
        <iframe class="big-border-radius" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2981.574059231447!2d41.61839171541153!3d41.6433373792416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40678672f2beb8cb%3A0x33e0f1c9145ee33!2zMTE2IFp1cmFiIEdvcmdpbGFkemUgU3QsIEJhdHVtaSwg0JPRgNGD0LfQuNGP!5e0!3m2!1sru!2sru!4v1621084648113!5m2!1sru!2sru" width="100%" height="100%" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

    <section class="photo container-lg" style="max-width: 1920px; margin-left: auto; margin-right: auto">
    <div class="title">фото офиса</div>
    <!-- <div class="swiper photo-swiper" style="--swiper-pagination-color: #73B4E5; --swiper-pagination-bullet-inactive-color: #D9D9D9; --swiper-pagination-bullet-inactive-opacity: 1; --swiper-pagination-bottom: 0; --swiper-pagination-bullet-size: 6px"> -->
    <div class="swiper photo-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="main-border-radius" src="/images/contacts/photo/photo-1.jpg">
            </div>
            <div class="swiper-slide">
                <img class="main-border-radius" src="/images/contacts/photo/photo-2.jpg">
            </div>
            <div class="swiper-slide">
                <img class="main-border-radius" src="/images/contacts/photo/photo-1.jpg">
            </div>
            <div class="swiper-slide">
                <img class="main-border-radius" src="/images/contacts/photo/photo-2.jpg">
            </div>
            <div class="swiper-slide">
                <img class="main-border-radius" src="/images/contacts/photo/photo-1.jpg">
            </div>
            <div class="swiper-slide">
                <img class="main-border-radius" src="/images/contacts/photo/photo-2.jpg">
            </div>
            <div class="swiper-slide">
                <img class="main-border-radius" src="/images/contacts/photo/photo-1.jpg">
            </div>
            <div class="swiper-slide">
                <img class="main-border-radius" src="/images/contacts/photo/photo-2.jpg">
            </div>
            <div class="swiper-slide">
                <img class="main-border-radius" src="/images/contacts/photo/photo-1.jpg">
            </div>
            <div class="swiper-slide">
                <img class="main-border-radius" src="/images/contacts/photo/photo-2.jpg">
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
</main>