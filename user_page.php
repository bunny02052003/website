<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login.php');
}

?>
<html>
<head>
<title>Future Era</title>
<style>
body{
	margin: 0;
	padding: 0;
}
#navbar{
     background-color:#181818;
     position:fixed;
     top:0;
     left:0;
     width:100%;
     display: flex;
     justify-content: flex-end;
}
.icon{
	 position:fixed;
	 right:0;
	 left: 0;
	 height:40px;
	 padding-top:7px;
	 padding-left:20px;
}
#list{
	 display:flex;
	 flex-direction: row;
}
li{
	 list-style:none;
}
.a{
	 color: white;
	 text-decoration: none;
	 font-size:20px;
	 padding:20px 20px;
	 transition: 1s;
}
.a:hover{
	 color: skyblue;
	 font-weight: bold;
	 letter-spacing: 5px;
}

#about{
	margin: 0;
	padding: 0;
	width: 100%;
	height: 100vh;
	background-image: url(back1.webp);
	background-color:#c0c0c0;
}
.column{
	display: column;
	padding-top: 1px;
	margin: 0;
}
.About{
	display: grid;
	grid-template-columns: repeat(2,1fr);
	align-items: center;
	gap: 90px;
}
h1{
	padding-top:100px;
	padding-left:70px;
	font-size:40;
	color:#004600;
	font-family: Arial, Helvetica, sans-serif;    
}
.aboutinfo{
	padding-left:150px;
	padding-top: 40px;
	margin: auto;
	line-height:1.3;
	font-size:30;
	font-weight: 1;

}

.aboutimage{
	border-radius: 10px;
	width: 90%;
	height: 100%;
	box-shadow: 1px 1px 12px 15px gray;
	transition: 1s;
	cursor: pointer;
	overflow: hidden;
	background-color: gray;
	transition: 3s;
}
.aboutimage:hover{
	transform: scale(1.1);
	box-shadow: 1px 1px 12px 15px black;
	background-color: black;
}
	

.footer{
	display: grid;
	grid-template-columns: repeat(4,1fr);
	justify-content: center;
	align-items: center;
	padding-top: 100px;
	padding-left: 70px;
	
}	
.box1{
	height:130px;
	width:300px;
	border-radius:10px;
	transition: 1s;
	cursor: pointer;
	background-color: rgba(	000, 0, 0, 0.9);
	box-shadow: 1px 1px 5px 2px black;
}
	
.box1:hover {
	transform: scale(1.05);
	background-color: #070811;
	box-shadow: 1px 1px 12px 10px gray;

}
.box1 h5{
	color: skyblue;
	font-size: 50px;
	margin: auto;
	padding-top:15px;
	padding-left: 120px;
	letter-spacing: 2px;
	transition: 0.5s ;
}
.box1 h6{
	color: white;
	font-size: 30px;
	margin: auto;
	text-align: center;
	letter-spacing: 1px;
	transition: 0.5s;
}
.box1:hover h5{
	color: white;
	transform: rotateY(360deg);
	letter-spacing: 5px;
}
.box1:hover h6{
	color: skyblue;
	letter-spacing: 3px;
	transform: rotateX(360deg);
}

