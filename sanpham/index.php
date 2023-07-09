<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Chi tiết sản phẩm</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.4/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	a:link {
		color:#000000;
		background-color:transparent;
		text-decoration:none;
		}
	</style>	
</head>
<body>
	<div class="app">
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
						<a class="header__navbar-item-link header__navbar-item-link--bold header__navbar-item-link--separate" style="text-decoration: none;">Đăng nhập</a>
					</li>
					<li class="header__narbar-item">
						<a class="header__navbar-item-link
						header__navbar-item-link--bold" style="text-decoration: none;">Đăng kí</a>
					</li>	
			</nav>				
			</div>					
		</header>
	</div>	

	<div>
		<div class="all" style="margin-top:12px;">
	        <div class="thanhtimkiem" style="margin-top: 10px;">
	        	<img src="logo.png" style="width: 40px;height: 40px;">
	            <input type="search" name="Tìm kiếm " placeholder="Tìm kiếm của bạn ...." style="width: 600px; height: 40px;color: red;">
	            <a href="#" class="search-btn"></a>	            
	        </div>
	        <label style="margin-left: 20px;text-align: center;margin-top: 5px;width: 120px;"><i class="far fa-bell"></i><br>Thông báo</label>
	        <label style="margin-left: 30px;text-align: center;margin-top: 5px;width: 120px;"><i class="fas fa-shopping-cart"></i><br>Giỏ hàng</label>
	        <label style="margin-left: 30px;text-align: center;margin-top: 5px;width: 120px;"><i class="fas fa-sign-in-alt"></i><br>Đăng nhập</label>
		</div>
	</div>
</div>

     
    <div id= wrapper>
    <div id="header">
        <ul id="main_menu">
            <ul class="cls2">
            <li>
                <a href="../ImageSlider/danhmucsp.php?id=1">Danh mục sản phẩm</a>
                <ul class="conmenu">
                </ul>
            </li>
                </ul>
           

            <ul class="cls2">
            <li><a href="#"><img src="mgg.png" style="width:24px;height:24px;margin-top: 3px;"> Mã giảm giá</a></li>
            </ul >
            <ul class="cls2">
            <li><a href="file:///E:/web/du%20an/test/flashsale.html"><img src="flashsale.png"  style="width:24px;height:24px;margin-top: 3px;"> Flash sale</a></li>
             </ul>
            <ul class="cls2">
            <li><a href="#"><img src="xuhuong.png"  style="width:24px;height:24px;margin-top: 3px;"> Xu hướng</a></li>
             </ul>
            <ul class="cls2">
            <li><a href="file:///E:/web/du%20an/web2/web2.html"><img src="bangxephang.png"  style="width:24px;height:24px;margin-top: 3px;"> Bảng xếp hạng</a></li>
             </ul>
            <ul class="cls2">
            <li><a href="file:///E:/web/du%20an/web3/web3.html"><img src="thanhvien.png"  style="width:24px;height:24px;margin-top: 3px;"> Thành viên</a></li>
             </ul>
            <ul class="cls2">
            <li><a href="file:///D:/dowload/WEBSITE/web/baitap.html"><img src="goiychoban.png"  style="width:24px;height:24px;margin-top: 3px;"> Gợi ý cho bạn</a></li>
             </ul>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>

