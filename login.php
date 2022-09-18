<?php

session_start();

if(isset($_POST["girisbuton"]))
{

    $_SESSION["email"] = $_POST["email"];
    $_SESSION["sifre"] = $_POST["sifre"];
    /*homepage'i homepage2 yaptık*/header('Location: HomePage2.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/921ef5d521.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <title>Giriş Yap</title>
</head>
<body>

<style>
    body{
    margin: 0;
    padding: 0;
    font-family: Roboto;
    background-repeat: no-repeat;
    background-size: cover;
    background: linear-gradient(120deg,#007bff,#d0314c);
    height: 100vh;
    overflow: hidden;
}

.center{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 29vw;
    background: white;
    border-radius: 10px;
}

.center h1{
    text-align: center;
    padding: 0 0 20px 0;
    border-bottom: 1px solid silver;
}

.center form{
    padding: 0 40px;
    box-sizing: borde-box;
}

form .txt_field{
    position: relative;
    border-bottom: 2px solid #adadad;
    margin: 30px 0;
}

.txt_field input{
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 16px;
    border: none;
    background: none;
    outline:none;
}

.txt_field label{
    position: absolute;
    top: 50%;
    left: 30px;
    color: #adadad;
    transform: translate(-50%);
    font-size: 16px;
    pointer-events: none;
}

.txt_field span::before{
    content: '';
    position: absolute;
    top: 40px;
    left: 0;
    width: 0 px;
    height: 2px;
    background: #2691d9;
    transition: .5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~label{
    top: -5px;
    color: #2691d9;
}

.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
    width: 100%;
}

.pass{
    margin: -5px 0 20px 5px;
    color: #a6a6a6;
    cursor: pointer;
}

.pass:hover{
    text-decoration: underline;
}

input[type="Submit"]{
    width: 100%;
    height: 50px;
    border: 1px solid;
    border-radius: 25px;;
    font-size:18px;
    font-weight: 700;
    cursor: pointer;
}

input[type="Submit"]:hover{
    background: #2691d9;
    color:#e9f4fb;
    transition: .5s;
}

.signup_link{
    margin: 30px 0;
    text-align: center;
    font-size: 16px;
    color: #666666;
}

.signup_link a{
    color: #2691d9;
    text-decoration: none;
}

.signup_link a:hover{
    text-decoration: underline;
}

.HomeAbout{
    width: 100vw;
    height: 25vh;
}






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




 
  
</style>

<div class="topnav">
    <a href="HomePage3.php">Anasayfa</a>
    <!--  <a href="#product">Ürünler</a>  -->
    <a href="about.php">Hakkımızda</a>
    <a href="contact.php">İletişim</a>
    <a class="active" href="login.php">Giriş Yap</a>
    <input type="text" placeholder="Parça arayın..">  
    <i id="searchicon" class="fas fa-search"></i> 
</div>

<div class="container">
    <div class="center">
        <h1>Giriş Yap</h1>
        <form method="POST" action="login.php">
            <div class="txt_field">
                <input type="e-mail" name="email" required/>
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="password" name="sifre" required/>
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" name="girisbuton" id="girisbuton" value="Giriş Yap">
            <!--<input name="submit" type="Submit" value="Giriş yap"/>
            <a href="HomePage.php"> salak merve </a>-->
            <div class="signup_link">
                Hesabın yok mu? <a href="register.php">Kayıt Ol</a>
            </div>
        </form>
    </div>
</div>
</body>

</html>