#Work{
	margin: 0;
	padding: 0;
	padding-top: 10;
	width: 100%;
	height: 120vh;
	background-image: url(back1.webp);
}
.head{
	height:100px;
	width:100%;		
}
.head h1{
	padding-top: 40px;
	font-size: 40px;
	letter-spacing: 5px;
	font-weight: bold;
	color: #004600;
	padding-left: 675px;
	margin-bottom: 0;
}
.hr{
	height:3px;
	width: 90%;
	background-color: black;
	border-radius:5px;	
}
.content{
	display: grid;
	grid-template-columns: repeat(auto-fit,minmax(350px,auto));
	align-items: center;
	gap: 50px 50px ;
	padding: 100px;	
	padding-top: 50px;
}
.row{
	position: flex;
	overflow: hidden;
	border-radius: 8px;
	cursor: pointer;
	box-shadow: 1px 1px 5px 2px black;
	transition: 0.5s;
}
.row:hover{
	transform: scale(1.1);
	box-shadow: 1px 1px 200px 15px gray;
	position: flex;
}
.row img{
	width: 100%;
	transition: 1s ;	
}
.row:hover img{
	transform: scale(1.09);
}
.layer{
	background-color: #070811;
	height: 50px;
	text-align: center;	
	overflow: hidden;
	color: white;
	font-size: 25px;
	padding-bottom: 30px;
	letter-spacing: 2px;
	text-transform: uppercase;
	font-weight: bold;
	text-decoration: none;
}
.row:hover .caption{
	color: #070811;
	letter-spacing: 8px;
}
.row:hover .layer{
	background-color: white;
}


.project1{
	margin: 0;
	padding-top: 10;
	width: 100%;
	height: 100vh;
	background-color: #E8E8E8;
}

.head1{
	height:90px;
	width:90%;
	margin-left: 85px;
	padding-bottom: 60px;
	border-bottom: 3px solid black;
}

.head1 h1{
	padding-top: 90px;
	font-size: 40px;
	letter-spacing: 5px;
	font-weight: bold;
	color: #004600;
	text-align: center;
	
}
.aviumback{
	width: 90%;
	height: 75vh;
	margin: auto;
    display: flex;
    flex-direction: wrap;
    align-items: center;
    justify-content: space-between;
	
}
.aviuminfo{
	text-align: center;
	font-size: 25px;
	margin-left: 100px;
	letter-spacing: 2px;
	height: 80%;
	width: 40%;
	font-family:"Antonio", sans-serif;
}
.aviuminfo h3{
	color: #004600;
	font-weight: 800;
	text-transform:uppercase;
	letter-spacing: 2px;
}
.infospace{
	margin-left: 30px;
	display: flex;
    flex-direction: wrap;
    align-items: center;
	width: 90%;
	margin-bottom:10px;
    justify-content: space-between;
	border-bottom: 1px solid black;
}
.left{
   margin-left: 30px;
   font-weight: bold;
   font-weight: 100;
}
.right{
   margin-right: 40px;
   font-weight: bold;
   
}
.avium_auto{
	margin-right: 50px;
}
.avium_auto img{
	width: 600px;
	height: 60%;
	margin-top: 50px;
	border-radius: 10px;
	box-shadow: 1px 1px 100px 5px black;
}
.kish_auto{
	margin-right: 50px;
}
.kish_auto img{
	width: 600px;
	height: 60%;
	margin-top: 50px;
	border-radius: 10px;
	box-shadow: 1px 1px 100px 5px black;
}






#gallery{
	margin: 0;
	padding: 0;
	padding-top: 10;
	width: 100%;
	height: 110vh;	
	background-image: url(back1.webp);
}
.tour{
	font-size:40px;
	font-weight: bold;
	text-align: center;
	letter-spacing: 5px;
	padding-top: 60px;
	text-transform: uppercase;
	margin-bottom: 20px;
}
 .hrr{
	height: 3px;
	width: 90%;
	background-color: black;
	border-radius: 5px;
}
.framelayer{
	height: 60vh;
	display: flex;
	flex-direction: row;
    padding-top: 80px;	
	justify-content: center;
	align-items: center;
	
}
.imageframe{
	padding: 50px;
	padding-left: 20px;
	padding-right: 0px;
}
.mySlides{
	display: none;
	width:1000px;
	height: 550px;
	border-radius: 20px;
	box-shadow: 1px 1px 100px 10px black;
	margin: auto;
	
}
.prevbtn{
	width: 150%;
	height: 60%;
	background:#13162b;
	font-size: 20px;
	font-weight: bold;
	color:white;
	cursor: pointer;
	border-radius: 8px;
	box-shadow: 1px 1px 5px 2px black;
    transition: 1s;	
}

