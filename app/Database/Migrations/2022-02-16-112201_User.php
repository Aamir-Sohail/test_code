<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' =>  'INT', 'constraint' =>11 ,'auto_increment'=> true, 'unsinged'=>true,], 
            'name'       => ['type' => 'varchar', 'constraint' => 31],
            'uid'        => ['type' => 'varchar', 'constraint' => 31],
            'email'      => ['type' => 'varchar', 'constraint' => 63],
            'summary'    => ['type' => 'varchar', 'constraint' => 255],
            'password'   => ['type' => 'varchar', 'constraint' => 255],
            'created_at' => ['type' => 'datetime', 'null' => true],
            'updated_at' => ['type' => 'datetime', 'null' => true],
            'deleted_at' => ['type' => 'datetime', 'null' => true],
        ]);

        $this->forge->addPrimaryKey('id',true);
      
        $this->forge->createTable('user',true);
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
