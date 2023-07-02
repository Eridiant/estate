<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

$currentLang = Yii::$app->language;
$model = \backend\modules\language\models\Language::find()->where(['deleted_at' => null])->all();
$cLang = \backend\modules\language\models\Language::find()->where(['deleted_at' => null, 'key' => $currentLang])->one();

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

	<meta property="og:image" content="/images/dist/preview.jpg">

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Michroma&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?php require_once('template-header.php'); ?>

<?= $content ?>

<?php require_once('template-footer.php'); ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
