<?php

namespace App\Controllers;

use App\Models\Brands;

class BrandsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        //
        $listBrands = Brands::all();
        // echo '<pre>';
        // var_dump ($model);
        require_once "./app/views/admin/brands/index.php";
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {

        require_once "./app/views/admin/brands/create.php";
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store()
    {
        $model = new Brands;
        $model->fill($_POST);
        $model->save();
        header("location:" . BASE_URL . '/brands-index');
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
        $editId = isset($_GET['id']) ? $_GET['id'] : NULL;
        $brand = Brands::find($editId);
        require_once "./app/views/admin/brands/edit.php";
        // var_dump ($model);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update()
    {
        // var_dump($_POST);
        $updateId = $_POST['id'];
        $model = Brands::find($updateId);
        $model->fill($_POST);
        $model->save();
        header("location:" . BASE_URL . '/brands-index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy()
    {
        //
        // var_dump ($_GET);
        $destroyId = isset($_GET['id']) ? $_GET['id'] : NULL;

        $model = Brands::destroy($destroyId);
        header("location:" . BASE_URL . '/brands-index');
    }
}
