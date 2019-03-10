<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Veri Tabanı Yönetimi</title>
  </head>
  <header>
    <?php
      include 'ayarlar.php';
    ?>
  </header>
  <body>
    <?php
        $sorgu ="SELECT * FROM BILGILER";
        $sorguSonucu=mysqli_query($baglanti,$sorgu) or trigger_error("Hata: ".mysqli_error($mysqli),E_USER_ERROR);
        if ($sorguSonucu) {
          echo "<table border='1px'>";
          while ($kayit=mysqli_fetch_assoc($sorguSonucu)) {
            echo "<tr><td>".$kayit['ISIM']."</td><td>".$kayit['SOYISIM']."</td><td><a href='guncelle.php?id=".$kayit['ID']."'>Düzenle</a></td><td><a href='sil.php?id=".$kayit['ID']."'>Kaldır</a></td></tr>";
          }
        }
        echo "</table>";
     ?>
     <br /><a href='ekle.php'>Yeni kayıt ekle</a>
  </body>
</html>
