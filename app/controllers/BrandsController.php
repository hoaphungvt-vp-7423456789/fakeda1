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
       require_once './app/views/admin/brands/index.php';
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
