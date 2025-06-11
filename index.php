<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Beranda-RupaRupa</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <style>
           .cart-badge {
            position: absolute;
            top: -5px;
            right: -8px;
            background: #f72a74;
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 10px;
            font-weight: bold;
            line-height: 1;
            min-width: 16px;
            text-align: center;
            z-index: 10;
        }
    </style>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand mx-auto" href="index.php">
                            <h1 class="m-0">RupaRupa</h1>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="belanja.php">Belanja</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Hubungi Kami</a>
                                </li>
                            </ul>
                        </div>
                        <?php session_start(); ?>
                        <?php if (isset($_SESSION['username'])) : ?>
                            <div class="header_icon d-flex">
                                <!-- Cart Link -->
                                <?php
                               include 'admin/koneksi.php';
                               
                               $user_id = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : null;
                               
                               if ($user_id) {
                                $query = "SELECT COUNT(*) as total FROM tb_pesanan WHERE id_user = '$user_id'";
                                $result = mysqli_query($koneksi, $query);
                                if (!$result) {
                                    die("Query error: " . mysqli_error($koneksi));
                                }
                                $data = mysqli_fetch_assoc($result);
                                $jumlah_item = isset($data['total']) ? $data['total'] : 0;
                                } else {
                                $jumlah_item = 0;
                                }
                                ?>

                                <a href="cart.php" id="cartLink" style="position: relative; display: inline-block;">
                                    <i class="fas fa-cart-plus" style="font-size: 16px;"></i>
                                    <span class="cart-badge"><?= $jumlah_item ?></span>
                                </a>

                                <!-- User Dropdown -->
                                <div class="dropdown user">
                                    <a class="dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user"></i>
                                        <span class="ml-2 text-dark"><?= htmlspecialchars($_SESSION['username']); ?></span> <!-- Menampilkan username dari session -->
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="logout.php">Logout</a>
                                    </div>
                                </div>
                            </div>


                        <?php else : ?>
                            <!-- Login Button -->
                            <a href="login.php" class="btn btn-primary ml-3 px-3 py-2" style="border-radius: 20px;">Login</a>
                        <?php endif; ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Sofa Minimalis</h1>
                                            <p>Sofa ini menggabungkan kenyamanan dan keindahan, 
                                                cocok untuk setiap sudut rumah.</p>
                                            <a href="belanja.php" class="btn_2">Belanja Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div><div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Elegan Nyaman & Berkualitas</h1>
                                            <p>Desain elegan sentuhan kayu dan kain alami untuk mempercantik ruang
                                                keluarga Anda.</p>
                                            <a href="belanja.php" class="btn_2">Lihat Produk</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div><div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Sofa kami lebih nyaman dari pelukan mantan</h1>
                                            <p>Ruang Anda adalah cerminan dari siapa Anda.
                                                 Biarkan sofa kami mencerminkan kepribadian Anda yang unik</p>
                                            <a href="belanja.php" class="btn_2">Lihat Koleksi</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Cloth $ Wood Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- product_list start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Temukan <span>Gaya Rumahmu</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_list_slider owl-carousel">
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">
                                <?php
                                include 'admin/koneksi.php';
                                // Ambil data produk dari database
                                $query = "SELECT id_produk, nm_produk, harga, gambar FROM tb_produk LIMIT 8";
                                $result = mysqli_query($koneksi, $query);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id_produk = $row['id_produk'];
                                    $nm_produk = $row['nm_produk'];
                                    $harga = number_format($row['harga'], 0, ',', '.');
                                    $gambar = $row['gambar'];
                                ?>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single_product_item">
                                                <img src="admin/produk_img/<?= htmlspecialchars($gambar) ?>" alt="<?= htmlspecialchars($nm_produk) ?>"
                                            style="width: 265px; height: 250px; object-fit : cover;">
                                            <div class="single_product_text">
                                                <h4><?= htmlspecialchars($nm_produk) ?></h4>
                                                <h3>Rp <?= $harga ?></h3>
                                                <a href="detail_produk.php?id=<?= $row['id_produk'] ?>" class="add_cart">+ keranjang</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- product_list part start-->

    <!-- awesome_shop start-->
    <section class="our_offer section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="offer_img">
                        <img src="img/offer_img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="offer_text">
                        <h2>Semua Produk Diskon
                            60% Hanya Minggu Ini</h2>
                        <div class="date_countdown">
                            <div id="timer">
                                <div id="days" class="date"></div>
                                <div id="hours" class="date"></div>
                                <div id="minutes" class="date"></div>
                                <div id="seconds" class="date"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="input-group-append">
                                <a href="belanja.php" class="input-group-text btn_2" id="basic-addon2">CEK SEKARANG</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- awesome_shop part start-->

     <!--::footer_part start::-->
  <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-sm-6 col-lg-2">
                </div>
                <div class="col-sm-6 col-lg-2">
                </div>
                <div class="col-sm-6 col-lg-2">
                </div>
                <div class="col-sm-6 col-lg-2">
                </div>
                <div class="col-sm-6 col-lg-4">
                </div>
            </div>

        </div>
        <div class="copyright_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="copyright_text">
                            <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | RupaRupa by <a href="#" target="_blank">Bismooooooo</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_icon social_icon">
                            <ul class="list-unstyled">
                                <li><a href="https://www.instagram.com/bsmawhy" class="single_social_icon" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>