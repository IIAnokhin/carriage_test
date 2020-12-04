<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%carriage}}`.
 */
class m201204_114347_create_carriage_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%carriage}}', [
            'id'        => $this->primaryKey(),
            'number'    => $this->string(8),
            'year'      => $this->date('Y'),
            'thickness' => $this->integer(2),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%carriage}}');
    }
}
