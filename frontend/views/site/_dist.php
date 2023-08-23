                <div class="card-image main-border-radius">
                    <?php if ($district->gallery): ?>
                        <?= $this->render('_cardsw', [
                            'model' => $district,
                            'images' => [],
                            'path' => 'district',
                        ]) ?>
                        <!-- <div class="sl">
                            <div class="card-sl">
                                <svg width="31" height="31"><use xlink:href="/images/icons.svg#arrow-increase"></use></svg>
                            </div>
                        </div> -->
                    <?php elseif ($district?->img): ?>
                        <picture>
                            <img src="/uploads/district/<?= $district?->img; ?>" loading="lazy" width="378" height="567" alt="">
                        </picture>
                    <?php else: ?>
                        <picture>
                            <img src="/images/index/districts/districts-1.jpg" loading="lazy" width="378" height="567" alt="">
                        </picture>
                    <?php endif; ?>
                </div>
                <div class="card-content">
                    <header>
                        <p class="subtitle"><?=Yii::t('frontend', 'район')?></p><br>
                        <p class="caption"><?= $district?->content?->title; ?></p>
                    </header>
                    <footer>
                        <?php if (!empty($district?->content?->description)): ?>
                            <p class="districts-description<?= $district?->content?->space_description ? ' white-space' : ''; ?>">
                                <?= $district?->content?->description; ?>
                            </p>
                        <?php else: ?>
                            <p <?= $district?->content?->space_excerpt ? 'class="white-space"' : ''; ?>>
                                <?= $district?->content?->excerpt; ?>
                            </p>
                        <?php endif; ?>
                        <a href="#" class="card-link-hover popup-hide district"><svg width="16" height="16">
                                <use xlink:href="/images/icons.svg#small-arrow"></use>
                            </svg></a>
                    </footer>
                </div>
