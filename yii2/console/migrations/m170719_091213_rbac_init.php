<?php

use yii\db\Migration;

class m170719_091213_rbac_init extends Migration
{
    
    /*public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m170719_091213_rbac_init cannot be reverted.\n";

        return false;
    }
    */
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $auth = Yii::$app->authManager;

        //add 
        //add "manage user" permission
        $manageUsers = $auth->createPermission('manageUsers');
        $manageUsers->description = 'Manage Users';
        $auth->add($manageUsers); 
    }

    public function down()
    {
        echo "m170719_091213_rbac_init cannot be reverted.\n";

        return false;
    }
    
}
