@extends('admin.layouts.admin-layout')
@section('title', 'Danh sách sản phẩm')
@section('main')
<section class="d-flex justify-content-between align-items-center">
    <form class="d-flex align-items-center">
        <div class="col-auto">
            <input type="text" class="form-control" placeholder="Tên sản phẩm...">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-success ms-2">Tìm kiếm</button>
        </div>
    </form>
    <a href="{{ BASE_URL . '/products-create' }}" class="btn btn-success">Thêm sản phẩm</a>
</section>
<table class="table text-center">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Chi tiết</th>
            <th scope="col">Tên thương hiệu</th>
            <th scope="col" colspan="2">Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listProduct as $key => $item)
        <tr>
            <th scope="row">{{ ++$key }}</th>
            <td scope="row" style="max-width: 150px;">
                <p class="short-3">{{ $item->name }}</p>
            </td>
            <td scope="row"><img src="{{ './public/uploads/products/' . $item->image }}" alt="" style="width: 100px; height: 100px;"></td>
            <td scope="row" style="max-width: 150px;">
                <p class="short-3">{{ $item->description }}</p>
            </td>
            <td scope="row" style="max-width: 150px;">
                <p class="short-3">{{ $item->detail }}</p>
            </td>
            <td scope="row">{{ $item->brands->name }}</td>
            <td scope="row" class="text-end">
                <form action="{{ BASE_URL . '/products-edit' }}">
                    <input type="number" value="{{ $item->id }}" name="id" hidden>
                    <button class="btn btn-primary">Sửa</button>
                </form>
            </td>
            <td scope="row" class="text-start">
                <form action="{{ BASE_URL . '/products-destroy' }}">
                    <input type="number" value="{{ $item->id }}" name="id" hidden>
                    <button class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm không')">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection