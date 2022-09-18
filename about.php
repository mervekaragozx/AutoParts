<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="Online oto yedek parça">
    <meta name="description" content="Online oto yedek parçacınız.">
    <title>Hakkımızda</title>
    
    
</head>

<body>

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


#about{
  background-color: #f8f9fa;
  padding: 50px;
  text-align: center;
  text-transform: capitalize;
  font-weight: 600;
}

h3{
  font-size: 55px;
  color: #003666;
  font-weight: 600;
}

#container{
  width: 1200px;
  height: auto;
  margin: auto;
}

#sol{
  float: left;
  border-right: 3px solid #445c6e;
  font-size: 30px;
  width: 400px;
  color:#445c6e;
}

#h5sol{
  line-height: 1.6;
  font-size: 25px;
  font-weight:600;
}

#h5sol, #sag{
  margin:0;
  padding:0;
  margin-top: 20px;
}

span{
  font-size: 50px;
  margin-right: 7px;
  line-height: 42px;
  color: #003666;
  font-weight: 600;
  float: left;
}

#sag{
  float: right;
  width:750px;
  color: #999;
  text-align: center;
  letter-spacing: 1px;
  font-size: 15px;
  line-height: 1.5;
  font-weight: 100;
}

.img-fluid{
  max-width: 100%;
  height: auto;
}

.mt100{
  margin-top:100px;

}

#pson{
  color: #999;
  letter-spacing: 1px;
  font-size: 15px;
  line-height: 1.5;
  margin-top: 30px;
  font-weight: 100;
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





</style>
    <div class="topnav">
        <a href="HomePage3.php">Anasayfa</a>
        <!--  <a href="#product">Ürünler</a>  -->
        <a class="active" href="about.php">Hakkımızda</a>
        <a href="contact.php">İletişim</a>
        <a href="login.php">Giriş Yap</a>
        <input type="text" placeholder="Parça arayın..">  
        <i id="searchicon" class="fas fa-search"></i>  
      </div>
      

    <section id="about"> 
      <h3>Hakkımızda</h3>

      <div id="container">

        <div id="sol">
          <h5 id="h5sol">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h5>
        </div>

        <div id="sag">
          <span>L</span>
          <p>orem ipsum dolor sit, amet consectetur adipisicing elit. Non harum delectus cum molestiae incidunt? Alias porro adipisci incidunt unde enim sunt libero sed veritatis voluptas id temporibus magni voluptates placeat deleniti neque autem dignissimos exercitationem.</p>
        </div>
        
        <img src="https://i.pinimg.com/originals/97/29/22/972922acebaec4846eb4ac57bce35b3c.jpg" alt="fotoğraf" clas="img-fluid mt100">

        <p id="pson">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt obcaecati quaerat porro magnam pariatur ab quas, voluptatum saepe quo dicta impedit cumque vel non eaque consequuntur optio nobis tempore blanditiis!</p>
      </div>
    </section>
</body>

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