<?php

namespace app\models;
use yii\web\UploadedFile;
use yii\helpers\VarDumper;

use Yii;

/**
 * This is the model class for table "moduls".
 *
 * @property int $id
 * @property string $name Модуль
 * @property string $alt_name Название модуля
 * @property string $img Иконка
 * @property string $description Описание
 *
 * @property Materials[] $materials
 */
class Moduls extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'moduls';
    }

    /** 
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'alt_name', 'img', 'description'], 'required'],
            [['name', 'alt_name', 'img'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 1000],
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
            'alt_name' => 'Alt Name',
            'img' => 'Img',
            'description' => 'Description',
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
        return $this->hasMany(Materials::className(), ['id_moduls' => 'id']);
    }
}
