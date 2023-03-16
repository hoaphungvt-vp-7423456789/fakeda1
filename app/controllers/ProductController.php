<?php

namespace App\Controllers;


use App\Models\Products;
use App\Models\Brands;

class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        //
        $model = Products::with('brands')->get();

        $this->view('admin.product.index', [
            'listProduct' => $model
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        //
        $model = Brands::all();

        $this->view('admin.product.create', [
            'listBrands' => $model
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store()
    {
        //
        $model = new Products;
        $_POST['image'] = uniqid() . '-' . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], './public/uploads/products/' . $_POST['image']);
        $model->fill($_POST);
        $model->save();
        $model1 = Brands::all();
        $status = "Thêm sản phẩm thành công";

        $this->view('admin.product.create', [
            'status' => $status,
            'listBrands' => $model1
        ]);
    }

    /**
     * Display the specified resource.
     *
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit()
    {
        //
        $editId = isset($_GET['id']) ? $_GET['id'] : NULL;
        // dd($editId);
        if (!$editId) {
            header('location:' .  BASE_URL . '/404?msg=khong-du-thong-tin-de-cap-nhat');
            die;
        }
        
        $model = Products::find($editId);
        $model1 = Brands::all();
        if (!$model) {
            header('location:' .  BASE_URL . '/404?msg=khong-tim-thay-san-pham');
            die;
        }
        // dd($model);

        $this->view('admin.product.edit', [
            'product' => $model,
            'listBrands' => $model1
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update()
    {
        //
        // dd($_POST);
        $findId = $_POST['id'];
        $model = Products::find($findId);
        // dd($model->image);
        if (!empty($_FILES['image']['name'])) {
            $_POST['image'] = uniqid() . '-' . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], './public/uploads/products/' . $_POST['image']);
            $removeImg = './public/uploads/products/' . $model->image;
            if (file_exists($removeImg)) {
                // xóa ảnh
                unlink($removeImg);
            }
        } else {
            $_POST['image'] = $model->image;
        }
        $model->fill($_POST);
        $model->save();
        $status = "Sửa sản phẩm thành công";
        $item = Products::find($_POST['id']);
        $model1 = Brands::all();

        $this->view('admin.product.edit', [
            'status' => $status,
            'product' => $item,
            'listBrands' => $model1
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy()
    {
        //
        // dd($_POST);
        $removeId = isset($_GET['id']) ? $_GET['id'] : NULL;
        if (!$removeId) {
            header('location:' .  BASE_URL . '/404?msg=khong-du-thong-tin-de-xoa');
            die;
        }
        $model = Products::find($removeId);
        if (!$model) {
            header('location:' .  BASE_URL . '/404?msg=khong-tim-thay-san-pham');
            die;
        }
        $removeImg = './public/uploads/products/' . $model->image;
        if (file_exists($removeImg)) {
            unlink($removeImg);
        }
        $model = Products::destroy($removeId);
        
        header('location:' . BASE_URL . '/products-index');
    }
}
