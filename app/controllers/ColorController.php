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
        //tươg đương với câu lệnh select * from Tên bảng giảm dần
        // $listColor = Color::orderBy('id','desc');
        $listColor = Color::all();
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
        // khi đối tượng khởi tạo bằng new thì hàm save() sẽ là hàm insert()
        $model = new Color;
        // lấy dữ liệu trên form
        $model->fill($_POST); //giống câu lệnh prepare
        $model->save(); // giống câu lệnh excu
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
        //khi đối tượng được khởi tạo bằng static func thì save() sẽ là hàm update
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
        // $model = new Color;
        // $model->where('id', $destroyId)->delete();

        header("location:" . BASE_URL . '/color-index');
    }
}
