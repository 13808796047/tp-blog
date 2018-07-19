<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Tags extends Migrator
{
    public function up()
    {
        $table = $this->table('tags');
        $table->addColumn('name', 'string',['limit'=>16])
            ->save();
    }

    public function down()
    {
        $this->dropTable('users');
    }
}
