<?php

use yii\db\Migration;

/**
 * Class m171213_150253_create_users
 */
class m171213_150253_create_users extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171213_150253_create_users cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171213_150253_create_users cannot be reverted.\n";

        return false;
    }
    */
}
