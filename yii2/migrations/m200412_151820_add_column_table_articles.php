<?php

use yii\db\Migration;

/**
 * Class m200412_151820_add_column_table_articles
 */
class m200412_151820_add_column_table_articles extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%articles}}', 'date', $this->dateTime());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%articles}}', 'date');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200412_151820_add_column_table_articles cannot be reverted.\n";

        return false;
    }
    */
}
