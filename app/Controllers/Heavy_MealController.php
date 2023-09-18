<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Heavy_MealModel;


class Heavy_MealController extends BaseController
{
    protected $Heavy_MealModel;

    public function __construct()
    {
        $this->Heavy_MealModel = new Heavy_MealModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Heavy Meal Management',
            'page_title' => 'Heavy Meal List',
            'heavy_meals' => $this->Heavy_MealModel->findAll()
        ];
        return view('heavy_meal/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Heavy Meal Management',
            'page_title' => 'Create List',
        ];

        return view('heavy_meal/create', $data);
    }

    public function store()
    {
        $nama_makanan = $this->request->getPost('nama_makanan');
        $deskripsi = $this->request->getPost('deskripsi');
        $harga = $this->request->getPost('harga');

        $new_heavy_meal = [
            'nama_makanan' => $nama_makanan,
            'deskripsi' => $deskripsi,
            'harga' => $harga,
        ];

        $insert_heavy_meal = $this->Heavy_MealModel->insert($new_heavy_meal);
        return redirect()->to('heavy_meal');
    }

    public function edit($heavy_meal_id)
    {
        $data = [
            'title' => 'Heavy Meal Management',
            'page_title' => 'Edit Heavy Meal',
            'heavy_meal' => $this->Heavy_MealModel->find($heavy_meal_id)
        ];
        return view('heavy_meal/edit', $data);
    }

    public function update()
    {
        $heavy_meal_id = $this->request->getPost('heavy_meal_id');
        $nama_makanan = $this->request->getPost('nama_makanan');
        $deskripsi = $this->request->getPost('deskripsi');
        $harga = $this->request->getPost('harga');

        $edit_heavy_meal = [
            'nama_makanan' => $nama_makanan,
            'deskripsi' => $deskripsi,
            'harga' => $harga,
        ];

        $update_heavy_meal = $this->Heavy_MealModel->update($heavy_meal_id, $edit_heavy_meal);
        return redirect()->to('heavy_meal');
    }

    public function delete($heavy_meal_id)
    {
        $this->Heavy_MealModel->delete($heavy_meal_id);
        return redirect()->to('heavy_meal');
    }
}