.nextbtn{
	
	width: 150%;
	height: 60%;
	background:#13162b;
	font-size: 20px;
	font-weight: bold;
	color:white;
	cursor: pointer;
	border-radius: 8px;
	box-shadow: 1px 1px 5px 2px black;
	transition: 1s;	
}

.prevbtn:hover{
	background: skyblue;
	box-shadow: 1px 1px 16px 10px gray;
}

.nextbtn:hover{
	background: skyblue;
	box-shadow: 1px 1px 16px 10px gray;
}



#contact{
	margin: 0;
	padding: 10;
	width:98.7%;
	height: 100vh;
	background-color:#c0c0c0;
	background-image: url(back1.webp);
}
.tour1{
	font-size:40px;
	font-weight: bold;
	text-align: center;
	letter-spacing: 5px;
	padding-top: 90px;
	text-transform: uppercase;
	margin-bottom: 20px;
}

.container {
  max-width: 85%;
  margin-left: 140px;
  margin-top: 50px;
  background-color: #13162b;
  border-radius: 10px
  padding-bottom: 150px;
  box-shadow: 1px 1px 5px 2px black;
}

.roww  {
   display: flex;
   flex-direction: wrap;
   align-items: center;
   justify-content: space-between;
   overflow: hidden;
   border-radius: 10px;
   cursor: pointer;
   box-shadow: 1px 1px 5px 2px black;
}


.contact-info-item {
  display: flex;
  padding-left: 130px;
  padding-top: 30px;
}

.contact-info-content h4 {
  color: skyblue;
  font-size: 40px;
  margin-bottom: 0px;
  letter-spacing: 1px;
}
.maplink{
text-decoration: none;}

.contact-info-content p { 
  color: white;
  font-size:25px;
  margin-top: 0px;

}


.footerr{
	display: grid;
	grid-template-columns: repeat(2,1fr);
	gap: 40px;
	margin-right: 80px;
	justify-content: center;
	align-items: center;

}	

.box11{
	height:130px;
	width:300px;
	border-radius:10px;
	background-color: #13162b;	
	transition: 1s;
	cursor: pointer;
    box-shadow: 1px 1px 5px 0px white;
}
	
.box11:hover{
	transform: scale(1.05);
	background-color: white;
	box-shadow: 1px 1px 10px 5px white;

}
.box11 h6{
	color: skyblue;
	font-size: 30px;
	margin: auto;
	padding-top:0;
	letter-spacing: 2px;
	text-align: center;
}
.box11:hover h6{
	color: #070811;
	letter-spacing: 5px;
}
.imagee{
	height: 50px;
	width: 50px;
    transition: 1s;
	
}
.box11:hover .imagee{
    transform: rotateY(720deg);	
}
.imgg{
	padding: 20px;
	padding-left: 120px;
	padding-bottom: 10px;
}
.social{
	text-decoration: none;
}
.socialmedia h2{
	font-size: 35px;
	color: skyblue;
    text-align: center;
	letter-spacing: 3px;
	text-transform: uppercase;
	margin-right: 80px;
	margin-bottom: 50px;
	padding-bottom: 20px;
	border-bottom: 3px solid white;
}

.location{
	margin: 0;
	padding: 10;
	width:98.7%;
	height: 55vh;
	background-color:#c0c0c0;
	background-image: url(back1.webp);
	justify-content: center;
	align-items: center;
}
iframe{
	width: 100%;
	height: 400px;
    border-radius: 10px;
    margin-bottom: 30px;
    box-shadow: 1px 1px 10px 5px black;
}

</style>
</head>
<body>
<nav id="navbar">
<a href="#"><img src="log.ico" class="icon"></a>
<ul id="list">
<li><a href="#about" class="a">ABOUT</a></li>
<li><a href="#work" class="a">PROJECTS</a></li>
<li><a href="#gallery" class="a">GALLERY</a></li>
<li><a href="#contact" class="a">CONTACT</a></li>
<li><a href="logout.php" class="a">LOGOUT</a></li>
</ul>
</nav>

