<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "home_page_product".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 * @property int $status
 *
 * @property HomePageProductMapping[] $homePageProductMappings
 */
class HomePageProduct extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'home_page_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'created_by', 'created_at', 'updated_by', 'updated_at', 'status'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['status'], 'integer'],
            [['title', 'created_by', 'updated_by'], 'string', 'max' => 255],
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
            'title' => 'Title',
            'description' => 'Description',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[HomePageProductMappings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHomePageProductMappings()
    {
        return $this->hasMany(HomePageProductMapping::class, ['home_page_product_id' => 'id']);
    }

}
