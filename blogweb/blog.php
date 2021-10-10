<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studnet17 Admin Dashboard</title>

    <link rel="stylesheet" href="assets/vendors/dripicons/webfont.css">
    <link rel="stylesheet" href="assets/css/pages/dripicons.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.php"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <li class="sidebar-item ">
                            <a href="./admin.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="./post.php" class='sidebar-link'>
                                <i class="bi bi-pen-fill"></i>
                                <span>Đăng bài</span>
                            </a>
                        </li>
                        <li class="sidebar-item active ">
                            <a href="blog.php" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Bài viết</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="admin.php" class='sidebar-link'>
                                <i class="bi bi-heart-fill"></i>
                                <span>Yêu thích</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="admin.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Thành Tích</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="admin.php" class='sidebar-link'>
                                <i class="bi bi-gear-fill"></i>
                                <span>Cài đặt</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="admin.php" class='sidebar-link'>
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Đăng xuất</span>
                            </a>
                        </li>

                    </ul>
                    <ul class="menu">
                        <li class="sidebar-title">Dành cho bạn</li>
                        <li class="sidebar-item  ">
                            <a href="admin.php" class='sidebar-link'>
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Administration</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="admin.php" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Database</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Bài Viết</h3>
            </div>
            <div class="page-content">
                <section id="input-sizing">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <!-- <div class="card-header">
                                    <h4 class="card-title">Tiêu đề</h4>
                                </div> -->

                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-12">
                                            <!-- end blog-top -->

                                            <div class="blog-list clearfix">
                                                <div class="blog-box row">
                                                    <div class="col-md-4">
                                                        <div class="post-media">
                                                            <a href="single.php" title="">
                                                                <img src="images/posts/tren-sm-1.jpg" alt=""
                                                                    class="img-fluid">
                                                                <div class="hovereffect"></div>
                                                            </a>
                                                        </div>
                                                        <!-- end media -->
                                                    </div>
                                                    <!-- end col -->

                                                    <div class="blog-meta big-meta col-md-8">
                                                        <h4><a href="single.php" title="">Top 10 phone applications and
                                                                2021
                                                                mobile
                                                                design awards</a></h4>
                                                        <p>Aenean interdum arcu blandit, vehicula magna non, placerat
                                                            elit.
                                                            Mauris et
                                                            pharetratortor. Suspendissea sodales urna. In at augue elit.
                                                            Vivamus
                                                            enim nibh,
                                                            maximus ac felis nec, maximus tempor odio.</p>
                                                        <small class="firstsmall"><a class="bg-orange" href="#"
                                                                title="">Gadgets</a></small>
                                                        <small><a href="single.php" title="">21 July, 2021</a></small>
                                                        <small><a href="author.php" title="">by Matilda</a></small>
                                                        <small><a href="single.php" title=""><i class="fa fa-eye"></i>
                                                                1114</a></small>
                                                        <div class="row">

                                                            <div class="col-2">
                                                                <a href="post.php"
                                                                    style="min-width :50px;height:30px;line-height:19px;margin-top:10px;"
                                                                    class="btn btn-primary">Sửa</a>
                                                            </div>

                                                            <div class="col-2">
                                                                <a href="#"
                                                                    style="min-width :50px;height:30px;line-height:19px;margin-top:10px;"
                                                                    class="btn btn-primary">Xóa</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end meta -->
                                                </div>
                                                <!-- end blog-box -->

                                                <hr class="invis">

                                                <div class="blog-box row">
                                                    <div class="col-md-4">
                                                        <div class="post-media">
                                                            <a href="single.php" title="">
                                                                <img src="images/posts/tren-sm-2.jpg" alt=""
                                                                    class="img-fluid">
                                                                <div class="hovereffect"></div>
                                                            </a>
                                                        </div>
                                                        <!-- end media -->
                                                    </div>
                                                    <!-- end col -->

                                                    <div class="blog-meta big-meta col-md-8">
                                                        <h4><a href="single.php" title="">A device you can use both
                                                                headphones
                                                                and
                                                                usb</a></h4>
                                                        <p>Aenean interdum arcu blandit, vehicula magna non, placerat
                                                            elit.
                                                            Mauris et
                                                            pharetratortor. Suspendissea sodales urna. In at augue elit.
                                                            Vivamus
                                                            enim nibh,
                                                            maximus ac felis nec, maximus tempor odio.</p>
                                                        <small class="firstsmall"><a class="bg-orange" href="#"
                                                                title="">Công
                                                                nghệ</a></small>
                                                        <small><a href="single.php" title="">21 July, 2021</a></small>
                                                        <small><a href="author.php" title="">by Matilda</a></small>
                                                        <small><a href="single.php" title=""><i class="fa fa-eye"></i>
                                                                4412</a></small>
                                                        <div class="row">

                                                            <div class="col-2">
                                                                <a href="post.php"
                                                                    style="min-width :50px;height:30px;line-height:19px;margin-top:10px;"
                                                                    class="btn btn-primary">Sửa</a>
                                                            </div>

                                                            <div class="col-2">
                                                                <a href="#"
                                                                    style="min-width :50px;height:30px;line-height:19px;margin-top:10px;"
                                                                    class="btn btn-primary">Xóa</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end meta -->
                                                </div>
                                                <!-- end blog-box -->

                                                <hr class="invis">

                                                <div class="blog-box row">
                                                    <div class="col-md-4">
                                                        <div class="post-media">
                                                            <a href="single.php" title="">
                                                                <img src="images/posts/tren-sm-3.jpg" alt=""
                                                                    class="img-fluid">
                                                                <div class="hovereffect"></div>
                                                            </a>
                                                        </div>
                                                        <!-- end media -->
                                                    </div>
                                                    <!-- end col -->

                                                    <div class="blog-meta big-meta col-md-8">
                                                        <h4><a href="single.php" title="">Two brand new laptop models
                                                                from ABC
                                                                computer</a></h4>
                                                        <p>Aenean interdum arcu blandit, vehicula magna non, placerat
                                                            elit.
                                                            Mauris et
                                                            pharetratortor. Suspendissea sodales urna. In at augue elit.
                                                            Vivamus
                                                            enim nibh,
                                                            maximus ac felis nec, maximus tempor odio.</p>
                                                        <small class="firstsmall"><a class="bg-orange" href="#"
                                                                title="">Development</a></small>
                                                        <small><a href="single.php" title="">20 July, 2021</a></small>
                                                        <small><a href="author.php" title="">by Matilda</a></small>
                                                        <small><a href="single.php" title=""><i class="fa fa-eye"></i>
                                                                2313</a></small>
                                                        <div class="row">

                                                            <div class="col-2">
                                                                <a href="post.php"
                                                                    style="min-width :50px;height:30px;line-height:19px;margin-top:10px;"
                                                                    class="btn btn-primary">Sửa</a>
                                                            </div>

                                                            <div class="col-2">
                                                                <a href="#"
                                                                    style="min-width :50px;height:30px;line-height:19px;margin-top:10px;"
                                                                    class="btn btn-primary">Xóa</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end meta -->
                                                </div>
                                                <!-- end blog-box -->



                                                <hr class="invis">

                                                <div class="blog-box row">
                                                    <div class="col-md-4">
                                                        <div class="post-media">
                                                            <a href="single.php" title="">
                                                                <img src="images/posts/tren-sm-1.jpg" alt=""
                                                                    class="img-fluid">
                                                                <div class="hovereffect"></div>
                                                            </a>
                                                        </div>
                                                        <!-- end media -->
                                                    </div>
                                                    <!-- end col -->

                                                    <div class="blog-meta big-meta col-md-8">
                                                        <h4><a href="single.php" title="">Applications for taking photos
                                                                of
                                                                nature in
                                                                your mobile phones</a></h4>
                                                        <p>Aenean interdum arcu blandit, vehicula magna non, placerat
                                                            elit.
                                                            Mauris et
                                                            pharetratortor. Suspendissea sodales urna. In at augue elit.
                                                            Vivamus
                                                            enim nibh,
                                                            maximus ac felis nec, maximus tempor odio.</p>
                                                        <small class="firstsmall"><a class="bg-orange"
                                                                href="tech-category-01.html" title="">Design</a></small>
                                                        <small><a href="single.php" title="">19 July, 2021</a></small>
                                                        <small><a href="author.php" title="">by Matilda</a></small>
                                                        <small><a href="single.php" title=""><i class="fa fa-eye"></i>
                                                                4441</a></small>
                                                        <div class="row">

                                                            <div class="col-2">
                                                                <a href="post.php"
                                                                    style="min-width :50px;height:30px;line-height:19px;margin-top:10px;"
                                                                    class="btn btn-primary">Sửa</a>
                                                            </div>

                                                            <div class="col-2">
                                                                <a href="#"
                                                                    style="min-width :50px;height:30px;line-height:19px;margin-top:10px;"
                                                                    class="btn btn-primary">Xóa</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end meta -->
                                                </div>
                                                <!-- end blog-box -->

                                                <hr class="invis">

                                                <div class="blog-box row">
                                                    <div class="col-md-4">
                                                        <div class="post-media">
                                                            <a href="single.php" title="">
                                                                <img src="images/posts/tren-sm-2.jpg" alt=""
                                                                    class="img-fluid">
                                                                <div class="hovereffect"></div>
                                                            </a>
                                                        </div>
                                                        <!-- end media -->
                                                    </div>
                                                    <!-- end col -->

                                                    <div class="blog-meta big-meta col-md-8">
                                                        <h4><a href="single.php" title="">Say hello to colored strap
                                                                models in
                                                                smart
                                                                hours</a></h4>
                                                        <p>Aenean interdum arcu blandit, vehicula magna non, placerat
                                                            elit.
                                                            Mauris et
                                                            pharetratortor. Suspendissea sodales urna. In at augue elit.
                                                            Vivamus
                                                            enim nibh,
                                                            maximus ac felis nec, maximus tempor odio.</p>
                                                        <small class="firstsmall"><a class="bg-orange"
                                                                href="tech-category-01.html"
                                                                title="">Materials</a></small>
                                                        <small><a href="single.php" title="">18 July, 2021</a></small>
                                                        <small><a href="author.php" title="">by Matilda</a></small>
                                                        <small><a href="single.php" title=""><i class="fa fa-eye"></i>
                                                                33312</a></small>
                                                        <div class="row">

                                                            <div class="col-2">
                                                                <a href="post.php"
                                                                    style="min-width :50px;height:30px;line-height:19px;margin-top:10px;"
                                                                    class="btn btn-primary">Sửa</a>
                                                            </div>

                                                            <div class="col-2">
                                                                <a href="#"
                                                                    style="min-width :50px;height:30px;line-height:19px;margin-top:10px;"
                                                                    class="btn btn-primary">Xóa</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end meta -->
                                                </div>
                                                <!-- end blog-box -->



                                                <hr class="invis">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <nav aria-label="Page navigation">
                                                            <ul class="pagination justify-content-start">
                                                                <li class="page-item"><a class="page-link"
                                                                        href="#">1</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="#">2</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="#">3</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#">Tiếp</a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <!-- end col -->

                </section>

            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>

<div class="dmtop">Scroll to Top</div>

</div><!-- end wrapper -->

<!-- Core JavaScript
    ================================================== -->
<script src="js/jquery.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>

</body>

</html>