<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNewsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'news' => [
                'type' => 'TEXT',

            ],
            'tags' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('news');
    }

    public function down()
    {
        $this->forge->dropTable('news');
    }
}
