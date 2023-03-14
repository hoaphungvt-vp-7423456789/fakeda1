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
                <td colspan="2">name</td>X
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listBrands as $item) : ?>
                <tr>
                    <td><?= $item->id ?></td>
                    <td><?= $item->name ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>