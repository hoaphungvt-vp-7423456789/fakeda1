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
        // $model = Color::orderBy('id', 'DESC');
        // câu lệnh này tương đương với select * form + tên bảng order by id desc
        $model = Color::all();
        // câu lệnh này tương đương với select * form + tên bảng
        /**
         * Theo nguyên tắc mô hình MVC thì bây giờ mình sẽ trả ra view
         * đoạn này nếu chưa xem hết video 5 thì chỉ cần require file view mình muốn
         * như hồi làm ở dự án mẫu tạm là được, sẽ hiểu hơn sau này tại vì cái này "KHÔNG DỄ"
         */
        $this->view('admin.color.index', [
            'listColor' => $model
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store()
    {
        //     
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
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy()
    {
        //
    }
}
