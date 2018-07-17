<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include "koneksi.php";
$code=$_REQUEST['code'];
$oke=mysql_query("select * from product where code_product='$code'");
$data=mysql_fetch_array($oke);
$picture=$data['picture_product'];
$name=$data['name_product'];
$code=$data['code_product'];
$size=$data['size_product'];
$color=$data['color_product'];
$stock=$data['stock_product'];
$price=$data['price_product'];
$description=$data['description_product'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $name; ?></title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="js/jquery-1.6.2.min.js" ></script>
<script type="text/javascript" src="js/jquery-ui-1.9.0.custom.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-tabs-rotate.js"></script>
<script type="text/javascript">
$(document).ready(function(){  
$("#featured").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);}); 
</script>
</head>

<body class="distro">

<div id="container">
  <div id="header">
<?php
include "header.php";
?>
  <!-- end #header --></div>
  <div id="sidebar1">
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
<table width="100%" id="product-detail">
<?php
echo "
  <tr>
    <td rowspan='8' id='gambar-detail'><img src='admin/product/upload/$picture' width='300' height='270'></td>
  <td width='50%' colspan='2' id='judul-detail'><b id='judul-detail'>$name</b></td></tr>
  <tr><td  width='10%'>Code</td><td>: $code</td></tr>
  <tr><td>Ukuran</td><td>: $size</td></tr>
  <tr><td>Warna</td><td>: $color</td></tr>
  <tr><td>Stock</td><td>: $stock</td></tr>
  <tr><td>Harga</td><td>: $price</td></tr>
  <tr><td colspan='2'>Deskripsi : </td></tr>
  <tr><td id='des'colspan='2'>$description</td></tr>
  <tr>
    <td colspan='3'><form method='POST'><center><input name='pesan' type='submit' value='Pesan Sekarang'/></center></form></td>
  </tr>";
?>
</table>
<!-- form order -->
<?php
if(isset($_POST['pesan'])!=""){
echo"<form action='order.php' method='post' name='order'>
      <table width='100%' border='0' bgcolor='#D9FFB3'>
        <tr>
          <th colspan='3' id='view-product'>Form Pemesanan Barang</th>
        </tr>
        <tr>
          <td width='30%'>Nama</td>
          <td width='5%'>:</td>
          <td width='65%'><label>
            <input type='text' name='name' maxlength='100' size='40'>
            </label></td>
        </tr>
        <tr>
          <td>No SIM,KTP,MHS</td>
          <td>:</td>
          <td><input type='text' name='no' maxlength='100' size='40'></td>
        </tr>
        <tr>
          <td>Telpon/HP</td>
          <td>:</td>
          <td><input type='text' name='telpon' maxlength='12' size='20'></td>
        </tr>
        <tr>
          <td>Email</td>
          <td>:</td>
          <td><input type='text' name='email' maxlength='100' size='40'></td>
        </tr>
		<tr>
          <td>Kode Pos</td>
          <td>:</td>
          <td><input type='text' name='code-pos' maxlength='10' size='10'></td>
        </tr>
		<tr>
          <td>Kota</td>
          <td>:</td>
          <td><input type='text' name='city' maxlength='30' size='20'></td>
        </tr>
        <tr>
          <td>Alamat lengkap</td>
          <td>:</td>
          <td><label>
            <textarea name='address' cols='35' rows='3'></textarea>
            </label></td>
        </tr>
        <tr>
          <td rowspan='2'>Item </td>
          <td>:</td>
          <td><label>
            <textarea name='item' cols='35' rows='3'></textarea>
            </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Example : code1=2, code4=5</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><label>
            <input type='submit' name='submit' value='Kirim'>
            <input type='reset' name='reset' value='Reset'>
            </label></td>
        </tr>
      </table>
</form>";
}
?>
<!-- end form -->
<?php
include "other-product.php";
?>
<table width="100%" border="0">
<tr><td><div id="view-product">Recent Post</div></td></tr>
<?php
include "koneksi.php";
$oke=mysql_query("select * from post where type_post='post'");
$no=1;
while($data=mysql_fetch_array($oke) and $no <=3){
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