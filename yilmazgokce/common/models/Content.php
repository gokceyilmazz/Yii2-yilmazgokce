<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%content}}".
 *
 * @property string $content_id
 * @property string $title
 * @property string|null $description
 * @property string|null $tags
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 *
 * @property User $createdBy
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%content}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content_id', 'title'], 'required'],
            [['created_by'], 'string'],
            [[ 'created_at',  'description'], 'string'],
            [['content_id'], 'string', 'max' => 16],
            [['title'], 'string', 'max' => 1000],
            [['tags'], 'string', 'max' => 500],
            [['content_id'], 'unique'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'content_id' => 'İçerik Id',
            'title' => 'Başlık',
            'description' => 'İçerik',
            'tags' => 'Tagler',
            'created_at' => 'Paylaşılma Zamanı',
            'createdby' => 'Yükleyen Kişi'

        ];
    }


}
