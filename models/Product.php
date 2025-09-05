<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $category_id
 * @property string $product_name
 * @property int $min_quantity
 * @property int $max_quantity
 * @property int $gift 0->not eligible for gift 1-> Eligible for gift
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property int $updated_at
 * @property int $status
 *
 * @property Category $category
 * @property HomeCurosele[] $homeCuroseles
 * @property ProductPrice[] $productPrices
 * @property Review[] $reviews
 */
class Product extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'product_name', 'min_quantity', 'max_quantity', 'gift', 'created_by', 'created_at', 'updated_by', 'updated_at', 'status'], 'required'],
            [['category_id', 'min_quantity', 'max_quantity', 'gift', 'updated_at', 'status'], 'integer'],
            [['created_at'], 'safe'],
            [['product_name', 'created_by', 'updated_by'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'product_name' => 'Product Name',
            'min_quantity' => 'Min Quantity',
            'max_quantity' => 'Max Quantity',
            'gift' => 'Gift',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    /**
     * Gets query for [[HomeCuroseles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHomeCuroseles()
    {
        return $this->hasMany(HomeCurosele::class, ['product_id' => 'id']);
    }

    /**
     * Gets query for [[ProductPrices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductPrices()
    {
        return $this->hasMany(ProductPrice::class, ['product_id' => 'id']);
    }

    /**
     * Gets query for [[Reviews]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReviews()
    {
        return $this->hasMany(Review::class, ['product_id' => 'id']);
    }

}
