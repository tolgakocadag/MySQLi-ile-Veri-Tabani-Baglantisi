<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Veri Tabanı Yönetimi</title>
  </head>
  <header>
    <?php include 'ayarlar.php' ?>
  </header>
  <body>
    <?php
          if(isset($_GET['id'])){
            $id=$_GET['id'];
            $silSorgusu="DELETE FROM BILGILER WHERE ID='$id'";
            if(mysqli_query($baglanti,$silSorgusu)){
              echo "Kayıt silindi.<a href='listele.php'>Geri Dön</a>";
            }
          }
     ?>
  </body>
</html>
