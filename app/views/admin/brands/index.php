<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <td>id</td>
                <td colspan="2">name</td>
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

</body>

</html>
<a href="<?= BASE_URL . '/brands-create' ?> ">Thêm </a>