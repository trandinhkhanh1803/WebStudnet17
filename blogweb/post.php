
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
    <link rel="stylesheet" href="assets/vendors/summernote/summernote-lite.min.css">
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
                        <li class="sidebar-item  ">
                            <a href="./admin.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item active ">
                            <a href="./post.php" class='sidebar-link'>
                                <i class="bi bi-pen-fill"></i>
                                <span>????ng b??i</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="admin.php" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>B??i vi???t</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="admin.php" class='sidebar-link'>
                                <i class="bi bi-heart-fill"></i>
                                <span>Y??u th??ch</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="admin.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Th??nh T??ch</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="admin.php" class='sidebar-link'>
                                <i class="bi bi-gear-fill"></i>
                                <span>C??i ?????t</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="admin.php" class='sidebar-link'>
                                <i class="bi bi-box-arrow-right"></i>
                                <span>????ng xu???t</span>
                            </a>
                        </li>
                                   
                    </ul>
                    <ul class="menu">
                        <li class="sidebar-title">D??nh cho b???n</li>
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
                <h3>????ng b??i</h3>
            </div>
            <div class="page-content">
                <section id="input-sizing">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Ti??u ?????</h4>
                                </div>
                                
                                <div class="card-body">
                                    <div class="row">
                                        
                                        <div class="col-10">
                                            <input class="form-control" type="text" placeholder="Default Input">
                                            <p style="">Ti??u ????? b???t bu???c ghi r?? t??n c??ng ty, 
                                            t???ng v??? tr?? tuy???n d???ng v?? n??m tuy???n d???ng. 
                                            Ch?? ??, ????i khi ch??? t??n c??ng ty kh??ng l?? kh??ng ????? v?? 
                                            kh??ng h???p d???n. VD: B???n c?? th??? ghi ???C??ng ty ??a qu???c gia 
                                            ki???m to??n PWC??????
                                            </p>
                                        </div>
                                        <div class="col-2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">N???i dung</h4>
                                </div>
                                <div class="card-body">
                                    <div id="summernote"></div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">???nh b??i vi???t</h4>
                                </div>
                                <div class="card-body">
                                    <label for="formFile" class="form-label">???nh c?? dung l?????ng d?????i 200kb v?? k??ch c??? ti??u chu???n 700x400px. C??c ???nh k??ch c??? l???n h??n ?????u c?? th??? g??y ch???m ho???c kh??ng t???i ???????c. ???nh c???n r?? n??t, ph??n gi???i cao ????? ???????c duy???t b??i. H??? tr??? c??c ?????nh d???ng ???nh JPG, PNG, GIF, JPEG. B???n c?? th??? v??o ????y ????? gi???m k??ch th?????c ???nh</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-2">
                                    <a href="#" style="min-width : 120px" class="btn btn-primary">Ti???p theo</a>
                                </div>
                                <div class="col-6"></div>
                            </div>
                        </div>
                    </div>
                </section>
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
<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/vendors/jquery/jquery.min.js"></script>
<script src="assets/vendors/summernote/summernote-lite.min.js"></script>
<script>
    $('#summernote').summernote({
        tabsize: 2,
        height: 120,
    })
    $("#hint").summernote({
        height: 100,
        toolbar: false,
        placeholder: 'type with apple, orange, watermelon and lemon',
        hint: {
            words: ['apple', 'orange', 'watermelon', 'lemon'],
            match: /\b(\w{1,})$/,
            search: function (keyword, callback) {
                callback($.grep(this.words, function (item) {
                    return item.indexOf(keyword) === 0;
                }));
            }
        }
    });

</script>
</body>

</html>