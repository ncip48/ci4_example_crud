<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;
use CodeIgniter\RESTful\ResourceController;

class CategoryController extends ResourceController
{
    public function index()
    {
        $models = new Category();
        $categories = $models->findAll();
        return view('category/index', compact('categories'));
    }

    public function new()
    {
        return view('category/add');
    }

    public function create()
    {
        $model = new Category();
        $input = $this->request->getPost();
        $input['slug'] = url_title($input['name'], '-', true);
        $model->insert($input);
        return redirect()->to('/category');
    }

    public function edit($id = null)
    {
        $model = new Category();
        $category = $model->find($id);
        return view('category/edit', compact('category'));
    }

    public function update($id = null)
    {
        $model = new Category();
        $input = $this->request->getPost();
        $input['slug'] = url_title($input['name'], '-', true);
        $model->update($id, $input);
        return redirect()->to('/category');
    }

    public function delete($id = null)
    {
        $model = new Category();
        $model->delete($id);
        return redirect()->to('/category');
    }
}
