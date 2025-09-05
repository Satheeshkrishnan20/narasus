<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "home_curosele".
 *
 * @property int $id
 * @property int $product_id
 * @property string $background_image
 * @property string $left_image
 * @property string $headline
 * @property string $sub_headline
 * @property string $description
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 * @property int $status
 *
 * @property Product $product
 */
class HomeCurosele extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'home_curosele';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'background_image', 'left_image', 'headline', 'sub_headline', 'description', 'created_by', 'created_at', 'updated_by', 'updated_at', 'status'], 'required'],
            [['product_id', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['background_image', 'left_image', 'headline', 'sub_headline', 'description', 'created_by', 'updated_by'], 'string', 'max' => 255],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::class, 'targetAttribute' => ['product_id' => 'id']],
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
            'background_image' => 'Background Image',
            'left_image' => 'Left Image',
            'headline' => 'Headline',
            'sub_headline' => 'Sub Headline',
            'description' => 'Description',
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

}
