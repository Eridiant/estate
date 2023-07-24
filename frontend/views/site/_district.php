                <div class="card-image main-border-radius">
                    <?php if ($district?->img): ?>
                        <picture>
                            <img src="/uploads/district/<?= $district?->img; ?>" alt="">
                        </picture>
                    <?php else: ?>
                        <picture>
                            <img src="/images/index/districts/districts-1.jpg" alt="">
                        </picture>
                    <?php endif; ?>
                </div>
                <div class="card-content">
                    <header>
                        <p class="subtitle"><?=Yii::t('frontend', 'район')?></p><br>
                        <p class="caption"><?= $district?->content?->title; ?></p>
                    </header>
                    <footer>
                        <?php if ($district?->content?->description): ?>
                            <p class="districts-description<?= $district?->content?->space_description ? ' white-space' : ''; ?>">
                                <?= $district?->content?->description; ?>
                            </p>
                        <?php else: ?>
                            <p <?= $district?->content?->space_excerpt ? 'class="white-space"' : ''; ?>>
                                <?= $district?->content?->excerpt; ?>
                            </p>
                        <?php endif; ?>
                        <a href="#" class="card-link-hover target popup-hide"><svg width="16" height="16">
                                <use xlink:href="/images/icons.svg#small-arrow"></use>
                            </svg></a>
                    </footer>
                </div>