<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="//cdn.ckeditor.com/4.20.2/full/ckeditor.js"></script>
</head>

<body>
    <div class="container">
        <!-- header -->
        <section class="d-flex justify-content-between align-items-center border-bottom">
            <!-- logo -->
            <div class="py-2">
                <h1>Team 6</h1>
            </div>
            <div>
                <!-- Chưa biết để gì ở đây kk -->
                <a href=""><i class="fa-solid fa-user fs-2 text-dark"></i></a>
            </div>
        </section>
        <!-- body -->
        <div class="row mt-3">
            <div class="col-3">
                <nav>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{ BASE_URL . '/brands-index' }}">Quản lí thương hiệu</a></li>
                        <li class="list-group-item"><a href="{{ BASE_URL . '/color-index' }}">Quản lí màu sắc</a></li>
                        <li class="list-group-item"><a href="{{ BASE_URL . '/size-index' }}">Quản lí size</a></li>
                        <li class="list-group-item"><a href="{{ BASE_URL . '/products-index' }}">Quản lí sản phẩm</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-9">
                <main>
                    @section('main')
                    @show
                </main>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="./resource/js/app.js"></script>
</body>

</html>