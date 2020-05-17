<?php

use yii\db\Migration;

/**
 * Class m200413_065558_update_articles_table
 */
class m200413_065558_update_articles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%articles}}', 'date', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200413_065558_update_articles_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200413_065558_update_articles_table cannot be reverted.\n";

        return false;
    }
    */
}
