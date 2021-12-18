<?php

namespace common\models;

use common\behaviors\OrderBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string $sku
 * @property int $size
 * @property string $name
 * @property string $surname
 * @property string $phone
 * @property string $city
 * @property string $warehouse
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sku', 'size', 'name', 'surname', 'phone', 'city', 'warehouse'], 'required'],
            [['size'], 'default', 'value' => null],
            [['size'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['sku', 'phone'], 'string', 'max' => 32],
            [['name', 'surname', 'city', 'warehouse'], 'string', 'max' => 255],
        ];
    }

    /**
     * @return array[]
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => new Expression('now()'),
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sku' => 'Sku',
            'size' => 'Size',
            'name' => 'Name',
            'surname' => 'Surname',
            'phone' => 'Phone',
            'city' => 'City',
            'warehouse' => 'Warehouse',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
