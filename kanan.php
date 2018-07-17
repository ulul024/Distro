<center><div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'id', includedLanguages: 'ar,de,en,es,fr,hi,it,ja,ms,nl,pt,tl,tr,zh-CN', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</center>
<table border="0" width="100%" id="sidebar">
<tr><th id="title" colspan="2">Category</th></tr>
<?php
include "koneksi.php";
$oke=mysql_query("select * from category where status_category='public'");
$no=1;
while($data=mysql_fetch_array($oke) and $no <= 15){
echo "<tr id='sidebar-name'><td width='10%'><img src='images/icon-post.png'></td>
		<td><a href='category.php?cat=$data[category]'><b>$data[name_category]</b></a></td></tr>";
$no++;
}
?>
</table>
<table border="0" width="100%" id="sidebar">
<tr><th id="title" colspan="2">Recent Post</th></tr>
<?php
include "koneksi.php";
$oke=mysql_query("select * from post where type_post='post'");
$no=1;
while($data=mysql_fetch_array($oke) and $no <= 15){
echo "<tr id='sidebar-name'><td width='10%'><img src='images/icon-post.png'></td>
		<td><a href='post.php?id=$data[id_post]'><b>$data[title_post]</b></a></td></tr>";
$no++;
}
?>
</table>
<table border="0" width="100%" id="sidebar">
<tr><th id="title" colspan="2">Customer Service</th></tr>
<tr>
<td><a href="ymsgr:sendIM?nahwan_nur92"> <img border="0" height="20" width="100" src="http://opi.yahoo.com/online?u=nahwan_nur92&m=g&t=1&l=us"/>&nbsp; Evan</a></td>
</tr>
<tr>
<td><a href="ymsgr:sendIM?hidayahqm"> <img border="0" height="20" width="100" src="http://opi.yahoo.com/online?u=hidayahqm&m=g&t=1&l=us"/>&nbsp; Mudita</a></td>
</tr>
<tr>
<td><a href="ymsgr:sendIM?janah_smart"> <img border="0" height="20" width="100" src="http://opi.yahoo.com/online?u=janah_smart&m=g&t=1&l=us"/>&nbsp; Janah</a></td>
</tr>
<tr>
<td><a href="ymsgr:sendIM?lisferi_setiarini_se"> <img border="0" height="20" width="100" src="http://opi.yahoo.com/online?u=lisferi_setiarini_se&m=g&t=1&l=us"/>&nbsp; Lisferi</a></td>
</tr>
<tr>
</table>
<table border="0" width="100%" id="sidebar">
<tr><th id="title">Lihat Peta</th></tr>
<tr><td><iframe width="180" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=distro+palestina+%40-7.805768990705755,110.38261592388153&amp;daddr=&amp;hl=id&amp;geocode=&amp;sll=-7.805466,110.382648&amp;sspn=0.001565,0.001725&amp;mra=mift&amp;ie=UTF8&amp;ll=-7.805466,110.382648&amp;spn=0.001565,0.001725&amp;t=m&amp;output=embed"></iframe><br /><small>Lihat <a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=distro+palestina+%40-7.805768990705755,110.38261592388153&amp;daddr=&amp;hl=id&amp;geocode=&amp;sll=-7.805466,110.382648&amp;sspn=0.001565,0.001725&amp;mra=mift&amp;ie=UTF8&amp;ll=-7.805466,110.382648&amp;spn=0.001565,0.001725&amp;t=m" style="color:#0000FF;text-align:left">Tanpa judul</a> di peta yang lebih besar</small></td></tr>
</table>