<?php
include "connect.php";
//Adds one to the counter
error_reporting(E_ERROR | E_PARSE);
mysql_query("UPDATE visitors SET views = views + 1");
?>
<script>
var audio=new audio('audio/wellcome to graha durastti seva.wav');
</script>
<?php
//Retrieves the current count
//$count = mysql_fetch_row(mysql_query("SELECT * FROM visitors"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     
    <title>HOME</title>
   <link rel="shortcut icon" type="image/png" href="img/df.png">
   <link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/sendbtn.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles project css file -->
    <link href="css/style.css" rel="stylesheet">
    

    
<style>
@import url('https://fonts.googleapis.com/css?family=Judson');
@import url('https://fonts.googleapis.com/css?family=Lobster');
@import url('https://fonts.googleapis.com/css?family=Roboto');
@import url('https://fonts.googleapis.com/css?family=Oleo+Script');
@import url('https://fonts.googleapis.com/css?family=Arapey');
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');
@import url('https://fonts.googleapis.com/css?family=Berkshire+Swash|Carter+One|Concert+One');
 
.js div#preloader 
{ 
position: fixed; 
left: 0;
top: 0;
z-index: 999; 
width: 100%;
height: 100%;
overflow:hidden;
background:#ffffff url('img/loading.gif')no-repeat center center; 
}
#loadertext{
margin-top:14%;
margin-left:45%;
font-family: 'Lobster', cursive;
font-size:23px;
font-weight:bold;
letter-spacing:3px;
text-shadow:2px 2px 16px rgba(0,0,0,0.2);
}
/*===================start of home =======================*/
#header
{
padding:0px 0px;
height:85px;
transition:all 0.7s;
background-image:url('img/headbag.png');
background-size:cover;
background-repeat:no-repeat;
}
#logo
{
margin-left:20px;
margin-right:90px;
margin-top:-6px;
width:200px;
height:90px;
transition:all 0.5s;
}
a
{
font-size:23px;
font-weight:900;
color:#fff;
text-decoration:none;
}
         
#home
{
height:100vh;
width:100%;
text-align:center;
font-family: 'Judson', serif;
font-size:25px;
line-height:10vh;
background-image:url('img/color 2.jpg');
background-size:cover;
transition:all .7s;
user-select:none;
}
.hrs
{
font-family: 'Carter One', cursive;
text-transform:capitalize;
font-weight:900;
font-size:75px;
padding-top:14%;
margin-right:4%;
color:#fff;
animation-delay:0.8s;
text-shadow:4px 4px 8px rgba(0,0,0,0.4);
user-select:none;
}
.hrs1{
font-family: 'Lobster', cursive;
text-transform:capitalize;
font-weight:200;
font-size:25px;
color:#fff;
margin-right:4%;
animation-delay:0.8s;
text-shadow:4px 4px 8px rgba(0,0,0,0.4);
animation-delay:0.9s;
user-select:none;
}
.btn
{
font-family:'Montserrat', sans-serif;
font-size:100%;
font-weight:400;
color:#fff;
text-transform:uppercase;
text-decoration:none;
border:14px double #CBDFD6;
padding: 72px 20px;
border-radius:50%;
transition:all 0.7s;
animation-delay:1s;
}
 
.btn:hover{
color:#fff;
border:12px solid #fff;
cursor:pointer;
box-shadow:4px 4px 6px rgba(0,0,0,0.4);
}
 
#fab
{
  width: 55px;
  height: 55px;
  border-radius: 50%;
  background:teal;   
  position: fixed;
  bottom: 30px;
  right: 30px;
  cursor: pointer;
  box-shadow: 2px 4px 6px rgba(0,0,0,0.4);
}
 .cust
{
  color:#D2D3D5;
  position: absolute;
  top:2px;
  display: block;
  bottom:15px;
  left: 13px;
  right:15px;
}
img {
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-user-drag: none;
    user-drag: none;
}
/*===================End of home =======================*/
/*===================start of get started==================*/
#box1
{
height:100vh;
width:100%;
text-align:center;
font-family:arial block;
font-size:60px;
background-color:#eee;
position:relative;
z-index:1;
user-select:none;
}
.gifs
{
padding:180px 0px;
user-select:none;
}
#imgi{
transition: transform .9s;
}
#imgi:hover {
     cursor:pointer;
    -ms-transform: scale(1.5);  
    -webkit-transform: scale(1.5);  
    transform: scale(1.5); 
}
.text
{
font-family: 'Roboto', sans-serif;
font-weight:900;
margin-top:-9%;
font-size:20px;
list-style:none;
line-height:33px;
color:rgba(0,0,0,0.5);
user-select:none;
}
 
 
 
