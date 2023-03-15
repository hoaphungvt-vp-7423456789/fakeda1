<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <!-- nav -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">F-watch</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Link
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Link</a>
                        </li>
                    </ul>
                    <a href="<?= BASE_URL . '/cart' ?>" class="fs-3 text-black"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
        </nav>
        <div>
            <h2>Thanh toán</h2>

            <form action="<?= BASE_URL . '/paysuccess' ?>">
                <div class="mb-3">
                    <label for="">Fullname</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Phone</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Address</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Voucher</label>
                    <input type="text" class="form-control">
                </div>
                <div class="d-flex align-items-center justify-content-between text-center">
                    <p class="ms-2">Hình ảnh</p>
                    <p style="width: 270px;">Tên sản phẩm</p>
                    <p class="" style="width: 80px;">Thuộc tính</p>
                    <p class="">Giá</p>
                    <p>Số lượng</p>
                    <p class="mb-0">Thành tiền</p>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <img src="https://picsum.photos/200/300?grayscale" alt="" style="width: 100px; height: 100px;">
                    <h2 style="max-width: 400px;" class="fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>
                    <p><span>32mn</span>,<span>White</span></p>
                    <p class=""><span class="text-black-50 text-decoration-line-through">đ300.000</span><span class="fs-5 ms-2">đ200.000</span></p>
                    <input type="nubmer" readonly value="1" class="border border-black-50">
                    <p class="mb-0">đ600.000</p>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <img src="https://picsum.photos/200/300?grayscale" alt="" style="width: 100px; height: 100px;">
                    <h2 style="max-width: 400px;" class="fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>
                    <p><span>32mn</span>,<span>White</span></p>
                    <p class=""><span class="text-black-50 text-decoration-line-through">đ300.000</span><span class="fs-5 ms-2">đ200.000</span></p>
                    <input type="nubmer" readonly value="1" class="border border-black-50">
                    <p class="mb-0">đ600.000</p>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <img src="https://picsum.photos/200/300?grayscale" alt="" style="width: 100px; height: 100px;">
                    <h2 style="max-width: 400px;" class="fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>
                    <p><span>32mn</span>,<span>White</span></p>
                    <p class=""><span class="text-black-50 text-decoration-line-through">đ300.000</span><span class="fs-5 ms-2">đ200.000</span></p>
                    <input type="nubmer" readonly value="1" class="border border-black-50">
                    <p class="mb-0">đ600.000</p>
                </div>
                <p class="d-inline-block fs-4">Tổng tiền:</p>
                <p class="d-inline-block fs-4">đ2.000.000</p>
                <button class="border-0 py-2 px-3 bg-danger text-white rounded d-block mb-3">Thanh toán</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>