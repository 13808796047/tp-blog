<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Settings extends Migrator
{
    public function up()
    {
        $table = $this->table('settings');
        $table->addColumn('c_name', 'string',['limit'=>32])
            ->addColumn('c_value', 'string', ['limit' => 255])
            ->save();
    }

    public function down()
    {
        $this->dropTable('users');
    }
}