<section class="product" style="background: #f8f6f0;">
	<div class="container">
		<div class="product-top">
			<p>Trang chủ</p><span>&#10230;</span> <p>Sản phẩm</p> <span>&#10230;</span><p>Chi tiết sản phẩm</p>
		</div>
		<?php 

                include_once'config.php';
                if(isset($_GET['id']))
                {	              
                    $id = $_GET['id'];
	                $sqldetail ="SELECT * from SANPHAM,mota WHERE sanpham.masp=mota.masp AND mota.masp=$id";
	                $result = mysqli_query($links,$sqldetail);
	                $data = mysqli_fetch_array($result);  
	    ?>
		<div class="product-content" style="display:flex;background-color: white;margin-top: -28px;">
			<div class="product-content-left">
				<div class="product-content-left-big-img">
					<img src="../admin/sqlphp/hinhanh/<?php echo $data['hinhanh']?>">
				</div>
				<div class="product-content-left-small-img">
					<img src="../admin/sqlphp/hinhanh/<?php echo $data['hinhanh']?>">
					<img src="../admin/sqlphp/hinhanh/<?php echo $data['hinhanh']?>">
					<img src="../admin/sqlphp/hinhanh/<?php echo $data['hinhanh']?>">
					<img src="../admin/sqlphp/hinhanh/<?php echo $data['hinhanh']?>">
				</div>
			</div>
			<div class="product-content-right">
				<div class="product-content-right-product-name"  style="margin-top:31px;">
					<h1><?php echo $data['tensp'] ?></h1>
				</div>
				<div class="product-content-right-product-price">
					<p>Giá:<?php echo $data['giakm'];; ?><sup>đ</sup></p>
				</div>
				<form action="http://localhost/ImageSlider/giohang.php" method="POST">
				<div class="quantity">
					<p style="font-weight:bold;">Số lượng :</p>
					<input type="number" min="0" value ="1" name="soluong" style="margin-left: 9px;height: 21px;border-radius: 4px;width: 40px;margin-top: 2px;padding-left: 10px;">
				</div>
				<div class="product-content-right-product-button" style="margin-top: -22px;">
					<input type="submit" name="addcart" value="Đặt hàng">
					<input type="hidden" name="tensp" value="<?php echo($data['tensp']) ?>">
					<input type="hidden" name="giakm" value="<?php echo($data['giakm']) ?>">
					<input type="hidden" name="hinhanh" value="<?php echo $data['hinhanh'] ?>">
				</div>	
				</form>
				<div class="product-content-right-product-icon">
					<div class="product-content-right-product-icon-item">
						<i class="fa fa-phone" aria-hidden="true"><p style="float:right;font-size: 14px;margin-left: 7px;">Hotline</p></i>
						
					</div>
					<div class="product-content-right-product-icon-item">
						<img src="chat.png" style="width: 20px;margin-top: -11px;">
						<p>Chat</p>					
					</div>
				</div>
				<div class="product-content-right-product-QR">
					<img src="QR.png" style="width: 100px;margin-top: -25px;">
				</div>
				<div class="product-content-right-bottom">
					<div class="product-content-right-bottom-top">
						
					</div>
					
				</div>

			</div>
		</div>
		<?php
		} 
        else
        {
        	echo "Không có sản phẩm";
        }
        
		 ?>
		
	</div>
</section>


<div class="TTSP" style="width: 1296px;background-color: white;height: 500px;margin-left: 112px;margin-top: 20px;height: 600px;border-radius: 10px;">
    <div class="body">
	<div>
		<h3 style="padding-left:30px;padding-top:16px;">Thông tin đơn hàng</h3>
	</div>
	<div class="body_chinh" style="padding-left:30px;">
  	<table>
	<tr class="bang">
		<th class="nametable">Mã hàng</th>
		<td class="TPtable"><?php echo $data['mahang'] ?></td>
	</tr>
	<tr class="bang">
		<th class="nametable">Tên nhà cung cấp</th>
		<td class="TPtable"><?php echo $data['tenncc'] ?></td>
	</tr>
	<tr class="bang">
		<th class="nametable">Tác giả</th>
		<td class="TPtable"><?php echo $data['tacgia'] ?></td>
	</tr>
	<tr class="bang">
		<th class="nametable">NXB</th>
		<td class="TPtable"><?php echo $data['NXB'] ?></td>
	</tr>
	<tr class="bang">
		<th class="nametable">Năm XB</th>
		<td class="TPtable"><?php echo $data['NamXB'] ?></td>
	</tr>
	<tr class="bang">
		<th class="nametable">Ngôn ngữ</th>
		<td class="TPtable"><?php echo $data['ngonngu'] ?></td>
	</tr>
	<tr class="bang">
		<th class="nametable">Trọng lượng(gr)</th>
		<td class="TPtable"><?php echo $data['trongluong'] ?></td>
	</tr>
	<tr class="bang">
		<th class="nametable">Kích thước bao bì</th>
		<td class="TPtable"><?php echo $data['kichthuocbaobi'] ?></td>
	</tr>
	<tr class="bang">
		<th class="nametable">Số trang</th>
		<td class="TPtable"><?php echo $data['sotrang'] ?></td>
	</tr>
	<tr class="bang">
		<th class="nametable">Hình thức</th>
		<td class="TPtable"><?php echo $data['hinhthuc'] ?></td>
	</tr>
	<tr class="bang">
		<th class="nametable">Sản phẩm bán chạy nhất</th>
		<td class="TPtable"><?php echo $data['spbanchaynhat'] ?></td>
	</tr>
