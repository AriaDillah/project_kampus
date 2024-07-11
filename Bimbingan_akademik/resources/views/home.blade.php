<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/css/tiny-slider.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <title>
        Furni Free Bootstrap 5 Template for Furniture and Interior Design
        Websites by Untree.co
    </title>

    <style>
        .circle-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .circle-image {
            width: 650px;
            height: 650px;
            border-radius: 80%;
            object-fit: cover;
        }

        .footer {
            background: #3b5d50;
            color: #ffffff;
            padding: 50px 0;
        }

        .footer .footer-logo {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .footer .footer-nav {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .footer .footer-nav li {
            margin: 0 15px;
        }

        .footer .footer-nav li a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 500;
            -webkit-transition: 0.3s all ease;
            -o-transition: 0.3s all ease;
            transition: 0.3s all ease;
        }

        .footer .footer-nav li a:hover {
            color: #f9bf29;
        }

        .footer .subscription-form {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        .footer .subscription-form input[type="email"] {
            padding: 10px;
            border: none;
            border-radius: 5px 0 0 5px;
            font-family: "Inter", sans-serif;
            font-size: 14px;
            width: 250px;
        }

        .footer .subscription-form button {
            padding: 10px 20px;
            border: none;
            background: #f9bf29;
            color: #2f2f2f;
            font-weight: 600;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            -webkit-transition: 0.3s all ease;
            -o-transition: 0.3s all ease;
            transition: 0.3s all ease;
        }

        .footer .subscription-form button:hover {
            background: #f8b810;
        }

        .footer .social-icons {
            display: flex;
            justify-content: center;
        }

        .footer .social-icons li {
            list-style: none;
            margin: 0 10px;
        }

        .footer .social-icons li a {
            display: block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            border-radius: 50%;
            background: #ffffff;
            color: #3b5d50;
            -webkit-transition: 0.3s all ease;
            -o-transition: 0.3s all ease;
            transition: 0.3s all ease;
        }

        .footer .social-icons li a:hover {
            background: #f9bf29;
            color: #2f2f2f;
        }

        .footer .copyright {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #dce5e4;
        }

        @media (min-width: 768px) {
            .custom-order-1 {
                order: 1;
            }

            .custom-order-2 {
                order: 3;
            }

            .custom-order-3 {
                order: 2;
            }

            .custom-order-4 {
                order: 4;
            }
        }
    </style>
</head>

<body>
    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Prodi Guide<span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active"></li>
                    <a class="nav-link" href="index.html">Home</a>
                    <li><a class="nav-link" href="login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>
                            Welcome To
                            <span clsas="d-block">Prodi Guide : Panduan Terbaik untuk Program
                                Studi Anda!
                            </span>
                        </h1>
                        <p class="mb-4">
                            ProdiGuide adalah platform inovatif yang
                            dirancang khusus untuk membantu mahasiswa,
                            dosen, dan seluruh civitas akademika dalam
                            menavigasi dan memahami berbagai program studi
                            di kampus. Dengan fitur-fitur unggulan yang kami
                            tawarkan, kami berkomitmen untuk memberikan
                            pengalaman akademik yang lebih
                            terstruktur dan informatif.
                        </p>
                        <p>
                            <a href="register" class="btn btn-secondary me-2">Register Now</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="{{ asset('assets/img/ProdiGuide-removebg-preview.png') }}" alt="Circle Image" class="circle-image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Start Product Section -->
    <div class="product-section">
        <div class="container">
            <div class="row">
                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg10 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">
                        berikut penjelasan tentang teknik informatika dan
                        sistem informasi.
                    </h2>
                    <p class="mb-5">
                        Teknik Informatika adalah bidang studi yang fokus
                        pada pengembangan perangkat lunak, sistem informasi,
                        dan teknologi komputer. Jurusan Sistem Informasi
                        adalah program studi yang memadukan ilmu komputer
                        dengan bisnis dan manajemen.
                    </p>
                </div>

                <div class="row">
                    <!-- Start Column Group 1 -->
                    <div class="col-12 col-md-6">
                        <div class="row">
                            <!-- Start Column 1 -->
                            <div class="col-12 col-lg-6 mb-5 mb-md-0">
                                <a class="product-item" href="">
                                    <img src="{{ asset('assets/img/Teknik_Informatika.png') }}" class="img-fluid product-thumbnail" />
                                    <h3 class="product-title">Teknik Informatika</h3>
                                </a>
                            </div>
                            <!-- End Column 1 -->

                            <!-- Start Column 2 -->
                            <div class="col-12 col-lg-6 mb-5 mb-md-0">
                                <a class="product-item" href="">
                                    <img src="{{ asset('assets/img/Dosen_TI-removebg-preview.png') }}"
                                        class="img-fluid product-thumbnail" />
                                    <h3 class="product-title">Dosen Teknik Informatika</h3>
                                </a>
                            </div>
                            <!-- End Column 2 -->
                        </div>
                    </div>
                    <!-- End Column Group 1 -->

                    <!-- Start Column Group 2 -->
                    <div class="col-12 col-md-6">
                        <div class="row">
                            <!-- Start Column 3 -->
                            <div class="col-12 col-lg-6 mb-5 mb-md-0">
                                <a class="product-item" href="cart.html">
                                    <img src="{{ asset('assets/img/Sistem_Informasi.png') }}" class="img-fluid product-thumbnail" />
                                    <h3 class="product-title">Sistem Informasi</h3>
                                </a>
                            </div>
                            <!-- End Column 3 -->

                            <!-- Start Column 4 -->
                            <div class="col-12 col-lg-6 mb-5 mb-md-0">
                                <a class="product-item" href="">
                                    <img src="{{ asset('assets/img/Dosen_SI-removebg-preview.png') }}"
                                        class="img-fluid product-thumbnail" />
                                    <h3 class="product-title">Dosen Sistem Informasi</h3>
                                </a>
                            </div>
                            <!-- End Column 4 -->
                        </div>
                    </div>
                    <!-- End Column Group 2 -->
                </div>

            </div>
        </div>
    </div>
    <!-- End Product Section -->

    <!-- Start Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="footer-logo">ProdiGuide</div>
            <ul class="footer-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="subscription-form">
                <input type="email" placeholder="Enter your email" />
                <button type="submit">Subscribe</button>
            </div>
            <ul class="social-icons">
                <li>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </li>
            </ul>
            <div class="copyright">
                &copy; 2024 ProdiGuide. All rights reserved.
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/glightbox.min.js') }}"></script>
</body>

</html>
