<?php

namespace frontend\models;

/**
 * Class OrderForm
 * @package frontend\models
 */
class OrderForm extends \yii\base\Model
{
    /** @var string */
    public $sku;

    /** @var float */
    public $size;

    /** @var string */
    public $name;

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
            [['sku', 'name', 'phone', 'city', 'warehouse'], 'required'],
            [['sku', 'size', 'name', 'phone', 'city', 'warehouse'], 'safe'],
        ];
    }
}