<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>Danh Sách Màu Sắc</title>
</head>

<body>


    <div class="container">
        <div class="d-flex flex-row-reverse fs-1 p-2 mt-1 me-5">
            <a href="" class="text-decoration-none text-black"><iconify-icon icon="gg:profile"></iconify-icon></a>
        </div>
        <div class="box-function row">
            <div class="list-group col">
                <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                    Danh Mục Quản Lý
                </button>
                <button type="button" class="list-group-item list-group-item-action">Quản Lý Thương Hiệu</button>
                <button type="button" class="list-group-item list-group-item-action">Quản Lý Sản Phẩm</button>
                <button type="button" class="list-group-item list-group-item-action">Quản Lý Size</button>
                <button type="button" class="list-group-item list-group-item-action">Quản Lý Màu Sắc</button>
            </div>
            <div class="col">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <td>ID</td>
                            <td>Màu Sắc</td>
                            <td colspan="2">Chức năng</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listColor as $item) : ?>
                            <tr>
                                <td><?= $item->id ?></td>
                                <td><?= $item->name ?></td>
                                <td class="d-flex p-3 ">
                                    <form action="<?= BASE_URL . '/color-edit' ?>" class="me-2">
                                        <input type="text" name="id" value="<?= $item->id ?>" hidden>

                                        <button class="btn text-white bg-info">Sửa</button>
                                    </form>
                                    <form action="<?= BASE_URL . '/color-destroy' ?>" class="">
                                        <input type="text" name="id" value="<?= $item->id ?>" hidden>

                                        <button class=" btn text-white bg-info">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <a href="<?= BASE_URL . '/color-create' ?> " class=" d-flex justify-content-center btn btn-primary">Thêm </a>
            </div>
        </div>
    </div>
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
</body>