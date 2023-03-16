<?php

namespace App\Controllers;

use App\Models\Size;


class SizeController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        //tươg đương với câu lệnh select * from Tên bảng giảm dần
        // $listColor = Color::orderBy('id','desc');
        $listSize = Size::all();
        require_once "./app/views/admin/size/index.php";
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        require_once "./app/views/admin/size/create.php";
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store()
    {
        // khi đối tượng khởi tạo bằng new thì hàm save() sẽ là hàm insert()
        $model = new Size;
        // lấy dữ liệu trên form
        $model->fill($_POST); //giống câu lệnh prepare
        $model->save(); // giống câu lệnh excu
        header("location:" . BASE_URL . '/size-index');
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
        $size = Size::find($editId);
        require_once "./app/views/admin/size/edit.php";
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update()
    {
        //khi đối tượng được khởi tạo bằng static func thì save() sẽ là hàm update
        $updateId = $_POST['id'];
        $model = Size::find($updateId);
        $model->fill($_POST);
        $model->save();
        header("location:" . BASE_URL . '/size-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy()
    {
        //
        $destroyId = isset($_GET['id']) ? $_GET['id'] : NULL;
        $model = Size::destroy($destroyId);
        // $model = new Color;
        // $model->where('id', $destroyId)->delete();

        header("location:" . BASE_URL . '/size-index');
    }
}
