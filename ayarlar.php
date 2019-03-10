<?php
$baglanti=mysqli_connect('hostadresi','db_kullaniciadi','db_sifre','db_veritabanıismi');
$baglanti->set_charset("utf8");
if (!$baglanti) {
  die('Hata:'.mysqli_connect_error());
}
else {
  echo "Bağlantı kuruldu.<hr>";
}
 ?>
