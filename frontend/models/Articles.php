<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property integer $id
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property string $preview_text
 * @property string $preview_picture
 * @property string $detail_text
 * @property string $detatil_picture
 * @property string $date_create
 * @property integer $activate
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'keywords', 'description', 'preview_text', 'preview_picture', 'detail_text', 'detatil_picture', 'date_create', 'activate'], 'required'],
            [['description', 'preview_text', 'detail_text'], 'string'],
            [['date_create'], 'safe'],
            [['activate'], 'integer'],
            [['title', 'preview_picture', 'detatil_picture'], 'string', 'max' => 155],
            [['keywords'], 'string', 'max' => 255],
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
            'keywords' => 'Keywords',
            'description' => 'Description',
            'preview_text' => 'Preview Text',
            'preview_picture' => 'Preview Picture',
            'detail_text' => 'Detail Text',
            'detatil_picture' => 'Detatil Picture',
            'date_create' => 'Date Create',
            'activate' => 'Activate',
        ];
    }
}
