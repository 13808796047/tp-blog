<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Posts extends Migrator
{
    public function up()
    {
        $table = $this->table('posts');
        $table->addColumn('title', 'string')
            ->addColumn('content', 'text')
            ->addTimestamps()
            ->save();
    }

    public function down()
    {
        $this->dropTable('users');
    }
}