</table> 
</div> 
</div>
<div style="padding-left: 30px;">	


	<?php 
      echo $data['tomtat'];

	 ?>
	<!-- <hr style="width: 97%;">
    <p>TỪ ĐIỂN TIẾNG “EM” – Định nghĩa về thế giới mới!</p>
    <p>Bạn sẽ bất ngờ, khi cầm cuốn “từ điển” xinh xinh này trên tay.</p>
    <p>Và sẽ còn ngạc nhiên hơn nữa, khi bắt đầu đọc từng trang sách…</p>
    <p>Dĩ nhiên là vì “Từ điển tiếng “Em” không phải là một cuốn từ điển thông thường rồi!</p>
    <p>Nói đến “từ điển”, xưa nay chúng ta đều nghĩ về một bộ sách đồ sộ, giải thích ý nghĩa, cách dùng, dịch, cách phát âm, và thường kèm theo các ví dụ về cách sử dụng từ đó.</p>
    <p>Tuy nhiên, với cuốn sách “Từ điển tiếng “em”, các bạn sẽ hết sức bất ngờ với những định nghĩa mới, bắt trend, sáng tạo, thông minh và vô cùng hài hước.</p>
    <p>Tiếng “em” [danh từ] ở đây là tiếng lòng của những người yêu sự thật, ghét sự giả dối</p>
    <p>Cô đơn [ tính từ ] không phải là không có ai bên cạnh, mà là người mình muốn ở cạnh lại không hề ở bên</p>
    <p>Sống lỗi [ động từ ] là cách sống của mấy bạn có người yêu cái là bỏ bê bạn bè liền hà...</p>
    <p>Nhưng đây không chỉ là cuốn sách chỉ biết nói dăm ba câu chuyện về tình yêu.
Còn nhiều hơn thế!</p> -->
</div>	
<center>
	<input type="button" value="Xem Thêm" name="" style="width: 210px;height: 40px;border-radius: 8px;color: #C92127;border: 1px solid #C92127;">
</center>
</div>



<div class="bannel" style="width: 1296px;height: 68px;background-color: white;margin-top: 20px;margin-left: 112px;border-radius: 10px;">
	<div class="bannel1">
		<img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-1-2020/icon/ico_shop.png">
		<p>Chính sách khách sỉ</p>
	</div>
	<div class="bannel1">
		<img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-1-2020/icon/ico_truck.png">
		<p>Thời gian giao hàng</p>
	</div>
    <div class="bannel1">
    	<img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-1-2020/icon/ico_transfer.png">
    	<p>Chính sách đổi trả</p>
    </div>
</div>



<div>
	<div style="background-color:#C7EEDE;width:1296px;height:50px;margin-left: 111px;margin-top: 23px;">
       <div class="tieude">
            <img src="goiychoban.png" style="width:20px;margin-top:20px;margin-left:28px;height:19px;line-height:16px;">
       </div>
        <div class="tieude">
            <p>Gợi ý dành cho bạn</p>
    </div>
    </div>
    <div class="all1" style="margin-left: 112px;background-color: wheat;">
    <div class="DS">
        <ul>
            <li class="cls2"><a href="#" style="margin-left:20px;">Văn Học</a></li>
            <li class="cls2"><a href="#" style="margin-left:50px;">Business,Firance & Management</a></li>
            <li class="cls2"><a href="#" style="margin-left:50px;">Manga-Comic</a></li>
            <li class="cls2"><a href="#" style="margin-left:50px;">Thêm</a></li>
        </ul>
    </div>
