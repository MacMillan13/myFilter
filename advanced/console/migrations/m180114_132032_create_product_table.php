<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m180114_132032_create_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'content' => $this->string(),
            'description' => $this->string(),
            'date' => $this->date(),
            'bought' => $this->integer(),
            'recommend' => $this->boolean(),
            'discount' => $this->boolean(),
            'price' => $this->decimal(),
            'length' => $this->decimal(),
            'width' => $this->integer(),
            'country' =>$this->string(),
            'manufacturer' =>$this->string(),
            'image' =>$this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('product');
    }
}
