<?php

namespace common\models;

use app\models\ImageUpload;
use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $description
 * @property int $data
 * @property int $bought
 * @property int $recommend
 * @property int $discount
 * @property int $price
 * @property double $length
 * @property double $width
 * @property string $country
 * @property string $manufacturer
 * @property string $image
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bought', 'recommend', 'discount', 'price'], 'integer'],
            [['length', 'width'], 'required'],
            [['length', 'width'], 'number'],
            [['title', 'content', 'description', 'country', 'manufacturer', 'image'], 'string', 'max' => 255],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 25],
            [['date'], 'date', 'format' => 'php:Y-m-d'],
            [['date'], 'default', 'value' => date('Y-m-d')],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'description' => 'Description',
            'date' => 'Date',
            'bought' => 'Bought',
            'recommend' => 'Recommend',
            'discount' => 'Discount',
            'price' => 'Price',
            'length' => 'Length',
            'width' => 'Width',
            'country' => 'Country',
            'manufacturer' => 'Manufacturer',
            'image' => 'Image',
        ];
    }
    public static function getAll()
    {
        $product = Product::find()->all();
        $data['product'] = $product;
        return $data;
    }
    public static function getRecommend()
    {
        $product = Product::find()->where(['recommend'=> 1])->all();
        $data['product'] = $product;
        return $data;
    }
    public static function getHit()
    {
        $product = Product::find()->where(['>=', 'bought' , 10])->all();
        $data['product'] = $product;
        return $data;
    }
    public static function getShares()
    {
        $product = Product::find()->where(['>', 'discount' , 0])->all();
        $data['product'] = $product;
        return $data;
    }
    public function saveImage($filename)
    {
        $this->image = $filename;
        return $this->save(false);
    }

    public function getImage()
    {
        return ($this->image) ? '/admin/uploads/' . $this->image : '/no-image.png';
    }



    public function deleteImage()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image);
    }

    public function beforeDelete()
    {
        $this->deleteImage();
        return parent::beforeDelete();
    }

}
