<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trang chủ</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.4/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="stryle.css">
	<style type="text/css">
	a:link {
		color:#000000;
		background-color:transparent;
		text-decoration:none;
		}
	</style>		

</head>
<body>
<!-- 	<div class="app">
		<header class="header">
			<div class="grid">
				<nav class="header__navbar" >
				<ul class="header_navbar-list">	
					<li class="header__narbar-item">
						<a class="header__navbar-item-link header__navbar-item-link--separate" style="text-decoration: none;">Hệ thống cửa hàng</a>
					</li>
					<li class="header__narbar-item">
						<a class="header__navbar-item-link
						header__navbar-item-link--separate" style="text-decoration: none;">Liên hệ hỗ trợ</a>
					</li>
					<li class="header__narbar-item">
						<a class="header__navbar-item-link" style="text-decoration: none;">Tin tuyển dụng</a>
					</li>	
				</ul>
				<ul class="header_navbar-list">	
					<li class="header__narbar-item">
						<a href="http://localhost/web1/" class="header__navbar-item-link header__navbar-item-link--bold header__navbar-item-link--separate" style="text-decoration: none;">Đăng nhập</a>
					</li>
					<li class="header__narbar-item">
						<a href="http://localhost/web/#" class="header__navbar-item-link
						header__navbar-item-link--bold" style="text-decoration: none;">Đăng kí</a>
					</li>	
			</nav>				
			</div>					
		</header>
	</div>	 -->
    	<div>
		<div class="all" style="margin-left: -65px;">
	        <div class="thanhtimkiem" style="margin-top: 10px;">
	        	<img src="logo.png" style="width: 40px;height: 40px;">
	            <input type="search" name="Tìm kiếm " placeholder="Tìm kiếm của bạn ...." style="width: 600px; height: 40px;color: red;">
	            <a href="#" class="search-btn"></a>	            
	        </div>
	        <label style="margin-left: 20px;text-align: center;margin-top: 5px;width: 120px;"><i class="far fa-bell"></i><br>Thông báo</label>
	        <a href="http://localhost/ImageSlider/giohang.php"><label style="margin-left: 30px;text-align: center;margin-top: 5px;width: 120px;"><i class="fas fa-shopping-cart"></i><br>Giỏ hàng</label></a>
	        <a href="http://localhost/ImageSlider/trangchu/"><label style="margin-left: 30px;text-align: center;margin-top: 5px;width: 120px;"><i class="fas fa-sign-in-alt"></i><br>Đăng xuất</label></a>
	</div>
</div>

     
    <div id= wrapper>
    <div id="header">
        <ul id="main_menu">
            <ul class="cls2">
            <li>
                <a href="http://localhost/ImageSlider/danhmucsp.php?id=1">Danh mục sản phẩm</a>
                <ul class="conmenu">
                </ul>
            </li>
                </ul>
           

            <ul class="cls2">
            <li><a href="#"><img src="mgg.png" style="width:24px;height:24px;margin-top: 2px;margin-right: 6px;"> Mã giảm giá</a></li>
            </ul >
            <ul class="cls2">
            <li><a href="file:///E:/web/du%20an/test/flashsale.html"><img src="flashsale.png"  style="width:24px;height:24px;margin-top: 2px;margin-right: 6px;"> Flash sale</a></li>
             </ul>
            <ul class="cls2">
            <li><a href="#"><img src="xuhuong.png"  style="width:24px;height:24px;margin-top: 2px;margin-right: 6px;"> Xu hướng</a></li>
             </ul>
            <ul class="cls2">
            <li><a href="file:///E:/web/du%20an/web2/web2.html"><img src="bangxephang.png"  style="width:24px;height:24px;margin-top: 2px;margin-right: 6px;"> Bảng xếp hạng</a></li>
             </ul>
            <ul class="cls2">
            <li><a href="file:///E:/web/du%20an/web3/web3.html"><img src="thanhvien.png"  style="width:24px;height:24px;margin-top: 2px;margin-right: 6px;"> Thành viên</a></li>
             </ul>
            <ul class="cls2">
            <li><a href="file:///D:/dowload/WEBSITE/goiycuaban/baitap.html"><img src="goiychoban.png"  style="width:24px;height:24px;margin-top: 2px;margin-right: 6px;"> Gợi ý cho bạn</a></li>
             </ul>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
