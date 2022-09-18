<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/921ef5d521.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <title>Anasayfa</title>
</head>
<body>
    <div class="topnav">
    <a class="active" href="HomePage3.php">Anasayfa</a>
    <a href="about.php">Hakkımızda</a>
    <a href="contact.php">İletişim</a>
    <a href="login.php">Giriş Yap</a>
    <input type="text" placeholder="Parça arayın.."> 
    <i id="searchicon" class="fas fa-search"></i>  
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
  
  #searchicon{
    float: right;
    padding: 6px;
    border: none;
    margin-top: 9px;
    margin-right: 3px;
    font-size: 17px;
  }

  body{
    background-size: cover;
    background: linear-gradient(120deg,#007bff,#d0314c);
    height: 100vh;
  }

  table{
    
  }

  td{
    font-size: larger;
    
  }

  tr{
    
  }




  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
body{
	line-height: 1.5;
	font-family: 'Poppins', sans-serif;
}
*{
	margin:0;
	padding:0;
	box-sizing: border-box;
}
.container{
	max-width: 1170px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
  margin-left: 400px;
}
ul{
	list-style: none;
}
.footer{
	background-color: #24262b;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #e91e63;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}


/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}

footer{
  position:relative;
}

</style>
   
</body>

</html>


<?php

include 'config.php';
$resim_al=mysqli_query($baglan, "SELECT*FROM urunler");
    echo '<table border="0">';
    echo '<br><h1 style="color:#222; font-size:40px; text-align:center;">Ürünlerimiz</h1><hr>';
    while($kayit=mysqli_fetch_array($resim_al)){
        echo '<tr>';
        echo '<td><img src="'.$kayit["urun_resmi"].'" width="250" height="250"></td>';
        echo '<td width="300px"><p>Ürün Adı:</p>'.$kayit["urun_adi"].'</td>';
        echo '<td><p>Stok:</p>'.$kayit["stok"].'</td>';
        echo '</tr>';
    }
    echo '</table>';

?>
<html>
<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Biz</h4>
  	 			<ul>
  	 				<li><a href="about.php">hakkımızda</a></li>
  	 				<li><a href="HomePage3.php">ürünlerimiz</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Yardım Alın</h4>
  	 			<ul>
  	 				<li><a href="contact.php">İletişim</a></li>				
  	 			</ul>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>
  </html>