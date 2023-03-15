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
                    <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                </div>
            </div>
        </nav>
        <div class="mt-3">
            <div class="row">
                <div class="col-4">
                    <img src="https://picsum.photos/seed/picsum/200/300" alt="" class="w-100" style="height: 400px;">
                    <!-- list img -->
                    <div style="height: 100px;">
                        <div class="row mt-3">
                            <div class="col overflow-hidden" style="width: 100px; height: 90px;">
                                <img src="https://picsum.photos/200/300" class="d-block w-100" alt="...">
                            </div>
                            <div class="col overflow-hidden" style="width: 100px; height: 90px;">
                                <img src="https://picsum.photos/200/300" class="d-block w-100" alt="...">
                            </div>
                            <div class="col overflow-hidden" style="width: 100px; height: 90px;">
                                <img src="https://picsum.photos/200/300" class="d-block w-100" alt="...">
                            </div>
                            <div class="col overflow-hidden" style="width: 100px; height: 90px;">
                                <img src="https://picsum.photos/200/300" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ducimus dolorem rerum rem!</h2>
                    <h4 class="fs-6">44<p class="d-inline-block text-secondary ms-1">đã bán</p>
                    </h4>
                    <h3 class="d-flex align-items-center justify-content-start mb-4">
                        <span class="text-secondary fs-5 text-decoration-line-through">đ500.000</span>
                        <p class="d-inline-block ms-3 mb-0 text-danger">đ300.000</p>
                        <p class="d-inline-block ms-2 mb-0 bg-danger text-white rounded fs-6 p-1">Giảm 30%</p>
                    </h3>
                    <form action="<?= BASE_URL . '/cart' ?>" class="mt-5">
                        <div class="row">
                            <div class="col-2 d-flex align-items-center justify-content-start">
                                <h4 class="fs-6 text-secondary">Kích thước</h4>
                            </div>
                            <div class="col-10">
                                <label for="" class="border border-danger text-danger p-2">30mn</label>
                                <input type="text" hidden>
                                <label for="" class="border border-black-50 p-2">32mn</label>
                                <input type="text" hidden>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2 d-flex align-items-center justify-content-start">
                                <h4 class="fs-6 text-secondary">Màu sắc</h4>
                            </div>
                            <div class="col-10">
                                <label for="" class="border border-danger text-danger p-2 text-center " style="min-width: 50px;">Xanh</label>
                                <input type="text" hidden>
                                <label for="" class="border border-black-50 p-2 text-center" style="min-width: 50px;">Đỏ</label>
                                <input type="text" hidden>
                                <label for="" class="border border-black-50 p-2 text-center" style="min-width: 50px;">Tím</label>
                                <input type="text" hidden>
                                <label for="" class="border border-black-50 p-2 text-center" style="min-width: 50px;">Vàng</label>
                                <input type="text" hidden>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2 d-flex align-items-center justify-content-start">
                                <h4 class="fs-6 text-secondary">Số lượng</h4>
                            </div>
                            <div class="col-10">
                                <input type="number" class="form-control" value="1" min="1">
                            </div>
                        </div>
                        <button type="submit" class="mt-5 p-2 border rounded bg-danger text-white">Thêm vào giỏ hàng</button>
                    </form>
                </div>
            </div>
            <!-- detail -->
            <div class="mt-3">
                <div class="row">
                    <div class="col-9">
                        <h2 class="fs-3">Chi tiết sản phẩm</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                    </div>

                </div>
                <div class="row">
                    <h2 class="fs-3 mt-2">Sản phẩm liên quan</h2>
                    <div class="card col-3" >
                        <img src="https://picsum.photos/200?grayscale" class="card-img-top" alt="..." style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card col-3" >
                        <img src="https://picsum.photos/200?grayscale" class="card-img-top" alt="..." style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card col-3" >
                        <img src="https://picsum.photos/200?grayscale" class="card-img-top" alt="..." style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card col-3" >
                        <img src="https://picsum.photos/200?grayscale" class="card-img-top" alt="..." style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>