<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
use yii\helpers\VarDumper;

/**
 * This is the model class for table "materials".
 *
 * @property int $id
 * @property string $name Название
 * @property string $description Описание
 * @property string $file Файл
 * @property int $id_category
 * @property int $id_moduls
 *
 * @property Moduls $moduls
 * @property Category $category
 */
class Materials extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'materials';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'file', 'id_category', 'id_moduls'], 'required'],
            [['id_category', 'id_moduls'], 'integer'],
            [['name', 'file'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 1000],
            [['id_moduls'], 'exist', 'skipOnError' => true, 'targetClass' => Moduls::className(), 'targetAttribute' => ['id_moduls' => 'id']],
            [['id_category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['id_category' => 'id']],
            [['file'], 'file', 'skipOnEmpty' => false, 'extensions' => 'pdf, zip, docx'],
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
            'description' => 'Description',
            'file' => 'File',
            'id_category' => 'Id Category',
            'id_moduls' => 'Id Moduls',
        ];
    }

    public function upload()
    {    
        if ($this->validate(false)) {
            $this->file->saveAs('uploads/' . $this->file->baseName . '.' . $this->file->extension);
            $this->file = 'uploads/' . $this->file->baseName . '.' . $this->file->extension;
          
            return true;
        } else {
            return false;
        }
    }

    /**
     * Gets query for [[Moduls]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModuls()
    {
        return $this->hasOne(Moduls::className(), ['id' => 'id_moduls']);
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'id_category']);
    }
}
