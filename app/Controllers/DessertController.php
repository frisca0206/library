<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DessertModel;


class DessertController extends BaseController
{
    protected $DessertModel;

    public function __construct()
    {
        $this->DessertModel = new DessertModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dessert Management',
            'page_title' => 'Dessert List',
            'desserts' => $this->DessertModel->findAll()
        ];
        return view('dessert/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Dessert Management',
            'page_title' => 'Create List',
        ];

        return view('dessert/create', $data);
    }

    public function store()
    {
        $nama_dessert = $this->request->getPost('nama_dessert');
        $deskripsi = $this->request->getPost('deskripsi');
        $harga = $this->request->getPost('harga');

        $new_dessert = [
            'nama_dessert' => $nama_dessert,
            'deskripsi' => $deskripsi,
            'harga' => $harga,
        ];

        $insert_dessert = $this->DessertModel->insert($new_dessert);
        return redirect()->to('dessert');
    }

    public function edit($dessert_id)
    {
        $data = [
            'title' => 'Dessert Management',
            'page_title' => 'Edit Dessert',
            'dessert' => $this->DessertModel->find($dessert_id)
        ];
        return view('dessert/edit', $data);
    }

    public function update()
    {
        $dessert_id = $this->request->getPost('dessert_id');
        $nama_dessert = $this->request->getPost('nama_dessert');
        $deskripsi = $this->request->getPost('deskripsi');
        $harga = $this->request->getPost('harga');

        $edit_dessert = [
            'nama_dessert' => $nama_dessert,
            'deskripsi' => $deskripsi,
            'harga' => $harga,
        ];

        $update_dessert = $this->DessertModel->update($dessert_id, $edit_dessert);
        return redirect()->to('dessert');
    }

    public function delete($dessert_id)
    {
        $this->DessertModel->delete($dessert_id);
        return redirect()->to('dessert');
    }
}