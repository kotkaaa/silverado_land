<?php

namespace frontend\models;

use common\models\OrderInterface;

/**
 * Class OrderForm
 * @package frontend\models
 */
class OrderForm extends \yii\base\Model implements OrderInterface
{
    /** @var string */
    public $sku;

    /** @var float */
    public $size;

    /** @var string */
    public $name;

    /** @var string */
    public $surname;

    /** @var string */
    public $phone;

    /** @var string */
    public $city;

    /** @var string */
    public $warehouse;

    /**
     * @return array[]
     */
    public function rules()
    {
        return [
            [['sku', 'name', 'surname', 'phone', 'city', 'warehouse'], 'required'],
            [['sku', 'size', 'name', 'surname', 'phone', 'city', 'warehouse'], 'safe'],
        ];
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'name' =>  \Yii::t('app', 'Ім\'я'),
            'surname' =>  \Yii::t('app', 'Прізвище'),
            'phone' =>  \Yii::t('app', 'Телефон'),
            'city' =>  \Yii::t('app', 'Населений пункт'),
            'warehouse' =>  \Yii::t('app', 'Відділення Нової Пошти')
        ];
    }
}