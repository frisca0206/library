<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DrinkModel;
use App\Models\KategoriModel;


class DrinkController extends BaseController
{
    protected $DrinkModel;

    public function __construct()
    {
        $this->DrinkModel = new DrinkModel();
        $this->KategoriModel = new KategoriModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Drink Management',
            'page_title' => 'Drink List',
            'drinks' => $this->DrinkModel->select('drink.*,kategori.kategori_minuman')->join('kategori','kategori.id 
            = drink.kategori_minuman_id')->findAll(),
        ];
        return view('drink/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Drink Management',
            'page_title' => 'Create Drink',
            'kategoris' => $this->KategoriModel->findAll()
        ];

        return view('drink/create', $data);
    }

    public function store()
    {
        $nama_buah = $this->request->getPost('nama_buah');
        $kategori_minuman = $this->request->getPost('kategori_minuman');
        $harga = $this->request->getPost('harga');

        $new_drink = [
            'nama_buah' => $nama_buah,
            'kategori_minuman_id' => $kategori_minuman,
            'harga' => $harga,
        ];

        $insert_drink = $this->DrinkModel->insert($new_drink);
        return redirect()->to('drink');
    }

    public function edit($drink_id)
    {
        $data = [
            'title' => 'Drink Management',
            'page_title' => 'Edit Drink',
            'drink' => $this->DrinkModel->find($drink_id),
            'kategoris' => $this->KategoriModel->findAll(),
        ];
        return view('drink/edit', $data);
    }

    public function update ()
    {
        $drink_id = $this->request->getPost('drink_id');
        $nama_buah = $this->request->getPost('nama_buah');
        $kategori_minuman = $this->request->getPost('kategori_minuman');
        $harga = $this->request->getPost('harga');

        $edit_drink = [
            'nama_buah' => $nama_buah,
            'kategori_minuman_id' => $kategori_minuman,
            'harga' => $harga,
        ];

        $update_drink =$this->DrinkModel->update($drink_id, $edit_drink);
        return redirect()->to('drink');
    }

    public function delete($drink_id)
    {
        $this->DrinkModel->delete($drink_id);
        return redirect()->to('drink');
    }
}