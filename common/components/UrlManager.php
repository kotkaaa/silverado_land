<?php

namespace common\components;

/**
 * Class UrlManager
 * @package common\components
 */
class UrlManager extends \yii\web\UrlManager
{
    /**
     * @param array|string $params
     * @return string
     */
    public function createUrl($params)
    {
        //Получаем сформированную ссылку(без идентификатора языка)
        $url = parent::createUrl($params);

        if (empty($params['lang'])) {
            //текущий язык приложения
            $curentLang = \Yii::$app->language;

            //Добавляем к URL префикс - буквенный идентификатор языка
            if ($url == '/') {
                return '/' . $curentLang;
            }

            return '/' . $curentLang . $url;
        };

        return $url;
    }
}