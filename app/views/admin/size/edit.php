<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>Sửa Kích Thước</title>
</head>

<body>


    <div class="container">
        <div class="d-flex flex-row-reverse fs-1 p-2 mt-1 me-5">
            <a href="" class="text-decoration-none text-black"><iconify-icon icon="gg:profile"></iconify-icon></a>
        </div>
        <div class="box-function row">
            <div class="list-group col-2">
                <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                    Danh Mục Quản Lý
                </button>
                <a href="<?= BASE_URL . '/brands-index' ?>" class="list-group-item list-group-item-action">Quản Lý Thương Hiệu</a>
                <a href="<?= BASE_URL . '/products-index' ?>" class="list-group-item list-group-item-action">Quản Lý Sản Phẩm</a>
                <a href="<?= BASE_URL . '/size-index' ?>" class="list-group-item list-group-item-action">Quản Lý Size</a>
                <a href="<?= BASE_URL . '/color-index' ?>" class="list-group-item list-group-item-action">Quản Lý Màu Sắc</a>
            </div>
            <div class="col-10">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <h3>Sửa Màu Sắc</h3>
                                <form action="<?= BASE_URL . '/size-update' ?>" method="post">
                                    <input type="text" name="id" value="<?= $size->id ?>" hidden>
                                    <input type="text" name="name" value="<?= $size->name ?>" class="p-1 me-2">
                                    <button class="btn btn-primary mb-1">Sửa</button>
                            </td>

                        </tr>

                    </tbody>
                </table>


            </div>
        </div>
    </div>
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
</body>