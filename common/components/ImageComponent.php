<?php

namespace common\components;

use yii\base\Component;

class ImageComponent extends Component
{
    public function image($model, $parameters)
    {
        $shablon = $parameters['shablon'] ?? 0;
        $path = $parameters['path'] ?? '';
        if (!$shablon) {
            $images = [];
            foreach ($model as $key => $value) {
                if ($key == '1x') {
                    $images[] = $path . $value;
                    continue;
                }
                $images[] = $path . $value . ' ' . $key;
            }

            $images = array_reverse($images, true);
            return implode(', ', $images);
        }
    }
}