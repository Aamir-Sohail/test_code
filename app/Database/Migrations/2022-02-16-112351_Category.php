<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Category extends Migration
{
    public function up()
    {
        
            $this->forge->addField([
                'id'         => ['type' => 'INT', 'constraint' => 31, 'auto_increment'=> true, 'unsinged'=>true,],
                'title'      => ['type' => 'varchar', 'constraint' => 31],
                'description' => ['type' => 'varchar', 'constraint' => 63],
                'created_at' => ['type' => 'datetime', 'null' => true],
                'updated_at' => ['type' => 'datetime', 'null' => true],
                'deleted_at' => ['type' => 'datetime', 'null' => true],
            ]);
    
            $this->forge->addPrimaryKey('id',true);  
           
    
            $this->forge->createTable('category' ,true);
    }

    public function down()
    {
        $this->forge->dropTable('category');
    }
}
