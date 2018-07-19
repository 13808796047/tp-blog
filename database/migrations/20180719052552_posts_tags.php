<?php

use think\migration\Migrator;
use think\migration\db\Column;

class PostsTags extends Migrator
{
    public function up()
    {
        $table = $this->table('posts_tags');
        $table->addColumn('post_id', 'integer')
            ->addColumn('tag_id', 'integer')
            ->save();
    }

    public function down()
    {
        $this->dropTable('posts_tags');
    }
}