.wrap {
  position: absolute;
  overflow: hidden;
  top: 15%;
  right: 10%;
  bottom: 85px;
  left: 10%;
  padding: 20px 0px;
  display: block;
  border-radius: 4px;
  transform: translateY(20px);
  transition: all 0.7s;
  visibility: hidden;
}
.wrap:before {
  position: absolute;
  width: 1px;
  height: 1px;
  background-image:url('img/feedback.png');
background-size:cover;
  content: "";
  bottom: 10px;
  left: 50%;
  top: 95%;
  color: #fff;
  border-radius: 50%;
  -webkit-transition: all 600ms cubic-bezier(0.215, 0.61, 0.355, 1);
  transition: all 600ms cubic-bezier(0.215, 0.61, 0.355, 1);
}
.wrap.active {
  display: block;
  visibility: visible;
  box-shadow: 4px 4px 16px rgba(0,0,0,0.4),4px 4px 16px rgba(0,0,0,0.4);
  transition: all 600ms;
  transform: translateY(0px);
  transition: all 0.5s;
}
.wrap.active:before {
  height: 2000px;
  width: 2000px;
  border-radius: 50%;
  top: 50%;
  left: 50%;
  margin-left: -1000px;
  margin-top: -1000px;
  display: block;
  -webkit-transition: all 600ms cubic-bezier(0.215, 0.61, 0.355, 1);
  transition: all 600ms cubic-bezier(0.215, 0.61, 0.355, 1);
}
.wrap .content {
  opacity: 0;
}
.wrap.active .content {
  position: relative;
  z-index: 1;
  opacity: 1;
  transition: all 600ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}
.wrapcontent1
{
color:#fff;
list-style:none;
line-height:30px;
font-size:20px;
font-weight:bold;
padding:0px 0px;
font-family: 'Roboto', sans-serif;
}
 
h5.button
 {
padding:11px 14px;
  width:50px;
  height:50px;
  outline: none;
  border-radius: 50%;
  background:teal;
  color: #fff;
  font-size: 15px;
  display: block;
  left: 50%;
  top: auto;
 cursor:pointer;
  margin-top:-10px;
  margin-left:0%;
  transition: transform 0.25s;
 box-shadow:none;
}
h5.button:hover {
  text-decoration: none;
}
h5.button.active {
  transform: rotate(135deg);
  transition: transform 0.5s;
}
/*===================End of get started==================*/
/*===================start of About US==================*/
#box2
{
height:100vh;
width:100%;
text-align:center;
line-height:0vh;
background-image:url('img/pln.jpg');
background-size:cover;
background-repeat:no-repeat;
user-select:none;
}
 
 
.wwa
{
 font-family: 'Josefin Sans', sans-serif;
font-weight:900;
color:#fff;
margin-left:50%;
margin-top:-3%;
list-style:none;
line-height:4vh;
font-size:25px;
}
 
.wwd
 {
 font-family: 'Josefin Sans', sans-serif;
font-weight:900;
 color:#fff;
margin-right:50%;
margin-top:-13%;
list-style:none;
line-height:5vh;
font-size:25px;
}
 
.wia
{
padding:8%; 
font-family: 'Josefin Sans', sans-serif;
font-weight:900;
color:#fff;
list-style:none;
line-height:4vh;
font-size:25px;
 }
 
