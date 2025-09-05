<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_price".
 *
 * @property int $id
 * @property int $product_id
 * @property int $product_varient_id
 * @property int $value
 * @property float $price
 * @property float $mrp
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 * @property int $status
 *
 * @property Product $product
 * @property ProductVarient $productVarient
 */
class ProductPrice extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_price';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'product_varient_id', 'value', 'price', 'mrp', 'created_by', 'created_at', 'updated_by', 'updated_at', 'status'], 'required'],
            [['product_id', 'product_varient_id', 'value', 'status'], 'integer'],
            [['price', 'mrp'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by'], 'string', 'max' => 255],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::class, 'targetAttribute' => ['product_id' => 'id']],
            [['product_varient_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductVarient::class, 'targetAttribute' => ['product_varient_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'product_varient_id' => 'Product Varient ID',
            'value' => 'Value',
            'price' => 'Price',
            'mrp' => 'Mrp',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::class, ['id' => 'product_id']);
    }

    /**
     * Gets query for [[ProductVarient]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductVarient()
    {
        return $this->hasOne(ProductVarient::class, ['id' => 'product_varient_id']);
    }

}
