<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DessertTable extends Migration
{
    private $table = 'dessert';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_dessert' => [
                'type' => 'varchar',
                'constraint' => 30,
            ],
            'deskripsi' => [
                'type' => 'text',
            ],
            'harga' => [
                'type' => 'varchar',
                'constraint' => 30,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