/*===================End of About US==================*/
/*===================start of portfolio==================*/
#box3
{
height:100vh;
width:100%;
text-align:center;
font-family:arial block;
background:#eee;
font-size:20px;
user-select:none;
}
.card {
  background:#fff;
  display: inline-block;
  height: 400px;
  margin: 1rem;
  width: 350px;
  box-shadow:4px 4px 8px rgba(0,0,0,0.4);
 transition:all 0.5s;
}
.card:hover{
box-shadow:0px 10px 16px rgba(0,0,0,0.4);
}
 #image
{
margin-top:-30%;
width:150px;
height:150px;
border-radius:50%;
border:8px solid #eee;
}
 #image:hover{
 transform: rotate(360deg);
  transition: transform 1s;
}
.color
{
height:40%;
width:100%;
}
.pname{
font-family: 'Lobster', cursive;
font-weight:900;
font-size:20px;
}
.skills
{
 font-family: 'Josefin Sans', sans-serif;
 font-weight:600;
 font-size:17px;
}
.cust3{
color:teal;
margin-left:15%;
}
.cust1{
 color:teal;
margin-left:4%;
}
.cust1:hover {
    transform: scale(1.5); 
}
.cust2:hover {
    transform: scale(1.5); 
}
.cust3:hover {
    transform: scale(1.5); 
}
.cust2
 {
color:teal;
margin-left:-80%;
}
.arunlinks{  
  width: 55px;
  height: 55px;
  border-radius: 50%;
  background:#e91e63; 
  cursor: pointer;
  margin-right:1%;
 box-shadow:0px 9px 36px rgba(0,0,0,0.4);
}
#gangulinks
{
margin-right:1.8%;
margin-top:-4.8%;
margin-left:60%;
}
 
#viveklinks
{
margin-right:1.8%;
margin-top:-4.6%;
margin-left:37%;
}
.fb {
background:#46629E;
}
.twit
{
background:#1DA1F2;
}
.email
{
 
}
.youtube1
{
background:#DB4437;
}
.youtube
{
margin-right:58%;
background:#DB4437;
}
.custl
{
 color:#fff;
   position: absolute;
  top:15px;
  display: block;
  bottom:0;
  left: 15px;
  right:15px; 
}
/*===================End of portfolio==================*/
/*=================== start of  feedback==================*/
#box4
{
height:100vh;
width:100%;
font-family:arial block;
background-image:url('img/feedback.png');
background-size:cover;
background-repeat:no-repeat;
/*background:#00B285; #62BFF5*/
overflow: hidden;
margin: 0;
display: flex;
align-items: center;
justify-content: center;
user-select:none;
}
form{
width:80%;
border:0px;
box-shadow:none;
}
.feedtext
{
color:#fff;
font-family: 'Lobster', cursive;
letter-spacing:2px;
text-shadow:2px 2px 6px rgba(0,0,0,0.4);
font-size:50px;
margin-left:30%;
margin-top:-4%;
}
.cda
{
font-size:25px;
color:#fff;
font-family: 'Lobster', cursive;
letter-spacing:2px;
text-shadow:2px 2px 4px rgba(0,0,0,0.4);
margin-left:39%;
 
}
input[type="text"]
{
margin-left:17%;
width:260px;
margin-top:40px;
font-size:20px;
font-weight:bold;
font-family:arial;
background:#fff;
color:rgba(0,0,0,0.7);
border-radius:3px;
padding:12px 29px;
border-bottom:#fff;
border:2px solid #fff;
outline:none;
transition:all 0.5s;
box-shadow:2px 4px 6px rgba(0,0,0,0.4); 
}
 
 
input[type="email"]
{
width:260px;
 margin-left:1%;
font-size:20px;
font-weight:bold;
 font-family:arial;
color:rgba(0,0,0,0.7);
border-radius:3px;
padding:12px 29px;
background:#fff;
border-bottom:#fff;
border:2px solid #fff;
outline:none;
transition:all 0.5s;
box-shadow:2px 4px 6px rgba(0,0,0,0.4); 
}
 
 
 
textarea
{
font-size:20px;
font-weight:bold;
 font-family:arial;
 color:#fff;
border-radius:2px;
padding:40px 15px;
border-bottom:#fff;
border:2px solid #fff;
margin-top:35px;
outline:none;
transition:all 0.5s;
height:20%;
box-shadow:1px 1px 3px rgba(0,0,0,0.4);
}
textarea:hover
{
box-shadow:1px 1px 26px rgba(0,0,0,0.4);
}
.view{
	 margin-left:22%;
	 margin-top:-60px;
	 padding-top:14px;
     font-size: 22px;
     font-family: 'Lobster', cursive;
     font-weight: 300;	 
 }
