<?php


namespace common\components;


use backend\modules\language\models\Language;
use yii\base\BootstrapInterface;

class LanguageSelector implements BootstrapInterface
{
    public function bootstrap($app)
    {
        if (isset(Language::getCurrent()->key)) {
            $app->language = Language::getCurrent()->key;
        } else {
            $lang = Language::find()
                ->one();
            $lang->default = 1;
            $lang->save();
            $app->language = Language::getCurrent()->key;
        }
        
    }
}