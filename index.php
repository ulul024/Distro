<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Distro ULUL</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="js/jquery-1.6.2.min.js" ></script>
<script type="text/javascript" src="js/jquery-ui-1.9.0.custom.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-tabs-rotate.js"></script>
<script type="text/javascript">
$(document).ready(function(){  
$("#featured").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);}); 
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<meta name="google-translate-customization" content="6c4781192c95003-97d5158c26efcbe4-gf498eccff66c2cbc-13"></meta>
</head>

<body class="distro">

<div id="container">
  <div id="header">
<?php
include "header.php";
?>
  <!-- end #header --></div>
<div   id="sidebar1">
<?php 
include "kiri.php";
?>
  <!-- end #sidebar1 --></div>
  <div id="sidebar2">
<?php 
include "kanan.php";
?>
  <!-- end #sidebar2 --></div>
  <div id="mainContent">
<?php
include "tarik.php";
?>
  <marquee> Selamat Datang Di Web Distro ULUL</marquee>
<!-- slide -->
<div id="featured" >
		  <ul class="ui-tabs-nav">
	        <li class="ui-tabs-nav-item" id="nav-fragment-1"><a href="#fragment-1"><img src="images/image1-small.jpg" alt="" /><span>15+ Excellent High Speed Photographs</span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="#fragment-2"><img src="images/image2-small.jpg" alt="" /><span>20 Beautiful Long Exposure Photographs</span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3"><img src="images/image3-small.jpg" alt="" /><span>35 Amazing Logo Designs</span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-4"><a href="#fragment-4"><img src="images/image4-small.jpg" alt="" /><span>Create a Vintage Photograph in Photoshop</span></a></li>
			
	      </ul>

	    <!-- First Content -->
	    <div id="fragment-1" class="ui-tabs-panel" style="">
			<img src="images/image1.jpg" alt="" />
			 <div class="info" >
				<h2><a href="#" >15+ Excellent High Speed Photographs</a></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt condimentum lacus. Pellentesque ut diam....<a href="#" >read more</a></p>
			 </div>
	    </div>

	    <!-- Second Content -->
	    <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">
			<img src="images/image2.jpg" alt="" />
			 <div class="info" >
				<h2><a href="#" >20 Beautiful Long Exposure Photographs</a></h2>
				<p>Vestibulum leo quam, accumsan nec porttitor a, euismod ac tortor. Sed ipsum lorem, sagittis non egestas id, suscipit....<a href="#" >read more</a></p>
			 </div>
	    </div>

	    <!-- Third Content -->
	    <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
			<img src="images/image3.jpg" alt="" />
			 <div class="info" >
				<h2><a href="#" >35 Amazing Logo Designs</a></h2>
				<p>liquam erat volutpat. Proin id volutpat nisi. Nulla facilisi. Curabitur facilisis sollicitudin ornare....<a href="#" >read more</a></p>
	         </div>
	    </div>

	    <!-- Fourth Content -->
	    <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide" style="">
			<img src="images/image4.jpg" alt="" />
			 <div class="info" >
				<h2><a href="#" >Create a Vintage Photograph in Photoshop</a></h2>
				<p>Quisque sed orci ut lacus viverra interdum ornare sed est. Donec porta, erat eu pretium luctus, leo augue sodales....<a href="#" >read more</a></p>
	         </div>
	    </div>
		
		

		</div>
<!-- end slide -->
<table width="100%" border="0">
<tr><td colspan="4"><div id="view-product">View Product</div></td></tr>
<tr>
<?php
include "koneksi.php";
$oke=mysql_query("select * from product");
$no=0;
while($data=mysql_fetch_array($oke) and $no<=11){
echo "<td width='25%' id='bgproduct'><img src='admin/product/upload/$data[picture_product]' width='120' height='100'>
<br><b id='name-product'>$data[name_product]</b>
<br><b id='harga'>$data[price_product]</b>
<br><a href='product-detail.php?code=$data[code_product]'><img src='images/detail.png'></a></td>";
$no++;
if($no % 4==0){
echo"<tr>";
}
}
?>
</table>
<table width="100%" border="0">
<tr><td><div id="view-product">Recent Post</div></td></tr>
<?php
include "koneksi.php";
$oke=mysql_query("select * from post where type_post='post' order by id_post desc");
$no=1;
while($data=mysql_fetch_array($oke) and $no <=4){
echo "<tr><td id='judul'><a href='post.php?id=$data[id_post]'><b id='judul'>$data[title_post]</b></a></td></tr>";
echo"<tr><td><div id='date'><img src='images/calendar.png'>$data[date_post] by $data[author_post]</div></td></tr>";
$isi_berita = htmlentities(strip_tags($data['content_post'])); // membuat paragraf pada isi berita dan mengabaikan tag html
$isi = substr($isi_berita,0,150); // ambil sebanyak 260 karakter
$isi = substr($isi_berita,0,strrpos($isi," ")); // potong per spasi kalimat
echo"<tr><td>$isi....<br>
	<a href='post.php?id=$data[id_post]'> <img src='images/readmore.png' border='0' style='margin-top:8px' /></td></tr>";
$no++;
}
?>
</table>
	<!-- end #mainContent --></div>
	<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
   <div id="footer">
<?php
include "footer.php";
?>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>