.feed{
	 border:1px solid #ccc;	
	 width:200px;
	 height:60px;
	 text-align:center;
	 font-weight:bold;
	 font-family:sans-serif;
	 fon-size:13px;
	 margin-left:23%;
	 margin-top:-60px;
	 padding-top:10px;
	 box-shadow:0px 4px 8px rgba(0,0,0,0.4);
	 background-color:#fff;
	 color:deeppink;
}
/*=================== start of feedback==================*/
/*=================== start of Contact us ==================*/
#box5
{
height:100vh;
width:100%;
background:#eee;
color: #212121;
user-select:none;
}
 
.subcribe_form input[type="text"]{
    width: 50%;
    padding: 15px;
    border: none;
    background: #fff;
    margin-left:15%;
   margin-top:-10%;
    border-radius: 6px 0px 0px 6px;
   outline: none;
   font-size:20px;
  box-shadow:0px 2px 6px rgba(0,0,0,0.4); 	
}
.subcribe_form input[type="text"]:hover{
  box-shadow:4px 5px 16px rgba(0,0,0,0.4); 
}
 .subcribe_form input[type="submit"]{
    width: 20%;
    padding: 17px;
    background: #FF3366;
    border-radius:0px 7px 7px 0px;
    border: 0px transparent;
   box-shadow:2px 2px 6px rgba(0,0,0,0.4);
   color: #fff;
   outline: none;
    font-size:20px;
   font-weight:bold;
   transition:all .7s;
}
 input[type="submit"]:hover
{
box-shadow:4px 4px 26px rgba(0,0,0,0.4);
cursor:pointer;
}
.contact{
   margin-top:-5%;
letter-spacing: 2px;
 font-family: 'Lobster', cursive;
text-align:center;
width:100%;
height:100px;
text-shadow: 2px 2px 6px  rgba(0,0,0,0.4);
font-weight: 600;
font-size:50px;
color: #636363;
}
.cont:hover{
 transform: rotate(360deg);
  transition: transform 1s;
}
.cont1:hover{
 transform: rotate(360deg);
  transition: transform 1s;
}
.contactus{
margin-left:320px;
margin-top:20px;
color:#004d40;
font-weight:900;
cursor:pointer;
}
.copyright_text{
margin-left:540px;
margin-top:70px;
font-size:20px;
font-weight:900;
}
.cont1{
color:red;
}
.subs{
	font-size:30px;
	font-weight:bold:
	color:$fff;
	box-shadow:4px 4px 26px rgba(0,0,0,0.4);
	width:20%;
	height:100px;
	text-align:center;
	margin-left:-30px;
	background-color:#8646;
	margin-top:-10px;
	padding:15px;
	
	
}
.subs1{
	padding:15px;
	font-size:30px;
	font-weight:bold:
	color:$fff;
	box-shadow:4px 4px 26px rgba(0,0,0,0.4);
	width:20%;
	height:100px;
	text-align:center;
	margin-left:85%;
    margin-top:-110px;
background-color:#8646;	
}
/*=================== start of Contact us ==================*/
</style>
</head>
 <body onload="sound()">
<!------------------------start of preloader-------------------->
<div class="js"> 
    <div id="preloader">
    <p id="loadertext">Please wait....</p>
</div>
</div>
 <!------------------------End of preloader -------------------->

<!------------------------Navbar -------------------->
                <nav class="mb-4 navbar navbar-expand-lg navbar-dark fixed-top" id="header">
                    <a class="navbar-brand" href="#box3"><img src="img/save.png" id="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#home">HOME<span class="sr-only">(current)</span></a>
                            </li>
     <li class="nav-item">
                                <a class="nav-link" href="CustomerLogin.php">Customer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="WorkerLogin.php">Worker</a>
                            </li>
        <li class="nav-item">
                                <a class="nav-link" href="#box2">AboutUs</a>
                            </li>
        <li class="nav-item">
                                <a class="nav-link" href="#box3">Portfolio</a>
                            </li>
               <li class="nav-item">
                                <a class="nav-link" href="#box4"><i class="fa fa-comments" aria-hidden="true"></i></a>
                            </li>
        <li class="nav-item">
                                <a class="nav-link" href="#box5"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto nav-flex-icons">
                            <li class="nav-item">
                                <a class="nav-link waves-effect waves-light"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link waves-effect waves-light"><i class="fa fa-facebook"></i></a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link waves-effect waves-light"><i class="fa fa-envelope"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
<!-------------------------End of Navbar------------------------->

