<?php

namespace common\modules\languages\widgets;

use yii\helpers\Html;

/**
 * Class ListWidget
 * @package common\modules\languages\widgets
 */
class ListWidget extends \yii\base\Widget
{
    /** @var array */
    public $array_languages;

    /**
     * @return void
     */
    public function init()
    {
        $language = \Yii::$app->language; //текущий язык

        //Создаем массив ссылок всех языков с соответствующими GET параметрами
        $array_lang = [];

        foreach (\Yii::$app->getModule('languages')->languages as $key => $value){
            $array_lang += [$value => Html::a($key, ['languages/default/index', 'lang' => $value])];
        }

        //ссылку на текущий язык не выводим
        if (isset($array_lang[$language])) unset($array_lang[$language]);

        $this->array_languages = $array_lang;
    }

    /**
     * @return string
     */
    public function run() {
        return $this->render('list',[
            'array_lang' => $this->array_languages
        ]);
    }
}