<center>

<div id="map1">
    <img src="anhlon.png" style="width: 80%; height: 100%">
</div>

    <div class="dungcu">
		<h3>Xu hướng mua sắm</h3>
	</div>	
	<div id="content" style="width:1200px;margin: auto;">
		     <div class="ABC">
    	<div class="ABC_1">
    		<img src="bannel1.png" style="width:246px;height:377px;float: left;">
    	</div>
    </div>   
    <?php 
        include_once('config.php');
        $sql = "SELECT * from SANPHAM WHERE masp < 05";
        $query = mysqli_query($links,$sql);
        while ($row = mysqli_fetch_array($query) ) {
     ?>
            <a href="http://localhost/sanpham/?&id=<?php echo $row['masp'] ?>"><div class="place-item">
                <img src="../../admin/sqlphp/hinhanh/<?php echo $row['hinhanh']?>"alt="anhminhhoa" class="place">
                <div class="place-body">
                    <p class="place-heading"><?php echo $row['tensp'] ?></p>
                    <p class="place-time">
                        <?php echo $row['giakm']?>đ</p>
                    <p class="place-desc" style="text-decoration-line: line-through;"><?php echo $row["giaban"] ?> đ</p>
                </div>
            </div>
            </a>

            <?php 
             }
              ?>
</div>
<div id="content" style="width:1200px;margin: auto;">
	<div id="content" style="width:1200px;margin: auto;">
		     <div class="ABC">
    	<div class="ABC_1">
    		<img src="bannel3.png" style="width:246px;height:377px;float: left;">
    	</div>
    	     
    </div>
    <?php 
        include_once('config.php');
        $sql = "SELECT * from SANPHAM WHERE masp >04 AND masp <09 ";
        $query = mysqli_query($links,$sql);
        // $row_title = mysqli_fetch_array();
        while ($row = mysqli_fetch_array($query) ) {
     ?>
           <a href="http://localhost/sanpham/?&id=<?php echo $row['masp'] ?>"><div class="place-item">
                <img src="../../admin/sqlphp/hinhanh/<?php echo $row['hinhanh']?>"alt="bauvat" class="place">
                <div class="place-body">
                    <p class="place-heading"><?php echo $row['tensp'] ?></p>
                    <p class="place-time"><?php echo $row['giakm'] ?>đ</p>
                    <p class="place-desc" style="text-decoration-line: line-through;"><?php echo $row['giaban'] ?>đ</p>
                </div>
            </div>
            </a>

            <?php 
            }
             ?>
        </div>
    </center>

<center>
    <img src="bannel.png" style="width: 1200px;">
</center>



