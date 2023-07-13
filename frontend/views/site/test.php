<section id="test" class="projects container" style="max-width: 1204px; margin-left: auto; margin-right: auto">
    <p class="title">Надежные проекты</p>
    <div class="projects-switch">
        <a href="#" class="active" data-type="all">Все</a>
        <?php foreach ($options as $option): ?>
            <?php if ($option->id == 2): ?>
                <span>
                    <a href="#" data-type="<?= $option->type; ?>"><?= $option->name; ?></a>
            <?php elseif ($option->id == 3): ?>
                    <a href="#" data-type="<?= $option->type; ?>"><?= $option->name; ?></a>
                </span>
            <?php else: ?>
                <a href="#" data-type="<?= $option->type; ?>"><?= $option->name; ?></a>
            <?php endif; ?>
        <?php endforeach; ?>
        <!-- <a href="#" data-type="flat">Квартиры</a>
        <span>
            <a href="#" data-type="villa">Виллы</a>
            <a href="#" data-type="penthouse">Пентхаусы</a>
        </span>
        <a href="#" data-type="commercial">Коммерческая недвижимость</a> -->
    </div>
    <!-- <div class="swiper-buttons">
        <div class="projects-swiper-button-prev">&#8249;</div>
        <div class="projects-swiper-button-next">&#8250;</div>
    </div> -->
    <div id="test1">
        <?= $this->render('_test', compact('model')) ?>
    </div>
</section>
