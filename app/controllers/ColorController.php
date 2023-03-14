<?php

namespace App\Controllers;

use App\Models\Color;


class ColorController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        //
        $listColor = Color::all();
        // echo '<pre>';
        // var_dump ($model);
        require_once "./app/views/admin/color/index.php";
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        require_once "./app/views/admin/color/create.php";
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store()
    {
        // 
        $model = new Color;
        $model->fill($_POST);
        $model->save();
        header("location:" . BASE_URL . '/color-index');
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
        $color = Color::find($editId);
        require_once "./app/views/admin/color/edit.php";
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update()
    {
        //
        $updateId = $_POST['id'];
        $model = Color::find($updateId);
        $model->fill($_POST);
        $model->save();
        header("location:" . BASE_URL . '/color-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy()
    {
        //
        $destroyId = isset($_GET['id']) ? $_GET['id'] : NULL;
        $model = Color::destroy($destroyId);
        header("location:" . BASE_URL . '/color-index');
    }
}