<center>
    <div class="dungcu">
        <h3>Dụng cụ học sinh</h3>
    </div>  
    <div id="content" style="width:1200px;margin: auto;">
             <div class="ABC">
        <div class="ABC_1">
            <img src="bannel6.png" style="width:246px;height:377px;float: left;">
        </div>

    </div>
     <?php 
        include_once('config.php');
        $sql = "SELECT * from SANPHAM,mota WHERE sanpham.masp=mota.masp AND masp >08 AND masp <13 ";
        $query = mysqli_query($links,$sql);
        // $row_title = mysqli_fetch_array();
        while ($row = mysqli_fetch_array($query) ) {
     ?>

            <!-- <a href="http://localhost/sanpham/?&id=<?php echo $row['masp'] ?>"> -->
            <!-- <div class="place-item">
                <img src="../../admin/sqlphp/hinhanh/<?php echo $row['hinhanh']?> "  class="place">
                <div class="place-body">
                    <p class="place-heading"><?php echo $row['tensp'] ?></p>
                    <p class="place-time"><?php echo $row['giakm'] ?>đ</p>
                    <p class="place-desc" style="text-decoration-line: line-through;"><?php echo $row['giaban'] ?>đ</p>
                </div>
            </div> -->
            <div class="place-item">
                <img src="../admin/sqlphp/hinhanh/<?php echo $row['hinhanh'] ?>"alt="bauvat" class="place">
                <div class="place-body">
                    <h2 class="place-heading"><?php echo $row['tensp']; ?></h2>
                    <label class="place-time"><?php echo number_format($data['giaban'],0,',',',').'vnđ' ?></label>
                    <label class="places-sale">25%</label> 
                    <label class="place-desc" style="text-decoration-line: line-through;"><?php echo number_format($data['giakm'],0,',',',').'vnđ' ?></label><br>
                    <label>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                    </label><br><br>
                    <input type="submit" name="addcart" value="Mua">
                    <a href="http://localhost/sanpham/?id=<?php echo ($row['id']) ?>"><label class="btnmua">Xem</label></a>
                    <input type="hidden" name="tensp" value="<?php echo($row['tensp']) ?>">
                    <input type="hidden" name="giakm" value="<?php echo($row['giakm']) ?>">
                    <input type="hidden" name="hinhanh" value="<?php echo $row['hinhanh'] ?>">
                </div>
            </div>
            <!-- </a> -->



             <?php 
            }
             ?>
</div>
<div id="content" style="width:1200px;margin: auto;">
    <div id="content" style="width:1200px;margin: auto;">
             <div class="ABC">
        <div class="ABC_1">
            <img src="bannel3.png" style="width:246px;height:377px;float: left;">
        </div>
             
    </div>
         <?php 
        include_once('config.php');
        $sql = "SELECT * from SANPHAM WHERE masp >12 AND masp <17 ";
        $query = mysqli_query($links,$sql);
        // $row_title = mysqli_fetch_array();
        while ($row = mysqli_fetch_array($query) ) {
     ?>
            <a href="http://localhost/sanpham/?&id=<?php echo $row['masp'] ?>"><div class="place-item">
                <img src="uploads/hinhanh/<?php echo $row['hinhanh']?> "alt="bauvat" class="place">
                <div class="place-body">
                    <p class="place-heading"><?php echo $row['tensp'] ?></p>
                    <p class="place-time"><?php echo $row['giakm'] ?>đ</p>
                    <p class="place-desc" style="text-decoration-line: line-through;"><?php echo $row['giaban'] ?>đ</p>
                </div>
            </div>
            </a>

              <?php 
            }
             ?>
    
</center>

<center>
    <img src="lethieunhibg.png" style="width: 1200px;">
</center>

<center>
    <div class="dungcu">
        <h3>Đồ chơi trẻ em</h3>
    </div>  
    <div id="content" style="width:1200px;margin: auto;">
             <div class="ABC">
        <div class="ABC_1">
            <img src="bannel6.png" style="width:246px;height:377px;float: left;">
        </div>

    </div>
        <?php 
        include_once('config.php');
        $sql = "SELECT * from SANPHAM WHERE masp >16 AND masp <21 ";
        $query = mysqli_query($links,$sql);
        // $row_title = mysqli_fetch_array();
        while ($row = mysqli_fetch_array($query) ) {
     ?>

            <a href="http://localhost/sanpham/?&id=<?php echo $row['masp'] ?>"><div class="place-item">
                <img src="uploads/hinhanh/<?php echo $row['hinhanh']?>"  class="place">
                <div class="place-body">
                    <p class="place-heading"><?php echo $row['tensp'] ?></p>
                    <p class="place-time"><?php echo $row['giakm'] ?>đ</p>
                    <p class="place-desc" style="text-decoration-line: line-through;"><?php echo $row['giaban'] ?>đ</p>
                </div>
            </div>
            </a>


            <?php 
            }
            ?>
