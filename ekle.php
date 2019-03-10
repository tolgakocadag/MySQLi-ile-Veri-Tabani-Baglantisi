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
          if(isset($_POST['submit'])){
            $isim=$_POST['isim'];
            $soyisim=$_POST['soyisim'];
            $sql="INSERT INTO BILGILER (ISIM,SOYISIM) VALUES ('$isim','$soyisim')";
            if ($baglanti->query($sql)==TRUE) {
              echo "Kayıt eklendi...";
            }
            else {
              echo $baglanti->error;
            }
          }
     ?>
     <form method="post" action="">
       İsim: <input type="text" name="isim" /><br />
       Soyisim: <input type="text" name="soyisim" /><br />
       <input type="submit" name="submit" value="Ekle" />
     </form>
     <br /><a href='listele.php'>Kayıtları Listele</a>
  </body>
</html>