<!-------------------------start of FAB------------------------->              
<div id="fab" class="animated fadeInUp waves-effect waves-light">
<a href="#home"> <i class="fa fa-angle-up fa-2x cust animated  fadeIn" aria-hidden="true"></i></a>
</div>  
<!-------------------------start of FAB------------------------->    


<!------------------start of home---------------->
<div id="home">

<h1 class="hrs" >GRAHA DURASTTI SEVA </h1>
<p class="hrs1">"maintain your home interiors with good services"</p>
 <a  class="btn animated bounceInDown" href="#box1" onclick= "bleep3.play()">Get Started</a>
</div>

<!------------------End of home---------------->




<!------------------start of  get started---------------->
<div id="box1">
<div class="shadow">
<div class="gifs">
<img id="imgi" src="img/painter.gif"style="width:150px; height:150px;border-radius:50%;box-shadow: 5px 10px 26px rgba(0,0,0,0.4),5px 10px 46px rgba(0,0,0,0.4);">
<img id="imgi"  src="img/plumber1.gif" style="width:150px; height:150px;border-radius:50%;box-shadow: 5px 10px 26px rgba(0,0,0,0.4),5px 10px 46px rgba(0,0,0,0.4);">
<img id="imgi" src="img/carpenter1.gif" style="width:150px; height:150px;border-radius:50%;box-shadow: 5px 10px 26px rgba(0,0,0,0.4),5px 10px 46px rgba(0,0,0,0.4);">
<img id="imgi" src="img/computerrepare.gif" style="width:150px; height:150px;border-radius:50%;box-shadow: 5px 10px 26px rgba(0,0,0,0.4),5px 10px 46px rgba(0,0,0,0.4);">
<img id="imgi" src="img/electrician.gif" style="width:150px; height:150px;border-radius:50%; box-shadow: 5px 10px 26px rgba(0,0,0,0.4),5px 10px 46px rgba(0,0,0,0.4);">
</div>
 
<ul class="text">
<li>Hii, wellcome to Graha Durastti Seva. 'by AVG' we have Developed this site to build up home interior works</li>
<li>with a  team which has an Expirienced Hands well furnished and hard working,  workers</li>
<li>so lets move forword to your home interiors, here we'll provide you five types of</li>
<li>workers thoes people were going to contact you.we gatherd several</li>
<li> workers here like,plumber,carpenter,painterElectrician and</li>
<li> computer repairer. just signUp and contact the workers</li>
</ul>
</div>

<div class='wrap'>
  <div class='content'>
   <h2 class="wrapcontent"style="border-bottom:2px solid #fff;font-size:40px;font-weight:900;color:#fff;text-shadow: 8px 8px 26px rgba(0,0,0,0.4)">Welcome!!!</h2>  
<ul class="wrapcontent1">
<li>Hii,wellcome to Graha Durastti Seva.by 'AVG' we have Developed this site to</li>
<li>build up home interior works with a team which has an Expirienced Hands</li>
<li>well furnished and hard working,workersso lets move forword to your home</li>
<li>interiors, here we'll provide you five types of workers thoes people were painter</li>
<li>going to contact you.we gatherd several workers here like,plumber,carpenter</li>
<li>Electrician and computer repairer. just signUp and contact the workers</li>
<li>if..you are a worker you need to signUp by clicking worker and Register their by</li>
<li>Provinding nessesory Details and too Customer. we have provided option to</li>
<li>Customer that Upload your home interior problem with a respective worker.we</li>
<li>have given you a worker panel their you need to select a worker. and appoint him.</li>
<li>for your home work. and we have also send your problem to respective workers</li>
<li>mobile.worker also have their  inbox and need to agree for Customers </li>
<li>problems and used react for Cutomers problems</li>
</ul>
</div>
</div>
 <h5 class="button"><i class="fa fa-plus fa-2x"></i></h5>
</div>
<!------------------End of get started---------------->




<!------------------start of  About US---------------->
<div id="box2">
<div class="shadow">
<ul class="wia">
<li><h2>What is AVG?</h2></li>
<li><img src="img/save.png"style="width:200px; height:100px"></li>
<li>which is a logo which indicates that names of our </li>
<li>team members hope in future also it'll provide good service</li>
</ul>

<ul class="wwa">
<li><h2>Who we are?</h2></li>
<li>we are a group,we hope to develop more</li>
<li>applications. we are confident about what we do.</li>
<li>we'll produce good service to our customers</li>
</ul>
 