<!-- 
            // <div class="place-item">
            //     <img src="https://cdn0.fahasa.com/media/catalog/product/cache/1/small_image/400x400/9df78eab33525d08d6e5fb8d27136e95/i/m/image_195509_1_45327.jpg" class="place">
            //     <div class="place-body">
            //         <p class="place-heading">Lắp Ráp Robot Đa Năng Chạy Bằng Năng Lượng Mặt Trời</p>
            //         <p class="place-time">231.500đ</p>
            //         <p class="place-desc" style="text-decoration-line: line-through;">250.000đ</p>
            //     </div>
            // </div>

            // <div class="place-item">
            //     <img src="https://cdn0.fahasa.com/media/catalog/product/cache/1/small_image/400x400/9df78eab33525d08d6e5fb8d27136e95/5/7/5702015357197.jpeg" alt="maytinh" class="place">
            //     <div class="place-body">
            //         <p class="place-heading">LEGO Classic 10698-Thùng Gạch Lớn Classic Sáng Tạo</p>
            //         <p class="place-time">1.131.000đ</p>
            //         <p class="place-desc" style="text-decoration-line: line-through;">1.250.000đ</p>
            //     </div>
            // </div>

            //  <div class="place-item">
            //     <img src="https://cdn0.fahasa.com/media/catalog/product/cache/1/small_image/400x400/9df78eab33525d08d6e5fb8d27136e95/i/m/image_225628.jpg"alt="bauvat" class="place">
            //     <div class="place-body">
            //         <p class="place-heading">Robot Nắp Chai Colamaru Phượng Hoàng</p>
            //         <p class="place-time">140.000đ</p>
            //         <p class="place-desc" style="text-decoration-line: line-through;">200.000đ</p>
            //     </div>
            // </div> -->
</div>
<div id="content" style="width:1200px;margin: auto;">
    <div id="content" style="width:1200px;margin: auto;">
             <div class="ABC">
        <div class="ABC_1">
            <img src="bannel3.png" style="width:246px;height:377px;float: left;">
        </div>
             
    </div>

       <?php 
        include_once('config.php');
        $sql = "SELECT * from SANPHAM WHERE masp >20 AND masp <26 ";
        $query = mysqli_query($links,$sql);
        // $row_title = mysqli_fetch_array();
        while ($row = mysqli_fetch_array($query) ) {
     ?>
            <a href="http://localhost/WEBSITE/sanpham/?&id=<?php echo $row['masp'] ?>"><div class="place-item">
                <img src="uploads/hinhanh/<?php echo $row['hinhanh']?>"alt="bauvat" class="place">
                <div class="place-body">
                    <p class="place-heading"><?php echo $row['tensp'] ?></p>
                    <p class="place-time"><?php echo $row['giakm'] ?>đ</p>
                    <p class="place-desc" style="text-decoration-line: line-through;"><?php echo $row['giaban'] ?>đ</p>
                </div>
            </div>
            </a>


             <?php 
            }
            ?>
<!-- 
            <div class="place-item">
                <img src="https://cdn0.fahasa.com/media/catalog/product/cache/1/small_image/400x400/9df78eab33525d08d6e5fb8d27136e95/i/m/image_219101.jpg"alt="bauvat" class="place">
                <div class="place-body">
                    <p class="place-heading">Đồ Chơi Lắp Ráp LEGO 42117-Race Plane</p>
                    <p class="place-time">216.500đ</p>
                    <p class="place-desc" style="text-decoration-line: line-through;">250.000đ</p>
                </div>
            </div>
            <div class="place-item">
                <img src="https://cdn0.fahasa.com/media/catalog/product/cache/1/small_image/400x400/9df78eab33525d08d6e5fb8d27136e95/i/m/image_195509_1_10303.jpg"alt="bauvat" class="place">
                <div class="place-body">
                    <p class="place-heading">Lầy-Party Game Lầy Nhất Hệ Mặt Trời</p>
                    <p class="place-time">59.468đ</p>
                    <p class="place-desc" style="text-decoration-line: line-through;">70.000đ</p>
                </div>
            </div>
              <div class="place-item">
                <img src="https://cdn0.fahasa.com/media/catalog/product/cache/1/small_image/400x400/9df78eab33525d08d6e5fb8d27136e95/i/m/image_195509_1_17174.jpg"alt="bauvat" class="place">
                <div class="place-body">
                    <p class="place-heading">Bộ Tô Tượng Thạch Cao Khủng Long</p>
                    <p class="place-time">33.468đ</p>
                    <p class="place-desc" style="text-decoration-line: line-through;">40.000đ</p>
                </div>
            </div>
        </div> -->
    
