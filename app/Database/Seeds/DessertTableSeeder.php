<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DessertTableSeeder extends Seeder
{
    private $table = 'dessert';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'nama_dessert' => 'croissant',
                'deskripsi' => 'Croissant adalah salah satu produk pastry yang berasal dari 
                 adonan lipat yang hampir sama dengan puff pastry dengan ciri khas berlapis-lapis dan 
                 berbentuk seperti crescent (bahasa Perancis), yang dalam bahasa Indonesia diartikan bulan sabit, 
                 tapi ada juga yang berbentuk tanduk (horn).',
                'harga' => 'Rp.35.000',
            ],
            [
                'id' => 2,
                'nama_dessert' => 'Ice Cream',
                'deskripsi' => 'Ice Cream merupakan sebuah makanan beku yang dibuat dari produk susu seperti krim, 
                 lalu dicampur dengan perasa dan pemanis buatan ataupun alami.',
                'harga' => 'Rp.10.000',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