<ul class="wwd">
<li><h2>What we do?</h2></li>
<li>are a team of web developing technology, were</li>
<li>are well growing team, are learning about web</li>
<li>technologies to produce good,quality service</li>
<li>a strong team which has best ui/ux developers</li
<li>Photoshop,logo developing,XD etc</li>
<li>to customers</li>
</ul>
</div>

</div>
<!------------------End of About US---------------->




<!------------------start of portfolio---------------->
<div id="box3">
<br/>
<br/>
<br/>
<br/>
<div class="card card-1">
<img src="img/photo.jpg" class="color">
<img src="img/arun.jpg" id="image">
<div class="pname">
<br/>
<h4>Arun Bannur</h4>
<p  class="skills">Web Developer<br/>Front/Back End & Ui Designer</p>
</div>
<div class="footer">
<hr>
 <i class="fa fa-map-marker cust1"></i>  Rabakavi
<i class="fa fa-phone cust2"></i>  9538571800
</div>
</div>

<div class="card card-2">
 <img src="img/photo.jpg" class="color">
<img src="img/vivek.jpg" id="image">
<div class="pname">
<br/>
<h4>Vivek Siddapur</h4>
<p class="skills">Web Developer<br/>Front/Back End & Ux Designer</p>
</div>
<div class="footer">
<hr>
 <i class="fa fa-map-marker cust1"></i>  Jamakhandi
<i class="fa fa-phone cust2"></i>  9686999190
</div>
</div>

<div class="card card-3">
 <img src="img/photo.jpg" class="color">
<img src="img/gangu.jpg" id="image">
<div class="pname">
<br/>
<h4>Gangappa Chimmad</h4>
<p class="skills">Web Developer<br/>Front/Back End & Ui Designer</p>
</div>
<div class="footer">
<hr>
 <i class="fa fa-map-marker cust3"></i>  Shirol
 <i class="fa fa-phone cust2"></i>  8150828833
</div>
</div>

<div id="arunlinks">
<a class="fb arunlinks waves-effect waves-light"><i class="fa fa-facebook custl"></i></a>
<a class="twit arunlinks waves-effect waves-light"><i class="fa fa-twitter custl"></i></a>
<a class="email arunlinks waves-effect waves-light"><i class="fa fa-envelope custl"></i></i></a>
<a class="youtube arunlinks waves-effect waves-light"><i class="fa fa-youtube custl"></i></a>
</div>

<div id="viveklinks">
<a class="fb arunlinks waves-effect waves-light"><i class="fa fa-facebook custl"></i></a>
<a class="twit arunlinks waves-effect waves-light"><i class="fa fa-twitter custl"></i></a>
<a class="email arunlinks waves-effect waves-light"><i class="fa fa-envelope custl"></i></i></a>
<a class="youtube arunlinks waves-effect waves-light"><i class="fa fa-youtube custl"></i></a>
</div>

<div id="gangulinks">
<a class="fb arunlinks waves-effect waves-light"><i class="fa fa-facebook custl"></i></a>
<a class="twit arunlinks waves-effect waves-light"><i class="fa fa-twitter custl"></i></a>
<a class="email arunlinks waves-effect waves-light"><i class="fa fa-envelope custl"></i></i></a>
<a class="youtube1 arunlinks waves-effect waves-light"><i class="fa fa-youtube custl"></i></a>
</div>
 
</div>
<!------------------End of portfolio---------------->




