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
        <!-- silde show -->
        <div id="carouselExampleIndicators" class="carousel slide mt-3" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div style="height: 500px;" class="carousel-item active">
                    <img src="https://picsum.photos/200/300" class="d-block w-100" alt="...">
                </div>
                <div style="height: 500px;" class="carousel-item">
                    <img src="https://picsum.photos/200/300" class="d-block w-100" alt="...">
                </div>
                <div style="height: 500px;" class="carousel-item">
                    <img src="https://picsum.photos/200/300" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="row mt-3">
            <div class="col-3">
                <form class="d-flex mb-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <h2>Danh mục</h2>
                <ul class="list-group">
                    <li class="list-group-item"><a href="" class="text-black">An item</a></li>
                    <li class="list-group-item"><a href="" class="text-black">A second item</a></li>
                    <li class="list-group-item"><a href="" class="text-black">A third item</a></li>
                    <li class="list-group-item"><a href="" class="text-black">A fourth item</a></li>
                    <li class="list-group-item"><a href="" class="text-black">And a fifth one</a></li>
                </ul>
            </div>
            <div class="col-9">
                <div class="row w-full">
                    <div class="card col-4">
                        <a href="<?= BASE_URL . '/detail'?>"><img src="https://picsum.photos/200" style="height: 250px;" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <a href="<?= BASE_URL . '/detail'?>" class="text-black text-decoration-none">
                                <h5 class="card-title">Card title</h5>
                            </a>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card col-4">
                        <a href="<?= BASE_URL . '/detail'?>"><img src="https://picsum.photos/200" style="height: 250px;" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <a href="<?= BASE_URL . '/detail'?>" class="text-black text-decoration-none">
                                <h5 class="card-title">Card title</h5>
                            </a>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card col-4">
                        <a href="<?= BASE_URL . '/detail'?>"><img src="https://picsum.photos/200" style="height: 250px;" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <a href="<?= BASE_URL . '/detail'?>" class="text-black text-decoration-none">
                                <h5 class="card-title">Card title</h5>
                            </a>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card col-4">
                        <a href="<?= BASE_URL . '/detail'?>"><img src="https://picsum.photos/200" style="height: 250px;" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <a href="<?= BASE_URL . '/detail'?>" class="text-black text-decoration-none">
                                <h5 class="card-title">Card title</h5>
                            </a>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card col-4">
                        <a href="<?= BASE_URL . '/detail'?>"><img src="https://picsum.photos/200" style="height: 250px;" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <a href="<?= BASE_URL . '/detail'?>" class="text-black text-decoration-none">
                                <h5 class="card-title">Card title</h5>
                            </a>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card col-4">
                        <a href="<?= BASE_URL . '/detail'?>"><img src="https://picsum.photos/200" style="height: 250px;" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <a href="<?= BASE_URL . '/detail'?>" class="text-black text-decoration-none">
                                <h5 class="card-title">Card title</h5>
                            </a>
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