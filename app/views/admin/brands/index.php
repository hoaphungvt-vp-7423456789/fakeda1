<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container col-6 col-md-4  ">
        <div class="list-group ">
            <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                The current button
            </button>
            <button type="button" class="list-group-item list-group-item-action">A second button item</button>
            <button type="button" class="list-group-item list-group-item-action">A third button item</button>
            <button type="button" class="list-group-item list-group-item-action">A fourth button item</button>
            <button type="button" class="list-group-item list-group-item-action" disabled>A disabled button item</button>
        </div>
        <div class="col-sm-6 col-md-8 border ">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <td>id</td>
                        <td>name</td>
                        <td colspan="2">Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listBrands as $item) : ?>
                        <tr>
                            <td><?= $item->id ?></td>
                            <td><?= $item->name ?></td>
                            <td>
                                <form action="<?= BASE_URL . '/brands-edit' ?>">
                                    <input type="text" name="id" value="<?= $item->id ?>" hidden>

                                    <button>Sửa</button>
                                </form>
                            </td>
                            <td>
                                <form action="<?= BASE_URL . '/brands-destroy' ?>">
                                    <input type="text" name="id" value="<?= $item->id ?>" hidden>

                                    <button>Xóa</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <a href="<?= BASE_URL . '/brands-create' ?> ">Thêm </a>
        </div>
    </div>
</body>

</html>