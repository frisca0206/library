<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DrinkTable extends Migration
{
    private $table = 'drink';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment'=> true,
            ],
            'nama_buah' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
            'kategori_minuman_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'harga' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('kategori_minuman_id', 'kategori', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
