<style>
	/*
Author: WebThemez
Author URL: http://webthemez.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
*/


body {
	color:#FFF; 
	background-color: #000
	min-width:960px;
	top:0;
	left:0;
	position:absolute;
	height:100%;
	width:100%;
	margin:0;
	background-size:cover;
}
.ie body {
	filter: dropshadow(color=#000000, offx=0, offy=1);	
}
h1 {
	font-size:68px;
	letter-spacing:-2px;  
	text-align:center; 
	padding-top:30px;
	font-weight:700;
	text-shadow: 2px 2px rgba(12, 11, 11, 0.56);
}
.ie h1 {
	filter: dropshadow(color=#000000, offx=0, offy=3);
	padding-bottom:12px;	
} 
.ie h2 {
	filter: dropshadow(color=#000000, offx=0, offy=3);
}
h3 {
	font-size:25px;
	margin:0.2em 0; 
}
.ie h3 {
	filter: dropshadow(color=#000000, offx=0, offy=3);
}
h4 {
	margin-bottom:5px;	
}
p, pre {
	margin:0 0 10px 0; 
}
code {
	text-transform:uppercase !important;
	color:#EEE;	
	border-bottom:1px dotted #666;
}
small {
	background:url(../images/alpha.png);
	background:rgba(0, 0, 0, 0.8) url();	
	border:1px solid #111;
	font-size:15px;
	padding:0 5px;
}
a {
	color: rgba(255, 255, 255, 0.57);
	text-decoration:none;	
}
a:hover {
	color:#BBB;	
} 
#Header {
margin-bottom: 62px;
position: relative;
width: 100%;
height: 110px;
line-height: 110px;

z-index: 1;
}
.wrapper {
margin: 0 auto;
position: relative;
width: 920px;
text-align: center;
padding-top: 90px;
z-index: 1;
}
#socialIcons {
display:block;
}
#socialIcons ul {
margin: 0px; 
padding:0px;
text-align: center;
}
#socialIcons ul li {
margin-right: 5px;
height: 34px;
line-height: 34px;
list-style-type: none;
display: inline-block; 
}
#socialIcons ul li a{
width:34px;
height:34px; 
display: inline-block;
}
.twitterIcon, .facebookIcon, .linkedInIcon, .pintrestIcon{
background: url('../images/social-icons.png') -74px 0px;
}
.facebookIcon{
background-position: 10px 0px;
}
.linkedInIcon{
background-position: -245px 0px;
}
.pintrestIcon{
background-position: -331px 0px;
}
.tempBy{
display:block;
text-align:center;
margin-top:40px;
margin-top: 420px;
margin-bottom: 30px;
}
#Content h2 {
display: inline-block;
margin: 25px 0 45px;
padding: 0px;
text-align: center;
font-size: 28px; 
font-weight: 300;
color: #fff;
line-height: 36px;
}
#WindowSlide {
margin: 0 auto;
position: relative;
width: 634px;
height: 170px;
display: block;
overflow: hidden;
}
#Mail {
position: absolute;
width: 634px;
top: 0px;
left: 0px;
}
#Content h3 {
text-align: center;
font-size: 20px;
font-weight: normal;
display: block;
clear: both;
}

#subscribe p{
text-align:center;
}
#subscribe input {
	background: transparent;
    color: #fff;
    vertical-align: middle;
    width: 293px;
    border: 1px solid rgba(255, 255, 255, 0.76);
    padding: 3px 20px;
    height: 42px;
}
#subscribe input[type="button"]{

width: auto;
padding: 0px 25px;
cursor: pointer;
margin-left: -5px;
font-weight: bold; 
height: 42px;
display: inline-block;
}


