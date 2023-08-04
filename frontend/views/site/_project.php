<?php

?>
                    <div class="card-image main-border-radius<?= ($images || $model->gallery) ? ' sl' : ''; ?>">
                        <?php if ($images || $model->gallery): ?>
                            <?= $this->render('_cardsw', compact('images', 'model')) ?>
                        <?php elseif ($model->img): ?>
                            <picture>
                                <img src="/uploads/project/<?= $model->img; ?>" alt="">
                            </picture>
                        <?php else: ?>
                            <picture>
                                <img src="/images/index/projects/projects-<?= $model->id; ?>.jpg" alt="">
                            </picture>
                        <?php endif; ?>
                        <div class="card-sl">
                            <svg><use xlink:href="/images/icons.svg#arrow-increase"></use></svg>
                        </div>
                    </div>
                    <a href="#" class="card-active border border-white project"><?=Yii::t('frontend', 'Посмотреть')?>&#8195;<svg width="16" height="16"><use xlink:href="/images/icons.svg#small-arrow"></use></svg></a>
                    <div class="card-content">
                        <header>
                            <p class="subtitle dn">
                            </p>
                            <p class="caption"><?= $model?->name; ?></p>
                        </header>
                        <footer>
                            <p class="dn"><span><?=Yii::t('frontend', 'Страна')?>:</span> <span><?= $model?->country; ?></span></p>
                            <p><span><?=Yii::t('frontend', 'Сдача объекта')?>:</span> <span><?= $model?->date; ?></span></p><br>
                            <p><span><?=Yii::t('frontend', 'Варианты юнитов')?>:</span> <span><?= $model?->content?->apartment; ?></span></p>
                            <p class="dn"><span><?=Yii::t('frontend', 'Начальная цена')?> ($):</span> <span><?= $model?->price; ?></span></p>
                        </footer>
                        <div class="card-popup">
                            <p class="popup-desc">
                                <?= $model->content->desc ?? $model->excerpt ?? ''; ?>
                            </p>
                            <div class="popup-connect">
                                <ul class="popup-phone">
                                    <li>
                                        <span>
                                            <span>GR:</span><a href="tel:+995706070141">+995 706 070 141</a>
                                        </span>
                                        <span>
                                            <a href="https://telegram.me/+995706070141"><svg width="20" height="20"><use xlink:href="/images/icons.svg#telegram"></use></svg></a>
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
                                <div class="popup-action">
                                    <a href="" class="btn-black btn form-target">
                                        <span>
                                            <span><?=Yii::t('frontend', 'Хочу этот объект')?></span>
                                            <svg width="16" height="16"><use xlink:href="/images/icons.svg#arrow"></use></svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>