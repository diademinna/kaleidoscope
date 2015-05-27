<?php

use yii\db\Schema;
use yii\db\Migration;

class m150525_135340_init extends Migration
{
    public function safeUp()
    {
        $this->createTable('product',[
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'code' => Schema::TYPE_INTEGER,
            'price' => Schema::TYPE_INTEGER,
            'price_new'=> Schema::TYPE_INTEGER,
            'description' => Schema::TYPE_TEXT,
            'latest' => Schema::TYPE_BOOLEAN,
            'active' => Schema::TYPE_BOOLEAN,
            'pos' => Schema::TYPE_INTEGER,
            'category_id' => Schema::TYPE_INTEGER
        ]);

        $this->createTable('category', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'number' => Schema::TYPE_INTEGER,
            'description' => Schema::TYPE_TEXT,
            'image' => Schema::TYPE_STRING,
            'active' => Schema::TYPE_BOOLEAN,
            'pos' => Schema::TYPE_INTEGER,
            'category_id' => Schema::TYPE_INTEGER

        ]);


        $this->createTable('group_param', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'active' => Schema::TYPE_BOOLEAN,
            'category_id' => Schema::TYPE_INTEGER

        ]);

        $this->createTable('param', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'active' => Schema::TYPE_BOOLEAN,
            'pos' => Schema::TYPE_INTEGER,
            'image' => Schema::TYPE_STRING,
            'group_param_id' => Schema::TYPE_INTEGER

        ]);

        $this->createTable('photo_product', [
            'id' => Schema::TYPE_PK,
            'pos' => Schema::TYPE_INTEGER,
            'image' => Schema::TYPE_STRING,
            'product_id' => Schema::TYPE_INTEGER

        ]);

        $this->createTable('action',[
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'description' => Schema::TYPE_TEXT,
            'date' => Schema::TYPE_DATE,
            'active' => Schema::TYPE_BOOLEAN,
            'pos' => Schema::TYPE_INTEGER,
            'image' => Schema::TYPE_STRING,
        ]);

        $this->createTable('action_product',[
            'id' => Schema::TYPE_PK,
            'action_id' => Schema::TYPE_INTEGER,
            'product_id' => Schema::TYPE_INTEGER

        ]);




        $this->addForeignKey('product_category_id_FK','product','category_id','category','id');
        $this->addForeignKey('category_category_id_FK','category','category_id','category','id');
        $this->addForeignKey('group_param_category_id_FK','group_param','category_id','category','id');
        $this->addForeignKey('param_group_param_id_FK','param','group_param_id','group_param','id');
        $this->addForeignKey('photo_product_product_id_FK','photo_product','product_id','product','id');
        $this->addForeignKey('action_product_action_id_FK','action_product','action_id','action','id');
        $this->addForeignKey('action_product_product_id_FK','action_product','product_id','product','id');



        return true;
    }

    public function safeDown()
    {
        $this->dropForeignKey('product_category_id_FK', 'product');
        $this->dropForeignKey('category_category_id_FK', 'category');
        $this->dropForeignKey('group_param_category_id_FK', 'group_param');
        $this->dropForeignKey('param_group_param_id_FK', 'param');
        $this->dropForeignKey('photo_product_product_id_FK', 'photo_product');
        $this->dropForeignKey('action_product_action_id_FK', 'action_product');
        $this->dropForeignKey('action_product_product_id_FK', 'action_product');


        $this->dropTable('product');
        $this->dropTable('category');
        $this->dropTable('group_param');
        $this->dropTable('param');
        $this->dropTable('photo_product');
        $this->dropTable('action');
        $this->dropTable('action_product');



        return true;
    }
}