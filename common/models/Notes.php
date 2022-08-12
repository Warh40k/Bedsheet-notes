<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "notes".
 *
 * @property int $id
 * @property string $text
 * @property int $created_by
 * @property string $created_at
 *
 * @property User $createdBy
 */
class Notes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'created_by', 'created_at'], 'required'],
            [['created_by'], 'integer'],
            [['created_at'], 'safe'],
            [['text'], 'string', 'max' => 1000],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UserQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\NotesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\NotesQuery(get_called_class());
    }
}
