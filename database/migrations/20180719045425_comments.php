<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Comments extends Migrator
{
    public function up()
    {
        $table = $this->table('comments');
        $table->addColumn('post_id', 'integer')
            ->addColumn('content', 'string', ['limit' => 255])
            ->addColumn('status', 'integer', ['default' => 0])
            ->addColumn('create_time', 'timestamp')
            ->save();
    }

    public function down()
    {
        $this->dropTable('users');
    }
}