<section id="about" >
<div class="column">
  <div class="headline">
   <h1>LUXURY OF A HOME,<br>CONVENIENCE OF A CONSTRUCTION..!</h1>
  </div> 
  <div class="About">
    <div>
      <p class="aboutinfo">Luxury meets convenience in our futuristic & beautiful residences.
         Experience the comfort and privacy of a luxurious home, complemented by the modern amenities
		 and hassle-free living of an upscale apartment.
         Indulge in elegant finishes, spacious interiors, and personalized services, creating a refined 
		 lifestyle that redefines your expectations.Welcome to a new level of future era living.
		 </p>
    </div>
    <div class="inner">
	
        <img src="loo.png" class="aboutimage" height="350px" width="600px" >
    </div>
  </div>
  <div class="footer">
    <div class="box1"><h5>10+</h5><div class="textdiv"><h6 >Architects</h6></div></div>
	<div class="box1"><h5>12+</h5><h6 >Civil Engineers</h6></div>
    <div class="box1"><h5>15+</h5><h6 >Junior Engineers</h6></div>
	<div class="box1"><h5>80+</h5><h6>Workers</h6></div>
  </div>
</div>
 </section>



<section id="work" class="Work">
<div class="head">
<h1 >OUR PROJECTS</h1>
<hr class="hr">
</div>
<div class="content">

<div class="row">
<img src="6.jpg" class="projectimg" height="275px">
<div class="layer" >
<h5 class="caption" id="caption"> Avera</h5>
</div>
</div>

<div class="row">
<a href="#1">
<img src="p8.jpg" class="projectimg" height="275px"></a>
<div class="layer" >
<h5 class="caption" id="caption">Kishkindha</h5>
</div>
</div>

<div class="row">
<a href="#2">
<img src="6.png" class="projectimg" height="275px"></a>
<div class="layer" >
<h5 class="caption" id="caption">Avium</h5>
</div>
</div>

<div class="row">
<img src="p7.jpg" class="projectimg" height="275px">
<div class="layer" >
<h5 class="caption" id="caption">Suraj Epitom</h5>
</div>
</div>

<div class="row">
<img src="p2.jpeg" class="projectimg" height="275px">
<div class="layer" >
<h5 class="caption" id="caption"> Vennala Restro</h5>
</div>
</div>



<div class="row">
<img src="4.jpg"  class="projectimg" height="280px">
<div class="layer" >
<h5 class="caption" id="caption">Green Mastro</h5>
</div>
</div>

</div>



</section>


<section class="project1" id="2">
<div class="head1">
<h1 >PROJECT AVIUM - APARTMENT PLAN</h1>
</div>
<div class="aviumback">
<div class="aviuminfo">
<h3> avium floor plan</h3>
<div class="infospace">
<div class="left"><p>Blocks</p></div>
<div class="right"><p>2</p></div>
</div>
<div class="infospace">
<div class="left"><p>Floor Per Blocks</p></div>
<div class="right"><p>4</p></div>
</div>
<div class="infospace">
<div class="left"><p>Units Per Floor</p></div>
<div class="right"><p>1</p></div>
</div>
<div class="infospace">
<div class="left"><p>Each Unit Area</p></div>
<div class="right"><p>1900 Sft.</p></div>
</div>
<div class="infospace">
<div class="left"><p>Price</p></div>
<div class="right"><p>1.10Cr+</p></div>
</div>
</div>
<div class="aviumauto">
  <div class="avium_auto">
   <img class="interior" name="slide" width=100% height=100%>
  </div>
</div>
</div>
</section>
<script>
var i= 0;
var images= [];
var time= 2000;

images[0]= 'plan.png';
images[1]= '12.png';
images[2]= '10.png';
images[3]= '11.png';
images[4]= '8.png';
images[5]= '9.png';
images[6]= '10.png';

function changeImg()
{
	document.slide.src = images[i];
	if(i<images.length-1){
		i++;
	}else{
		i=0;
	}
	setTimeout("changeImg()",time);
}
window.onload = changeImg;
		