</center>


<center>
    <img src="bannel0.png" style="width: 1200px;">
</center>

		

<hr>
<section>
    <div class="container" style="margin-left: 200px;">
        <label class="label">ĐĂNG KÝ NHẬN BẢN TIN</label>
         <div class="user">       
            <form>      
            <input type="search" name="Tìm kiếm " placeholder="Nhập địa chỉ email của bạn...." style="width: 600px; height: 40px;">
                <a href="#" class="search-btn" ></a>
                <input type="submit" value="Đăng ký" style="width: 110px; height: 40px">
                </form> 
            </div>
   </div>
</section>


<div class="colum1">
    <div class="colum11">
            <div> 
               <img src="logo.png" style="width:100px;">
            </div>
        <div class="fiter" style="font-size: 13px;">Lầu 30,Số 33 Đường Lý Bôn,TP.Thái Bình, Tỉnh Thái Bình  </div><br>
        <div class="fiter" style="font-size:  13px">Công ty cổ phần Phát hành sách TP Thái Bình </div><br>
        <div class="fiter" style="font-size:  13px">Huy Sơn.com nhận đặt hàng  trực tuyến và giao hàng tận nơi. KHÔNG hỗ trợ đặt mua và nhận hàng trực tiếp tại văn phòng cũng như tất cả Hệ Thống Huy Sơn trên toàn quốc.</div><br>
        <div class="fiter" style="margin: 15px 0px;">
            <img src="bocongthuong.png" style=" width: 100px; height:36px;"><br>
            <img src="Facebook.png">
            <img src="Insta.png">
            <img src="Youtube.png">
            <img src="twitter.png">
            <img src="pinterest.png">
            <br>
            <img src="android.png" style=" width: 110px; height:36px;">
            <img src="appstore.png" style=" width: 110px; height:36px;">
            </div><br>

    </div>
<div class="colum2">
    <div class="colum21"style="font-size:  13px">

        <ul>
            <li><b>DỊCH VỤ</b></li>
            <li>Điều khoản sử dụng</li>
            <li>Chính sách bảo mật</li>
            <li>Giới thiệu Huy Sơn</li>
            <li>Hệ thống trung tâm - nhà sách</li>
        </ul>
    </div>

    <div class="colum22"style="font-size:  13px">
        <ul>
            <li><b>HỖ TRỢ </b></li>
            <li>Chính sách đổi - trả - hoàn tiền</li>
            <li>Chính sách khách sỉ</li>
            <li>Phương thức vận chuyển</li>
            <li>Phương thức thanh toán và xuất HĐ</li>
        </ul>
    </div>
    <div class="colum23"style="font-size:  13px">
        <ul>
            <li><b>TÀI KHOẢN CỦA TÔI</b></li>
            <li>Đăng nhập/Tạo mới tài khoản</li>
            <li>Thay đổi địa chỉ khách hàng</li>
            <li>Chi tiết tài khoản</li>
            <li>Lịch sử mua hàng</li>
        </ul>
    </div>
    <div class="colum24" style="font-size:  13px">
        <ul>
            <li style="color: black;"><b>LIÊN HỆ</b></li>
            <li>Địa chỉ: 12-32 Lý Bôn, TP.Thái bình</li>
            <li>Gmail: infor@huyson.com</li>
            <li>Sđt: 19001006</li>
        </ul>
    </div>
</div>

</div>

</body>
</html>

</body>
</html>