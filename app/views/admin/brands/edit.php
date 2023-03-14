<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?=BASE_URL .'/brands-update'?>" method="post">
        <input type="text" name="id" value="<?= $brand->id?>" hidden>
        <input type="text" name="name" value="<?= $brand->name?>">
        <button>sỬa</button>
    </form>
</body>
</html>