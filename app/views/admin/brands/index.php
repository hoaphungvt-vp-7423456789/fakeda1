<!DOCTYPE html>
<html lang="en">

<<<<<<< HEAD
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
=======

           
>>>>>>> b3b5449ba37a3548d02f134b6185ae18d49d6e43
    <table>
        <thead>
            <tr>
                <td>id</td>
<<<<<<< HEAD
                <td colspan="2">name</td>X
=======
                <td>name</td>
                <td colspan="2">Action</td>
>>>>>>> b3b5449ba37a3548d02f134b6185ae18d49d6e43
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listBrands as $item) : ?>
                <tr>
                    <td><?= $item->id ?></td>
                    <td><?= $item->name ?></td>
<<<<<<< HEAD
=======
                    <td>
                        <form action="<?=BASE_URL .'/brands-edit'?>" >
                            <input type="text" name="id" value="<?= $item->id ?>"hidden>
                            
                            <button>Sửa</button>
                        </form>
                    </td>
                    <td>
                        <form action="<?=BASE_URL .'/brands-destroy'?>" >
                            <input type="text" name="id" value="<?= $item->id ?>"hidden>
                            
                            <button>Xóa</button>
                        </form>
                    </td>
>>>>>>> b3b5449ba37a3548d02f134b6185ae18d49d6e43
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<<<<<<< HEAD
</body>

</html>
=======
   <a href="<?= BASE_URL . '/brands-create'?> ">Thêm </a>

           
      
>>>>>>> b3b5449ba37a3548d02f134b6185ae18d49d6e43
