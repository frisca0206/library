<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KategoriModel;


class KategoriController extends BaseController
{
    protected $KategoriModel;

    public function __construct()
    {
        $this->KategoriModel = new KategoriModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Kategori Management',
            'page_title' => 'Kategori List',
            'kategoris' => $this->KategoriModel->findAll()
        ];
        return view('kategori/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Kategori Management',
            'page_title' => 'Create Kategori'
        ];

        return view('kategori/create', $data);
    }

    public function store()
    {
        $kategori_minuman = $this->request->getPost('kategori_minuman');

        $new_kategori = [
            'kategori_minuman' => $kategori_minuman,
        ];

        $insert_kategori = $this->KategoriModel->insert($new_kategori);
        return redirect()->to('kategori');
    }

    public function edit($kategori_id)
    {
        $data = [
            'title' => 'Kategori Management',
            'page_title' => 'Edit Kategori',
            'kategori' => $this->KategoriModel->find($kategori_id)
        ];
        return view('kategori/edit', $data);
    }

    public function update()
    {
        $kategori_id = $this->request->getPost('kategori_id');
        $kategori_minuman = $this->request->getPost('kategori');

        $edit_kategori = [
            'kategori_minuman' => $kategori_minuman,
        ];

        $update_kategori = $this->KategoriModel->update($kategori_id, $edit_kategori);
        return redirect()->to('kategori');
    }

    public function delete($kategori_id)
    {
        $this->KategoriModel->delete($kategori_id);
        return redirect()->to('kategori');
    }
}