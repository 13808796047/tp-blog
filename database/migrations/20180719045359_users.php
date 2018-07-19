<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Users extends Migrator
{
    public function up()
    {
        $table = $this->table('users');
        $table->addColumn('username', 'string', ['limit' => 32])
            ->addColumn('password', 'string', ['limit' => 128])
            ->save();
    }

    public function down()
    {
        $this->dropTable('users');
    }
}
