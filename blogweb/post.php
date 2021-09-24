<?php include 'inc/header.php'; ?>


<div class="page-title lb single-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2><i class="fa fa-envelope-open-o bg-orange"></i> Đăng bài <small
                        class="hidden-xs-down hidden-sm-down">Bạn có cần sự trợ giúp 
                    </small></h2>
            </div>
            <!-- end col -->
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Nhà</a></li>
                    <li class="breadcrumb-item active">Đăng bài</li>
                </ol>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page-title -->

<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-wrapper">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <form class="form-wrapper">
                                <div class="form-group">
                                    <span>
                                        Tiêu đề
                                    </span>
                                    <span class="text-danger">*</span>
                                    <div class="input-group" style="width: 100%;">
                                        <input type="text" value class="form-control input-lg ">
                                        
                                    </div>
                                </div>
                                <p class="text-muted">
                                    Tiêu đề bắt buộc ghi rõ tên công ty, từng vị trí tuyển dụng và năm tuyển dụng. Chú ý, đôi khi chỉ tên công ty không là không đủ vì không hấp dẫn. VD: Bạn có thể ghi “Công ty đa quốc gia kiểm toán PWC…”   
                                </p>
                                <div class="form-group">
                                    <span>
                                        Nội dung
                                    </span>
                                    <span class="text-danger">*</span>
                                    <div class="input-group" style="width: 100%;">
                                        <input type="text" value class="form-control input-lg ">
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span>
                                        Ảnh bài viết 
                                    </span>
                                    <span class="text-danger">*</span>
                                </div>
                                <p class="text-muted">
                                     Ảnh có dung lượng dưới 200kb và kích cỡ tiêu chuẩn 700x400px. Các ảnh kích cỡ lớn hơn đều có thể gây chậm hoặc không tải được. Ảnh cần rõ nét, phân giải cao để được duyệt bài. Hỗ trợ các định dạng ảnh JPG, PNG, GIF, JPEG. Bạn có thể vào đây để giảm kích thước ảnh
                                </p>
                                <form action="#">
                                <div class="input-file-container">  
                                    <input class="input-file" id="my-file" type="file">
                                    <label tabindex="0" for="my-file" class="input-file-trigger">Select a file...</label>
                                </div>
                                <p class="file-return"></p>
                                </form>
                            </form>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
                <!-- end page-wrapper -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>




<?php include 'inc/footer.php'; ?>

<div class="dmtop">Scroll to Top</div>

</div>
<!-- end wrapper -->

<!-- Core JavaScript
    ================================================== -->
<script src="js/jquery.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script>
    document.querySelector("html").classList.add('js');

var fileInput  = document.querySelector( ".input-file" ),  
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");
      
button.addEventListener( "keydown", function( event ) {  
    if ( event.keyCode == 13 || event.keyCode == 32 ) {  
        fileInput.focus();  
    }  
});
button.addEventListener( "click", function( event ) {
   fileInput.focus();
   return false;
});  
fileInput.addEventListener( "change", function( event ) {  
    the_return.innerHTML = this.value;  
});  
</script>

</body>

<script src="ui/js/bootstrap.min.js"></script>


</html>