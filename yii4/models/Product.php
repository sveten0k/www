<?php


namespace app\models;


use yii\db\ActiveRecord;
/**
 * This is the model class for table "wfm_products".
 *
 * @property int $id
 * @property string $title
 * @property int $category_id
 * @property int $price
 */


class Product extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%products}}';
    }
    public function getCategory(){
        return $this->hasOne(Category::class,['id'=>'category_id']);
    }
}