<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "home_page_product_mapping".
 *
 * @property int $id
 * @property int $home_page_product_id
 * @property int $product_id
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 * @property int $status
 *
 * @property HomePageProduct $homePageProduct
 */
class HomePageProductMapping extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'home_page_product_mapping';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['home_page_product_id', 'product_id', 'created_by', 'created_at', 'updated_by', 'updated_at', 'status'], 'required'],
            [['home_page_product_id', 'product_id', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by'], 'string', 'max' => 255],
            [['home_page_product_id'], 'exist', 'skipOnError' => true, 'targetClass' => HomePageProduct::class, 'targetAttribute' => ['home_page_product_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'home_page_product_id' => 'Home Page Product ID',
            'product_id' => 'Product ID',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[HomePageProduct]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHomePageProduct()
    {
        return $this->hasOne(HomePageProduct::class, ['id' => 'home_page_product_id']);
    }

}
