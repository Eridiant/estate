
<section class="form container text-white shadow-blue" style="max-width: 1204px; margin-left: auto; margin-right: auto">
    <div class="form-background background main-border-radius">
        <picture>
            <img src="/images/contacts/form.jpg" alt="">
        </picture>
    </div>
    <div class="form-wrapper">
        <p class="title"><?=Yii::t('frontend', 'Получите консультацию')?></p>
        <p class="form-desc"><?=Yii::t('frontend', 'Оставьте заявку на сайте или  позвоните по телефону')?></p>
        <div class="header-localization-links">
            <ul>
                <li>
                    <span>
                        <span>GR:</span><a href="tel:+995555932307">+995 555 932 307</a>
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
        <form id="forms" class="form-form" action="#" method="post">
            <div class="form-inner">
                <div class="form-inner-fl">
                    <div class="form-inner-container">
                        <input type="text" id="name" name="name" placeholder="<?=Yii::t('frontend', 'Имя')?>" required>
                        <label for="name"><?=Yii::t('frontend', 'Имя')?>:</label>
                    </div>

                    <div class="form-inner-container">
                        <input type="tel" id="phone" name="phone" placeholder="<?=Yii::t('frontend', 'Телефон')?>"  pattern="\+?[0-9\s\-\(\)]+" title="<?=Yii::t('frontend', 'только цифры')?>" required>
                        <label for="phone"><?=Yii::t('frontend', 'Телефон')?>:</label>
                    </div>
                </div>
                <div class="form-inner-container">
                    <textarea id="message" name="message" placeholder="<?=Yii::t('frontend', 'Сообщение')?>" required></textarea>
                    <label for="message"><?=Yii::t('frontend', 'Сообщение')?>:</label>
                </div>
            </div>
            <div>
                <button class="form-btn btn" type="submit">
                    <span>
                        <span><?=Yii::t('frontend', 'отправить')?></span>
                        <svg width="16" height="16"><use xlink:href="/images/icons.svg#arrow"></use></svg>
                    </span>
                </button>
            </div>
        </form>
    </div>
</section>