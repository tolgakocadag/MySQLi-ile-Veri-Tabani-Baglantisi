<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Veri Tabanı Yönetimi</title>
  </head>
  <header>
    <?php include 'ayarlar.php'; ?>
  </header>
  <body>
    <?php
          if(isset($_GET['id'])){
            $id=$_GET['id'];
            if (isset($_POST['submit'])) {
              $isim=$_POST['isim'];
              $soyisim=$_POST['soyisim'];
              $guncelleSorgusu=mysqli_query($baglanti,"UPDATE BILGILER SET ISIM='$isim',SOYISIM='$soyisim' WHERE ID=".$id);
              if($guncelleSorgusu){
                echo "Kayıt Güncellendi.
                <a href='listele.php'>Geri Dön</a><br /><br />";
              }
            }
          }
          $siralamaSorgusu=mysqli_query($baglanti,"SELECT * FROM BILGILER WHERE ID =".$id);
          $kayit=mysqli_fetch_array($siralamaSorgusu);
    ?>
    <form method="POST" action="">
      İsim: <input type="text" name="isim" value="<?php echo $kayit['ISIM'];?>"/><br />
      Soyisim: <input type="text" name="soyisim" value="<?php echo $kayit['SOYISIM'];?>"/ ><br />
      <input type="submit" name="submit" value="Güncelle" />
    </form>
  </body>
</html>
