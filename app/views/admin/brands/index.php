

           
    <table>
        <thead>
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
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
   <a href="<?= BASE_URL . '/brands-create'?> ">Thêm </a>

           
      