</script>





<section id="gallery" class="Gallery">
<div class="photovideotour">
<h1 class="tour">Photo - Video Tour</h1>
<hr class="hrr"></hr>
</div>
<div class="framelayer">
<div>
  <button class="prevbtn" onclick="plusDivs(-1)">Prev<br>&#10094</button>
 </div>
<div class="imageframe">
  <img class="mySlides" src="7.jpg">
  <img class="mySlides" src="2.jpg">
  <img class="mySlides" src="p8.jpg">
  <img class="mySlides" src="3.png">
  <img class="mySlides" src="5.png">
  <img class="mySlides" src="13.png">
  <img class="mySlides" src="2.png">
  <img class="mySlides" src="10.png">
  <img class="mySlides" src="11.png">
  <img class="mySlides" src="12.png">

</div>
<div>
 <button class="nextbtn" onclick="plusDivs(1)">Next<br>&#10095</button>
</div>
</div>

</section>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

 <section id="contact" class="Contact">
     <h1 class="tour1">Contact Us</h1>

 <div class="container">
      <div class="roww">
        <div class="contact-info">
		<div class="colooor">
          <div class="contact-info-item">        
            <div class="contact-info-content">
              <h4>Address:</h4>
			  <a class="maplink" href="#locate">
              <p>Plot No 27, 28 Vaishnaoi Enclave,
			  <br/> Petbasheerabad Village Kompally Hyderabad,
			  <br/>Telangana,500067.</p></a>
            </div>
          </div>
          <div class="contact-info-item">            
            <div class="contact-info-content">
              <h4>Phone:</h4>
              <p>+91 9966 906 906</p>
            </div>
          </div>
          <div class="contact-info-item">
            <div class="contact-info-content">
              <h4>Email:</h4>
			  <a class="maplink" href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSBmlrnQdtWQsMzmrxchxjpKGxXWlZJkZNDstJkCrVtdGJgvNhvHdGwljqXxfjHtKMdStJvW">
             <p>contact@futeragroup.com</p>
			 </a>
            </div>
          </div>
        </div>
		</div>
		<div class="socialmedia"> <h2 > Social media</h2>
      <div class="footerr">
	 <div class="box11">
	  <a href="https://www.instagram.com/futeragroup/" class="social">
       <div class="box11">
	    <div class="imgg"> 
	     <img src="insta.png" class="imagee">
	    </div>
	     <h6 >Instagram</h6>
	    </div>
	  </a>
	 </div>
	 	 <div class="box11">
	  <a href="https://www.youtube.com/@Futeragroup" class="social">
       <div class="box11">
	    <div class="imgg"> 
	     <img src="you.png" class="imagee">
	    </div>
	     <h6 >YouTube</h6>
	    </div>
	  </a>
	 </div>
	 	 <div class="box11">
	  <a href="https://www.facebook.com/people/Futera-Group/100092867637067/" class="social">
       <div class="box11">
	    <div class="imgg"> 
	     <img src="fb.png" class="imagee">
	    </div>
	     <h6 >Facebook</h6>
	    </div>
	  </a>
	 </div>
	 	 <div class="box11">
	  <a href="https://www.linkedin.com/company/futera-group/about/" class="social">
       <div class="box11">
	    <div class="imgg"> 
	     <img src="linked.png" class="imagee">
	    </div>
	     <h6 >LinkedIn</h6>
	    </div>
	  </a>
	 </div>
	</div>
      </div>
    </div>

    
</section>
<section id="locate"class="location">
	<div class="iframee">
	<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d310
	4.8368963774255!2d78.4920263755859!3d17.522900216636174!2m3!1f0!2f0!3f0!
	3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTfCsDMxJzIyLjMiTiA3OMKwMjknMzcuNiJF!5e
	0!3m2!1sen!2sin!4v1687271338403!5m2!1sen!2sin" >
	</iframe>
	</div>
 </section>


</body>
</html>