</div>
</div>
<div class="DSSP" style="margin-left:112px;">
	<div class="dssp">
		<div>
			<img src="https://www.fahasa.com/media/personalization/images/34/347028.jpg" style="width:200px;height:200px;">
		</div>
		<div class="SON">
		<p>Đời Có Mấy Tý, Sao Phải Nghĩ</p>
		</div>
		<div>
			<p style="color:red;">64.136đ</p>
			<p style="text-decoration-line: line-through;">80.000đ</p>
		</div>
	</div>
	<div class="dssp">
		<div>
			<img src="https://www.fahasa.com/media/personalization/images/35/357730.jpg" style="width:200px;height:200px;">
		</div>
		<div class="SON">
		<p>Tô Bình Yên Vẽ Hạnh Phúc (Tái Bản 2021)</p>
	</div>
		<div>
			<p style="color:red;">80.000đ</p>
			<p style="text-decoration-line: line-through;">100.000đ</p>
		</div>
	</div>
	<div class="dssp">
		<div>
			<img src="https://www.fahasa.com/media/personalization/images/28/285358.jpg" style="width:200px;height:200px;">
		</div>
		<div class="SON">
		<p>Nhà Giả Kim (Tái Bản 2020)</p>
	</div>
		<div>
			<p style="color:red;">51.125đ</p>
			<p style="text-decoration-line: line-through;">70.000đ</p>
		</div>
	</div>
	<div class="dssp">
		<div>
			<img src="https://www.fahasa.com/media/personalization/images/32/323513.jpg" style="width:200px;height:200px;">
		</div>
		<div class="SON">
		<p>Thế Giới Này Sẽ Chẳng Có Gì Thay Đổi Kể Cả Khi Bạn Khóc (Tái Bản 2020)</p>
	</div>
		<div>
			<p style="color:red;">69.000đ</p>
			<p style="text-decoration-line: line-through;">99.000đ</p>
		</div>
	</div>
	<div class="dssp">
		<div>
			<img src="https://www.fahasa.com/media/personalization/images/36/366896.jpg" style="width:200px;height:200px;">
		</div>
		<div class="SON">
		<p>Về Chuyện Tôi Chuyển Sinh Thành Slime - Tập 2 - Tặng Kèm Postcard + Bookmark Rimuru</p>
	</div>
		<div>
			<p style="color:red;">45.000đ</p>
			<p style="text-decoration-line: line-through;">64.156đ</p>
		</div>
	</div>
	<div class="dssp">
		<div>
			<img src="https://www.fahasa.com/media/personalization/images/34/349350.jpg" style="width:200px;height:200px;">
		</div>
		<div class="SON">
		<p>Tiểu Vũ Trụ - Tô Màu Thế Giới 12 Chòm Sao</p>
	</div>
		<div>
			<p style="color:red;">65.000đ</p>
			<p style="text-decoration-line: line-through;">99.000đ</p>
		</div>
	</div>
	<div class="dssp">
		<div>
			<img src="https://www.fahasa.com/media/personalization/images/35/356732.jpg" style="width:200px;height:200px;">
		</div>
		<div class="SON">
		<p>Đơn Phương - Anh Không Thương Em (Tái Bản 2021)</p>
	</div>
		<div>
			<p style="color:red;">79.000đ</p>
			<p style="text-decoration-line: line-through;">106.000đ</p>
		</div>
	</div>
	<div class="dssp">
		<div>
			<img src="https://www.fahasa.com/media/personalization/images/32/32318.jpg" style="width:200px;height:200px;">
		</div>
		<div class="SON">
		<p>5 Centimet Trên Giây</p>
	</div>
		<div >
			<p style="color:red;">102.000đ</p>
			<p style="text-decoration-line: line-through;">120.000đ</p>
		</div>
	</div>
	<div class="dssp">
		<div>
			<img src="https://www.fahasa.com/media/personalization/images/31/317195.jpg" style="width:200px;height:200px;">
		</div>
		<div class="SON">
		<p>Con Chim Xanh Biếc Bay Về - Tặng Kèm 6 Postcard</p>
	</div>
		<div>
			<p style="color:red;">201.000đ</p>
			<p style="text-decoration-line: line-through;">220.000đ</p>
		</div>
	</div>
	<div class="dssp">
		<div>
			<img src="https://www.fahasa.com/media/personalization/images/24/244691.jpg" style="width:200px;height:200px;">
		</div>
		<div class="SON">
		<p>Tôi Yêu Em Qua Hình Hài Robot</p>
	</div>
		<div>
			<p style="color:red;">79.000đ</p>
			<p style="text-decoration-line: line-through;">90.000đ</p>
		</div>
	</div>

	
		
	<center style="background-color: white;" >
		<input type="button" value="Xem Thêm" name="" style="width: 206px;
    height: 40px;
    border-radius: 10px;
    background-color: orange;
    border: 1px solid orange;
    color: white;
    background-image: linear-gradient(to right, #ff9800, #F7695D);
    box-shadow: 2px 3px 5px #ccc;">
	</center>
	
</div>

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



</html>