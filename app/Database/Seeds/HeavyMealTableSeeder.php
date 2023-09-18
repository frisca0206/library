<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class HeavyMealTableSeeder extends Seeder
{
    private $table = 'heavy_meal';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'nama_makanan' => 'gado-gado',
                'deskripsi' => 'makanan yang berisi sayuran',
                'harga' => 'Rp.14.000',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
