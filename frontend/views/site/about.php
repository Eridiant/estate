<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = Yii::t('frontend', 'О нас');
$this->params['breadcrumbs'][] = $this->title;
?>
<main>
    <section class="our-photo container" style="max-width: 1204px; margin-left: auto; margin-right: auto">
    <picture>
        <img src="/images/about/about.jpg" alt="">
    </picture>
</section>
<section class="about container" style="max-width: 1204px; margin-left: auto; margin-right: auto">
    <p class="subtitle">DDA Real Estate</p>
    <p class="title"><?=Yii::t('frontend', 'О компании')?></p>
    <div class="about-desc">
        <div class="about-desc-column">
            <?=Yii::t('frontend', '<p>Международное агентство по продаже недвижимости в Грузии, ОАЭ, Турции и Таиланде, созданное в 2007 году, входит в группу компаний «Бизнес-Юрист». Единственная Компания на рынке, которая имеет более 300 офисов в России от Калининграда до Камчатки, офисы в Казахстане, Турции и головной офис в Дубае.</p><p>Мы стремимся учитывать индивидуальные потребности каждого нашего клиента и предоставлять наиболее эффективные решения для реализации их целей в области недвижимости. Наша команда профессионалов всегда готова ответить на любые вопросы и предоставить полную информацию о всех услугах, которые мы предоставляем.</p>')?>
        </div>
        <div class="about-desc-column">
            <?=Yii::t('frontend', '<p>Мы уделяем особое внимание своей репутации и несем ответственность за все свои действия. Именно поэтому мы уверены в качестве наших услуг и уверены, что сможем удовлетворить все запросы и потребности наших клиентов в области недвижимости.</p><p>Выбирая нашу компанию, вы можете быть уверены, что получите лучший сервис и профессиональную помощь в решении всех вопросов связанных с недвижимостью. Мы всегда готовы помочь вам достигнуть ваших целей в сфере недвижимости и обеспечить вас высококачественным сервисом.</p>')?>
        </div>
    </div>
</section>
<section class="partners container" style="max-width: 1204px; margin-left: auto; margin-right: auto">
    <p class="title"><?=Yii::t('frontend', 'Партнеры')?></p>
    <div class="partners-icons">
        <div class="partners-icon">
            <pucture>
                <img src="/images/about/partners/next_group.jpg" alt="">
            </pucture>
        </div>
        <div class="partners-icon">
            <pucture>
                <img src="/images/about/partners/wyndham_grand.jpg" alt="">
            </pucture>
        </div>
        <div class="partners-icon">
            <pucture>
                <img src="/images/about/partners/mardi_holding.jpg" alt="">
            </pucture>
        </div>
        <div class="partners-icon">
            <pucture>
                <img src="/images/about/partners/european_village.jpg" alt="">
            </pucture>
        </div>
        <div class="partners-icon">
            <pucture>
                <img src="/images/about/partners/lagoon_resort.jpg" alt="">
            </pucture>
        </div>
        <div class="partners-icon">
            <pucture>
                <img src="/images/about/partners/alliance_centropolis.jpg" alt="">
            </pucture>
        </div>
        <div class="partners-icon">
            <pucture>
                <img src="/images/about/partners/black_sea_line.jpg" alt="">
            </pucture>
        </div>
        <div class="partners-icon">
            <pucture>
                <img src="/images/about/partners/jb.jpg" alt="">
            </pucture>
        </div>
        <div class="partners-icon">
            <pucture>
                <img src="/images/about/partners/rr.jpg" alt="">
            </pucture>
        </div>
    </div>
</section>
<?= $this->render('_services') ?>
<?= $this->render('_form') ?>
</main>
