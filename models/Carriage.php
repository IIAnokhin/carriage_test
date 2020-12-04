<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carriage".
 *
 * @property int $id
 * @property string|null $number
 * @property int|null $year
 * @property int|null $thickness
 */
class Carriage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'carriage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year', 'thickness'], 'integer'],
            [['number'], 'string', 'max' => 8],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Number',
            'year' => 'Year',
            'thickness' => 'Thickness',
        ];
    }
}
