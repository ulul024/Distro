 <?php
if(isset($_POST['submit'])!="")
{
include "koneksi.php";
$name=$_POST['name'];
$no=$_POST['no'];
$telpon=$_POST['telpon'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$poscode=$_POST['code-pos'];
$item=$_POST['item'];
//memeriksa apakah form kosong  
if(($name==null)or($no==null)or($telpon==null)or($email==null)or($address==null)or($item==null)){
	echo("<script> alert('Maaf, Isi data dengan lengkap')</script>");
	include("product.php");exit;} 
		else{$auth=true;}  
//proses pengiriman  
if($auth){   
$data=mysql_query("INSERT INTO pemesanan values(id_pemesan,'name_pemesan','identitas_pemesan','address_pemesan','city_pemesan','poscode_pemesan','email_pemesan','phone_pemesan','item_pemesan',date_pemesan,'status_pemesan'),('','$name','$no','$address','$city','$poscode','$email','$telpon','$item',now(),'pending')") or die (mysql_error());
echo("<script> alert('Pemesanan anda sudah di kirim. Terima Kasih')</script>"); 
exit;  }
else{  
echo("<script> alert('Maaf, pemesanan gagal silahkan coba lagi')</script>"); 
exit;} 
} 

?> 