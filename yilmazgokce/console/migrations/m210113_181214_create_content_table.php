<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%content}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m210113_181214_create_content_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%content}}', [
            'content_id' => $this->string(16)->notNull(),
            'title' => $this->string(1000)->notNull(),
            'description' => $this->text(),
            'tags' => $this->string(500),
            'created_at' => $this->integer(11),
            'created_by' => $this->integer(11),
        ]);

        $this->addPrimaryKey('PK_contents_content_id','{{%content}}','content_id');



        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-content-created_by}}',
            '{{%content}}',
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
            '{{%fk-content-created_by}}',
            '{{%content}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-content-created_by}}',
            '{{%content}}'
        );

        $this->dropTable('{{%content}}');
    }
}
