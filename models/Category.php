<?php

namespace app\models;
use yii\web\UploadedFile;
use yii\helpers\VarDumper;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $name Название
 * @property string $img Иконка
 *
 * @property Materials[] $materials
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'img'], 'required'],
            [['name', 'img'], 'string', 'max' => 255],
            [['img'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'img' => 'Img',
        ];
    }

    public function upload()
    {    
        if ($this->validate(false)) {
            $this->img->saveAs('uploads/' . $this->img->baseName . '.' . $this->img->extension);
            $this->img = 'uploads/' . $this->img->baseName . '.' . $this->img->extension;
          
            return true;
        } else {
            return false;
        }
    }

    /**
     * Gets query for [[Materials]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaterials()
    {
        return $this->hasMany(Materials::className(), ['id_category' => 'id']);
    }
}
