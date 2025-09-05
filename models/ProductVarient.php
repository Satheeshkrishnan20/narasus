<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_varient".
 *
 * @property int $id
 * @property string $varient
 * @property string $description
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 * @property int $status
 *
 * @property ProductPrice[] $productPrices
 */
class ProductVarient extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_varient';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['varient', 'description', 'created_by', 'created_at', 'updated_by', 'updated_at', 'status'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['status'], 'integer'],
            [['varient', 'created_by', 'updated_by'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 2000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'varient' => 'Varient',
            'description' => 'Description',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[ProductPrices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductPrices()
    {
        return $this->hasMany(ProductPrice::class, ['product_varient_id' => 'id']);
    }

}