<!-------------------------start  of feedback---------------->
<div id="box4"> 
<form class="feedback" action="GenralHomePage.php" method="POST" autocomplete="off">
<?php
if(isset($_POST['send']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$review=$_POST['Comment'];
	$date=date("y-m-d");
	$insert=mysql_query("insert into feedback values('null','$name','$review','$date','$email')");
	if(!$insert)
	{
		echo "<script>alert('failed to send your feedback');</script>"; 
	}
	else{
		echo "<script>alert('thank you...!\\n for your feed...!');</script>"; 
	}
}
	?>
<h4 class="feedtext">Leave a comment</h4>
<h4 class="cda">Code < / > by Avg</h4>
 <input type="text" placeholder="Name" name="name" required>
<input type="email" placeholder="Email" name="email">
<textarea name="Comment" id="message" placeholder="your Comment here...! " required></textarea>
<button type="submit" name="send">
  <p class="send">Send</p>
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
    <path id="paper-plane-icon" d="M462,54.955L355.371,437.187l-135.92-128.842L353.388,167l-179.53,124.074L50,260.973L462,54.955z
M202.992,332.528v124.517l58.738-67.927L202.992,332.528z"></path> 
  </svg>
</button>
<a href="sitefeedback.php">
  <p class="feed">View Feedback</p></a>
</form>
</div>
<!-------------------------End of feedback----------------------->





<!-------------------------start  of  contact us---------------->
<div id="box5">                      
 <div class="subcribe_form center-content">

 <form action="GenralHomePage.php" method="POST" autocomplete="off"> 
 <?php 
 if(isset($_POST['sub']))
 {
	 $email=$_POST['email'];
	 $date=date('y-m-d');
	 $insert=mysql_query("insert into subscribers values('null','$email','$date')");
	 
 }
 ?>
 <?php
  $select=mysql_query("select * from subscribers");
  while($r=mysql_fetch_array($select))
  {
	  $sid=$r['sid'];
  }
//? echo "<p class='subs'>$sid</p>";
 // echo "<p class='subs1'>$count[0]</p>";
?>
<h1 class="subs">Subscribers<br><?php echo $sid; ?></h1>
<h1 class='subs1'>Visiters<br><?php echo $count[0]; ?></h1>
<h4 class="contact">Subscribe our Newsletter</h4> 
<input type="text" name="email" placeholder="Email Address">
<input type="submit" name="sub" text="Subscribe"></input>
 </form>                                                
</div>
<div class="contactus">
 <i class="fa fa-map-marker fa-2x cont"></i> <b> -   Jamakhandi</b></br></br>
<i class="fa fa-phone fa-2x cont"></i><b>   -  9538571800 / / 9686999190 / / 8150828833</b></br></br>
 <i class="fa fa-envelope fa-2x cont"></i><b>  -   arunbannur20@gmail.com / /ganguchimmad@gmail.com</b>  
</div>
  
<div class="copyright_text">
<p>Made with <i class="fa fa-heart cont1"></i>   By  <img src="img/save.png" style="width:200px;height:90px;margin-top:-30px"></p>                                                                       	 
</div>

<!-------------------------End of cotact us----------------------->

                              
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script>
var bleep3 = new Audio();
bleep3.src = "bleep/bleep3.mp3";
function sound()
{
	var audio=new Audio('audio/wellcome to graha durastti seva.wav');
    
	 setTimeout(function(){audio.play();},2000);
}
</script>


<!-------------------------- start of preloader----------------------->
<script>
jQuery(document).ready(function($) {  
$(window).load(function(){
$("#preloader").delay(1000).fadeOut("slow");
$('#preloader').fadeOut('slow',function(){
$(this).remove();});
});
});
</script>
<!-------------------------- End  of  preloader----------------------->



<!-------------------------- start of send button----------------------->
<script>
$('button').click(function() {
  $(this).toggleClass('clicked');
  $('button p').text(function(i, text) {
    return text === "Sent!" ? "Send" : "Sent!";
  });
});
</script>
<!-------------------------- End of send button----------------------->


<!------------------start of content box in get started-------------------->
<script>
$('h5').on('click', function(){
  $('.wrap, h5').toggleClass('active');
  
  return false;
});
</script>
<!------------------End of content box in get started-------------------->


<!--------------start of header height and color parallex-------->
<script>
function Scroll(){
var top = document.getElementById('header');
var ypos = window.pageYOffset;
if(ypos>595){
top.style.height="70px";
top.style.background="teal";
}
else
{
top.style.height="85px";
top.style.background="none";
}
}
window.addEventListener("scroll",Scroll);
</script>
<!--------------End of header height and color parallex-------->


<!--------------start of logo  parallex-------->
<script>
function Scroll(){
var top = document.getElementById('logo');
var ypos = window.pageYOffset;
if(ypos>595){
top.style.height="70px";
}
else
{
top.style.height="90px";
}
}
window.addEventListener("scroll",Scroll);
</script>
<!--------------End of logo  parallex-------->




<!--------------start of  smooth scrolling effect------------->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<!--------------End of  smooth scrolling effect------------->
</body>
</html>