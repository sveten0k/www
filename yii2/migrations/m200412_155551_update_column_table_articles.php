<?php

use yii\db\Migration;

/**
 * Class m200412_155551_update_column_table_articles
 */
class m200412_155551_update_column_table_articles extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%articles}}', 'date', $this->date());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200412_155551_update_column_table_articles cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200412_155551_update_column_table_articles cannot be reverted.\n";

        return false;
    }
    */
}
