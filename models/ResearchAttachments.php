<?php

namespace culturePnPsu\research\models;

use Yii;

/**
 * This is the model class for table "research_attachments".
 *
 * @property integer $id
 * @property string $title
 * @property string $file
 */
class ResearchAttachments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'research_attachments';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('research_db');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 200],
            [['file'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('culture\research', 'ID'),
            'title' => Yii::t('culture\research', 'Title'),
            'file' => Yii::t('culture\research', 'File'),
        ];
    }
}
