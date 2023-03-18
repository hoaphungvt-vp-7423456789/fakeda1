<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="npm i bootstrap-icons">
    <title>Document</title>
</head>

<body>


    <div class="container">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <i class="bi bi-6-square">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-6-square" viewBox="0 0 16 16">
                            <path d="M8.21 3.855c1.612 0 2.515.99 2.573 1.899H9.494c-.1-.358-.51-.815-1.312-.815-1.078 0-1.817 1.09-1.805 3.036h.082c.229-.545.855-1.155 1.98-1.155 1.254 0 2.508.88 2.508 2.555 0 1.77-1.218 2.783-2.847 2.783-.932 0-1.84-.328-2.409-1.254-.369-.603-.597-1.459-.597-2.642 0-3.012 1.248-4.407 3.117-4.407Zm-.099 4.008c-.92 0-1.564.65-1.564 1.576 0 1.032.703 1.635 1.558 1.635.868 0 1.553-.533 1.553-1.629 0-1.06-.744-1.582-1.547-1.582Z" />
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2Zm15 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2Z" />
                        </svg>
                    </i>
                </div>
                <div class="col-6">
                    <!-- thích gì viết đấy -->
                </div>
                <div class="col">
                    <i class="bi bi-person-bounding-box"> <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                            <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        </svg></i>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-4">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        Menu
                    </a>
                    <a href="<?= BASE_URL . '/brands-index' ?>" class="list-group-item list-group-item-action">Brands</a>
                    <a href="<?= BASE_URL . '/products-index' ?>" class="list-group-item list-group-item-action">Products</a>
                    <a href="<?= BASE_URL . '/color-index' ?>" class="list-group-item list-group-item-action">Color</a>
                    <a href="<?= BASE_URL . '/size-index' ?>" class="list-group-item list-group-item-action">Size</a>
                    <a href="<?= BASE_URL . '/variation-index' ?>" class="list-group-item list-group-item-action">Variation</a>
                </div>
            </div>
            <div class="col-8 border ">
                <button class="btn btn-light"><a href="<?= BASE_URL . '/brands-create' ?> ">Thêm thương hiệu</a> </button>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <td>Id</td>
                            <td>Brands Name</td>
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

                                        <button class="btn btn-primary">Sửa</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="<?= BASE_URL . '/brands-destroy' ?>">
                                        <input type="text" name="id" value="<?= $item->id ?>" hidden>

                                        <button class="btn btn-primary">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</body>