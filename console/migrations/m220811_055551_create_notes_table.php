<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%notes}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m220811_055551_create_notes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%notes}}', [
            'id' => $this->primaryKey(),
            'text' => $this->string(1000)->notNull(),
            'created_by' => $this->integer(11)->notNull(),
            'created_at' => $this->dateTime()->notNull(),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-notes-created_by}}',
            '{{%notes}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-notes-created_by}}',
            '{{%notes}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-notes-created_by}}',
            '{{%notes}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-notes-created_by}}',
            '{{%notes}}'
        );

        $this->dropTable('{{%notes}}');
    }
}
