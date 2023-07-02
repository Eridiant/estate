<?php

namespace common\components;

use Yii;
use yii\base\Component;

class TranslateComponent extends Component
{
    public function getT($key)
    {
        if (!Yii::$app->user->isGuest && Yii::$app->language != 'ru-RU') {
            return "<span class='translate' data-translate='" . $key . "'>" . Yii::t('frontend', $key) . "</span>";
        } else {
            return Yii::t('frontend', $key);
        }
    }
}