<center><?php
//menentukan hari
$a_hari = array(1=>"Senin","Selasa","Rabu","Kamis","Jumat", "Sabtu","Minggu");
$hari = $a_hari[date("N")];

//menentukan tanggal
$tanggal = date ("j");

//menentukan bulan
$a_bulan = array(1=>"Januari","Februari","Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober", "November","Desember");
$bulan = $a_bulan[date("n")];

//menentukan tahun
$tahun = date("Y");

//dan untuk menampilkan nya dengan format contoh Jumat, 22 Februari 2013
echo $hari . ", " . $tanggal ." ". $bulan ." ". $tahun;

?></center>
<table border="0" width="100%" id="sidebar">
<tr><th id="title" colspan='2'>Page</th></tr>
<?php
include "koneksi.php";
$oke=mysql_query("select * from post where type_post='page'");
while($data=mysql_fetch_array($oke)){
echo "<tr id='sidebar-name'><td width='10%'><img src='images/icon-page.png'></td>
		<td><a href='page.php?id=$data[id_post]'><b>$data[title_post]</b></a></td></tr>";
}
?>
</table>
<table border="0" width="100%" id="sidebar">
<tr><th id="title" colspan="2">Link</th></tr>
<?php
include "koneksi.php";
$oke=mysql_query("select * from link where status_link='public'");
$no=1;
while($data=mysql_fetch_array($oke) and $no <= 10){
echo "<tr id='sidebar-name'><td width='10%'><img src='images/link.png'></td>
		<td><a href='$data[url_link]'><b>$data[name_link]</b></a></td></tr>";
$no++;
}
?>
</table>
</table>
<table border="0" width="100%" id="sidebar">
<tr><th id="title">Sharing</th></tr>
<tr><td>
<!-- BEGIN CBOX - www.cbox.ws - v001 -->
<div id="cboxdiv" style="text-align: center; line-height: 0">
<div><iframe frameborder="0" width="180" height="305" src="http://www4.cbox.ws/box/?boxid=4206933&amp;boxtag=8qsx3d&amp;sec=main" marginheight="2" marginwidth="2" scrolling="auto" allowtransparency="yes" name="cboxmain4-4206933" style="border:#F6F3E0 1px solid;" id="cboxmain4-4206933"></iframe></div>
<div><iframe frameborder="0" width="180" height="75" src="http://www4.cbox.ws/box/?boxid=4206933&amp;boxtag=8qsx3d&amp;sec=form" marginheight="2" marginwidth="2" scrolling="no" allowtransparency="yes" name="cboxform4-4206933" style="border:#F6F3E0 1px solid;border-top:0px" id="cboxform4-4206933"></iframe></div>
</div>
<!-- END CBOX --></td>
</tr></table>