.callback,
.simple {
  font-size: 20px;
  background: #27ae60;
  padding: 0.5em 0.7em;
  color: #ecf0f1;
  margin-bottom: 50px;
  -webkit-transition: background 0.5s ease-out;
  transition: background 0.5s ease-out;
}
.callback{
  cursor: pointer;
}
.ended {
  background: #c0392b;
}
.countdown {
text-align:center;
}
.intro{
font-size:22px;
font-weight:normal;
margin-bottom:30px;
}
.styled{
  margin-bottom: 30px;
}
.styled div {
display: inline-block;
font-size: 80px;
font-weight: 900;
text-align: center;
margin: 0 1px;
width: 136px;
padding: 10px 30px 53px; 
height: 100px;
background-color: #054aaf;
text-shadow: none;
vertical-align: middle; 
border-right:1px solid rgba(255, 255, 255, 0.36);
text-shadow: 2px 2px rgba(12, 11, 11, 0.56);
}
.styled div:last-child{
border:none;
}
#overlay{ 
    height: 980px;
background-color: #122333;
background-image: url(/images/starry-night-sky.jpeg);
position: fixed;
background-size: cover;
background-position:center;
background-repeat: no-repeat;
top: 0px;
width: 100%;
bottom: 0px;
opacity:0.8;
}
/* IE7 inline-block hack */
*+html .styled div{
  display: inline;
  zoom: 1;
}
.styled div:first-child {
  margin-left: 0;
}
.styled div span {
display: block;
border-top: 1px solid rgba(255, 255, 255, 0.36);
padding-top: 3px;
font-size: 21px;
font-weight: 400;
text-align: center;
}
footer{
width:100%;
height:30px;
background:rgba(0, 0, 0, 0.64);
position:absolute;
bottom:0px;
}
footer span{
float:right;
margin:10px;
}
@media(max-width:768px){
	body {
	min-width: initial !important;
	}
	.wrapper{width:100%;}
	.styled div {
	  margin-bottom:10px; 
	}
}
@media(max-width:420px){
	h1{
	float:initial;
	text-align: center;
	margin-left:0px;
	margin-bottom:0px;
	}
	.styled div {
	  margin-bottom:10px;
	  font-size: 40px;
	  font-weight: normal; 
	  text-align: center;
	  width:80px; 
	  border-radius:80px; 
	  height:80px;  
	}
	#Content h2 {
	margin: 0px 0px 0px 0px;
	padding: 0px;
	text-align: center;
	font-size: 29px;
	font-weight: 300;
	}
	.styled {
	margin-bottom: 30px;
	}
	#subscribe input[type="button"]{
	margin-top:10px;
	}
	#subscribe input{
	width:80%;
	}
	footer{
	position:relative !important;
	}
}

</style>
<body id="home" data-new-gr-c-s-check-loaded="14.1029.0" data-gr-ext-installed="">
	<div id="Header">
	<div class="wrapper">
		<h1>Coming Soon</h1>	
		</div>
	</div>
	<div id="Content" class="wrapper"> 
	
	<p style="    font-size: 18px;
    padding: 10px;">Our website is about to launch pretty soon.</br> Become first subscriber by sign up</p>
	<div id="subscribe"> 
		<form action="" method="post" onsubmit="">
			<p><input name="" placeholder="Enter your e-mail" type="text" id="">
			<input type="button" value="Submit"></p>
		</form>
		<div id="socialIcons">
			<ul> 
				<li><a href="" title="Twitter" class="twitterIcon"></a></li>
				<li><a href="" title="facebook" class="facebookIcon"></a></li>
				<li><a href="" title="linkedIn" class="linkedInIcon"></a></li>
				<li><a href="" title="Pintrest" class="pintrestIcon"></a></li>
			</ul>
		</div>
	</div>
	<span class="tempBy">Copyrights by: <a href="">Buypare.com</a></span>
	</div>
	
	<div id="overlay"></div>
	
	<!--Scripts-->
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/Backstretch.js"></script>
	<script type="text/javascript" src="js/jquery.countdown.js"></script>
	<script type="text/javascript" src="js/global.js"></script>
	
	
	
	<div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 464px; width: 1680px; z-index: -999999; position: fixed;"><img src="images/road2.jpg" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 1680px; height: 1097.03px; max-height: none; max-width: none; z-index: -999999; left: 0px; top: -316.516px;"></div></body>