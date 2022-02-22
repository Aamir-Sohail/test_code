<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Posts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'constraint' => 31, 'auto_increment'=> true, 'unsinged'=>true,],
            'title'      => ['type' => 'varchar', 'constraint' => 31],
            'content'    => ['type' => 'varchar', 'constraint' => 63],
            'thumbnail'  => ['type' => 'varchar', 'constraint' => 31],
            'category_id'=> ['type' => 'varchar', 'constraint' => 255],
            'created_at' => ['type' => 'datetime', 'null' => true],
            'updated_at' => ['type' => 'datetime', 'null' => true],
            'deleted_at' => ['type' => 'datetime', 'null' => true],
        ]);

        $this->forge->addKey('id',true);
        

        $this->forge->createTable('post',true);
    }

    public function down()
    {
        $this->forge->dropTable('post');
    }
}
