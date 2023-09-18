<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    private $table = 'kategori';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'kategori_minuman' => 'milk',
            ],
            [
                'id' => 2,
                'kategori_minuman' => 'juice',
            ],
            [
                'id' => 3,
                'kategori_minuman' => 'milkshake',
            ],
            [
                'id' => 4,
                'kategori_minuman' => 'hot',
            ],
            [
                'id' => 5,
                'kategori_minuman' => 'smoothies'
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
