<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profiles extends Migration
{
    public function up()
    {
            $this->forge->addField([
                'id'         => ['type' => 'INT', 'constraint' => 31, 'auto_increment'=> true, 'unsinged'=>true,],
                'User_id'      => ['type' => 'varchar', 'constraint' => 31],
                'Name'    => ['type' => 'varchar', 'constraint' => 63],
                'City'  => ['type' => 'varchar', 'constraint' => 31],
                'Address'=> ['type' => 'varchar', 'constraint' => 255],
                'State'=> ['type' => 'varchar', 'constraint' => 255],
                'Country'=> ['type' => 'varchar', 'constraint' => 255],
                'created_at' => ['type' => 'datetime', 'null' => true],
                'updated_at' => ['type' => 'datetime', 'null' => true],
                'deleted_at' => ['type' => 'datetime', 'null' => true],
            ]);
    
            $this->forge->addKey('id',true);
      
    
            $this->forge->createTable('profiles',true);
    }

    public function down()
    {
        $this->forge->dropTable('profiles');
        //
    }
}
