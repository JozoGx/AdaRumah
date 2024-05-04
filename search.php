<?php
session_start();
require_once 'service/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>AdaRumah</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link rel="shortcut icon" type="image/png" href="img/adarumah.png" />
    <link rel="stylesheet" href="/css/styles.min.css" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <?php include 'components/topbar.html' ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?php include 'components/navbar.html' ?>
    <!-- Navbar End -->

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="/">Home</a>
                    <a class="breadcrumb-item text-dark" href="/search.php">Shop</a>
                    <span class="breadcrumb-item active">Shop List</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-4">
                <!-- Price Start -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span
                        class="bg-secondary pr-3">Harga</span></h5>
                <div class="bg-light p-4 mb-30">
                    <?php
                    $price = "price BETWEEN 0 and 1000000000";

                    if (isset($_GET['all-price'])) {
                        $price;
                    } elseif (isset($_GET['price-1'])) {
                        $price = "price BETWEEN 0 AND 100000000";
                    } elseif (isset($_GET['price-2'])) {
                        $price = "price BETWEEN 100000000 AND 200000000";
                    } elseif (isset($_GET['price-3'])) {
                        $price = "price BETWEEN 200000000 AND 500000000";
                    } elseif (isset($_GET['price-4'])) {
                        $price = "price BETWEEN 500000000 AND 1000000000";
                    } elseif (isset($_GET['price-5'])) {
                        $price = "price >= 1000000000";
                    }
                    ?>

                    <form action="search.php" method="get" id="formFilterPrice">
                        <div class="form-check d-flex align-items-center justify-content-between mb-3">
                            <input class="form-check-input" type="radio" name="all-price" id="all-price"
                                <?php $price === 'price BETWEEN 0 and 1000000000' ? 'checked' : '' ?>>
                            <label class="form-check-label" for="all-price">
                                All Price
                            </label>
                        </div>
                        <div class="form-check d-flex align-items-center justify-content-between mb-3">
                            <input class="form-check-input" type="radio" name="price-1" id="price-1" <?php $price == 'price BETWEEN 0 AND 100000000' ? 'checked' : '' ?> >
                            <label class="form-check-label" for="price-1">Rp0 - Rp100jt
                            </label>
                        </div>
                        <div class="form-check d-flex align-items-center justify-content-between mb-3">
                            <input class="form-check-input" type="radio" name="price-2" id="price-2" <?php $price == 'price BETWEEN 100000000 AND 200000000' ? 'checked' : '' ?>>
                            <label class="form-check-label" for="price-2">Rp100jt - Rp200jt
                            </label>
                        </div>
                        <div class="form-check d-flex align-items-center justify-content-between mb-3">
                            <input class="form-check-input" type="radio" name="price-3" id="price-3" <?php $price == 'price BETWEEN 200000000 AND 500000000' ? 'checked' : '' ?>>
                            <label class="form-check-label" for="price-3">Rp200jt - Rp500jt
                            </label>
                        </div>
                        <div class="form-check d-flex align-items-center justify-content-between mb-3">
                            <input class="form-check-input" type="radio" name="price-4" id="price-4" <?php $price == 'price BETWEEN 500000000 AND 1000000000' ? 'checked' : '' ?>>
                            <label class="form-check-label" for="price-4">Rp500jt - Rp1M
                            </label>
                        </div>
                        <div class="form-check d-flex align-items-center justify-content-between mb-3">
                            <input class="form-check-input" type="radio" name="price-5" id="price-5" <?php $price == 'price >= 1000000000' ? 'checked' : '' ?>>
                            <label class="form-check-label" for="price-5">> Rp1M
                            </label>
                        </div>
                    </form>
                </div>
                <!-- Price End -->
            </div>
            <!-- Shop Sidebar End -->

            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="">
                                    <h3>
                                        Search for:
                                        <a class="text-primary-emphasis">
                                            <?= $_SESSION['query'] ?>
                                        </a>
                                    </h3>
                                </div>

                                <form id="sortirForm" action="search.php" method="get">
                                    <select id="sortirSelect" class="form-select form-select-sm btn btn-sm btn-light"
                                        name="sortir">
                                        <option value="default" <?= !isset($_GET['sortir']) ? 'selected' : '' ?>>Sortir
                                        </option>
                                        <option value="asc" <?= isset($_GET['sortir']) && $_GET['sortir'] == 'asc' ? 'selected' : '' ?>>
                                            Termurah
                                        </option>
                                        <option value="desc" <?= isset($_GET['sortir']) && $_GET['sortir'] == 'desc' ? 'selected' : '' ?>>
                                            Termahal
                                        </option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>

                    <?php
                    $sqlSearchPosts = "SELECT * FROM posts WHERE title LIKE '%" . $_SESSION['query'] . "%' ";

                    $order = "";

                    if (isset($_GET['sortir'])) {
                        $order = " ORDER BY price " . $_GET['sortir'];
                    }

                    if (isset($_GET['sortir']) == 'default') {
                        $sqlSearchPosts;
                    }

                    $sqlSearchPosts .= ' AND ' . $price . $order;

                    $queSearchPosts = $conn->query($sqlSearchPosts);
                    $searchPosts = $queSearchPosts->fetch_all(MYSQLI_ASSOC);

                    foreach ($searchPosts as $search) {
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="photos/rumahmurah1.jpg" alt="">
                                    <div class="product-action">
                                        <a class="btn btn-outline-dark btn-square" href=""><i
                                                class="fa fa-shopping-cart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i
                                                class="fa fa-sync-alt"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate" href="#"><?= $search['title'] ?></a>
                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <h5>Rp<?= number_format($search['price'], 0, ',', '.') ?></h5>
                                    </div>
                                    <!-- // <div class="d-flex align-items-center justify-content-center mb-1">
                                    //     <small class="fa fa-star text-primary mr-1"></small>
                                    //     <small class="fa fa-star text-primary mr-1"></small>
                                    //     <small class="fa fa-star text-primary mr-1"></small>
                                    //     <small class="fa fa-star text-primary mr-1"></small>
                                    //     <small class="fa fa-star text-primary mr-1"></small>
                                    //     <small>(12)</small>
                                    // </div> -->
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop End -->

    <!-- Footer Start -->
    <?php include 'components/footer.html' ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <script src="js/main.js"></script>

    <script>
        // form termurah/termahal
        document.getElementById('sortirSelect').onchange = function () {
            document.getElementById('sortirForm').submit();
        };

        // form filter harga
        document.querySelectorAll('input[type=radio]').forEach(radio => {
            radio.addEventListener('change', function () {
                document.getElementById('formFilterPrice').submit()
            })
        });

    </script>
</body>

</html>