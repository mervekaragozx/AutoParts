<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/921ef5d521.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
	<title>Ürün Ekle</title>
</head>
<body>
    <div class="topnav">
    <a class="active" href="HomePage3.php">Anasayfa</a>
    <!--  <a href="#product">Ürünler</a>  -->
    <a href="about.php">Hakkımızda</a>
    <a href="contact.php">İletişim</a>
    <a href="login.php">Giriş Yap</a>
	<a href="logout.php">Çıkış Yap</a>
    <input type="text" placeholder="Parça arayın..">  
  </div>
    

<style>
  .topnav {
    overflow: hidden;
    background-color: #e9e9e9;
  }
  
  /* Style the links inside the navigation bar */
  .topnav a {
    float: left;
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  
  /* Change the color of links on hover */
  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }
  
  /* Style the "active" element to highlight the current page */
  .topnav a.active {
    background-color: #2196F3;
    color: white;
  }
  
  /* Style the search box inside the navigation bar */
  .topnav input[type=text] {
    float: right;
    padding: 6px;
    border: none;
    margin-top: 8px;
    margin-right: 16px;
    font-size: 17px;
  }
  
  /* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
  @media screen and (max-width: 600px) {
    .topnav a, .topnav input[type=text] {
      float: none;
      display: block;
      text-align: left;
      width: 100%;
      margin: 0;
      padding: 14px;
    }
    .topnav input[type=text] {
      border: 1px solid #ccc;
    }
  }
  





</style>
   
</body>

</html>

<?php
session_start();
$c=$_SESSION["email"];
$d=$_SESSION["sifre"];

$db = new PDO("mysql:host=localhost;dbname=yedekparca", 'root',''); //bağlantı kodu

$kullanici= $db-> query("SELECT * FROM kullanici"); //k1 tablosundan verileri alıyorum
while ($row = $kullanici->fetch())   { //tüm kullanıcıların kullanıcı adı ve şifre bilgilerini session dan aldığım verilerle karşılaştırıyorum

if($c == $row['email'] && $d== $row['sifre'])	
  {
	echo '
	<form name="form1" method="post" enctype="multipart/form-data" >
	  <center>
    
    <table width="600" border="0">
    
	    <tbody>
      
		  <tr>
	        <td >Ürün adı:</td>
	        <td><input type="text" name="urun_adi"></td>
	      </tr>
	      <tr>
	      <tr>
	        <td >Stok:</td>
	        <td><input type="text" name="stok" ></td>
	      </tr>
	      <tr>
	        <td>Resim:</td>
	        <td><input type="file" name="resim"></td>
	      </tr>
	      <tr>
	        <td colspan="2"></center>';
			
			$kullanici= $db-> query("SELECT ktur FROM kullanici where email='$c' AND sifre='$d'"); //k1 tablosundan verileri alıyorum
			while ($row = $kullanici->fetch())
			  { //tüm kullanıcıların kullanıcı adı ve şifre bilgilerini session daki verilerle karşılaştırıyorum
			   	if($row['ktur']==1)
				  {
					echo '<br><input type="submit" name="ekle" value="Ekle"> <input type="submit" name="listele" value="Tümünü Listele"><input type="submit" name="degistir" value="Değiştir"><input type="submit" name="sil" value="Sil"></center></td>';	
				}
					
				else if ($row['ktur']==0)
					echo '<input type="submit" name="degistir" value="Değiştir"></center></td>';
				else if ($row['ktur']==2)
					echo '<input type="submit" name="ekle" value="Ekle"></center></td>';	
			}
			

	echo ' </tr>	</table></center></form>';
	}

	include 'config.php';

	if($_POST){
		if($_FILES["resim"] ["size"]<1024*1024){
		   
				$ad=$_POST["urun_adi"];
				$stok=$_POST["stok"];
				$dosya_adi=$_FILES["resim"] ["name"];
				$isim=array("yt", "ut", "yy", "op", "hf");
				$sayi=rand(0,1000);
				$uzanti=substr($dosya_adi, -4, 4);
				$yeni_ad="images/".$isim[rand(0,4)].$sayi.$uzanti;
				if(move_uploaded_file($_FILES["resim"] ["tmp_name"],$yeni_ad)){
					echo "Ürün eklendi.";
					$ekle=mysqli_query($baglan, "INSERT INTO urunler (urun_adi, stok, urun_resmi) VALUES ('$ad','$stok','$yeni_ad')");
				}
				else{
	
				}
		}
		else{
			echo "1 mb";
		}
	}


	if (isset($_POST['listele']))
	  {
		
		$listele= $db-> query("SELECT * FROM urunler");
		while ($row = $listele->fetch()) 
		  {
		    echo $row['urun_adi'] . " ". $row['stok'] . " ". $row['urun_resmi'] . "<br>" ;
		}
	}}



?>

