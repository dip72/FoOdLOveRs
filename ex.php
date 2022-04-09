<?php
session_start();
?>

<html>
<head>
<title>lovefood</title>
<meta charset="UTF-8">
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 10;
  overflow: hidden;
  background-color:  #990000;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #ff3333;
}
li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: red;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}
input[type=text] {
  width: 100%;
  box-sizing: border-box;
  border: 5px solid #ff1a1a;
  background-image: url('https://img.icons8.com/ios-glyphs/35/000000/detective.png');
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 22px 20px 22px 60px;
}
div.ex1 {
  max-width: 100%;
  height: 100px;
  background-color: #990000;
   padding-top: 50px;
  padding-right: 30px;
  padding-left: 30px;
}
img:hover {
  -webkit-transform: scaleX(-1);
  transform: scaleX(-1);
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;


}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 18px;
  padding-bottom: 18px;
  text-align: left;
  background-color: white;
  color: blue;
}
#customers td {
  padding: 20px;
}
span.a {
  display: inline; /* the default for span */
  width: 100px;
  height: 100px;
  padding: 5px;
  border: 0px ;  
  background-color: #996600; 
}
.footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
p.font{
	font-size: 20;
	font-style: italic;
	text-align: center;
	color:Tomato;
	
}
div.r{
	margin-left: 1100px;
	margin-right: 0px;
}
div.tt{
	 height: 60px;
  width: 100%;
  background-color: #ff8c1a;
  margin-top: 10px;
  margin-bottom: 5px;
}
h1 {
  text-align: right;
  font-style: oblique;
  padding-bottom: 5px;
  padding-top: 5px;
  padding-right: 37px;
  font-size: 50px;
  color: #663300;
}
ul.lt {
  background: #cc9966;
  padding: 20px;
  margin-top: 40px;
  border: 5px;
}



ul li.lt {
list-style-type: none;
  background: #996633;
  padding :20px;
  margin: 10px;
  width: 90%;
}
div.list{
		 height: 250px;
  width:100%;
}
.button {
  background-color:  #cc0000; /* Green */
  border: none;
  color: white;
  padding: 14px 40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 24px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
}
div.a1
{
	  margin: 15px;
    margin-left: 75px;
  float: left;
	width: 1300px;
}
div.a2{
	  margin: 15px;
  float: left;
	width: : 300px;
}
</style>
</head>




<body>
	<div class="tt"><h1>FoodLOvErs</h1></div>
<ul>
	<li style="padding-right:900px;color: #990000 ">a</li>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#restuarant">Browse Restuarant</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="l.php">SignUp & LogIn</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">About</a>
    <div class="dropdown-content">
      <a href="#">Admin 1</a>
      <a href="#">Admin 2</a>
      <a href="#">Admin 3</a>
    </div></li>
</ul>	
<div style="margin-top: 20px;">
	
	<img src="download (3).jpg" width="100%" height="550px">
</div>
<div style="margin-top: 30px; ">
  <form action="search.php" method="post">
	 <div class="a1">
        <input type="text" name="search" placeholder="Search Desired Food..">
    </div>

    <div class="a2" > 
        <input class="button" type="submit" value="Enter">  
    </div>
  </form>
</div>

<div style="padding-left: 40px;">
	<div style="border-style: solid; margin-right: 700px ; margin-top: 200px; margin-bottom: 30px;"><p class="font";>MOST POPULAR DISHES!!!!! ORDER & ENJOY!!!</p></div>
	<div class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src="coffee.jpg" alt="Coffee" width="60" height="50">
  </a>
  <div class="desc">Coffee</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="biriyani.jpg" alt="Biriyani" width="60" height="60">
  </a>
  <div class="desc">Biriyani</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="pasta.jpg" alt="Fastfood" width="60" height="50">
  </a>
  <div class="desc">Fastfood</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="thaisoup.jpg" alt="thai-chinese" width="60" height="50">
  </a>
  <div class="desc">thai & Chinese</div>
</div>

<div class="r">
	<table id="customers">
        <tr>
            <th>HOW IT WORKS</th>
    
  </tr>
  <tr>
    <td>SEARCH nearby restuarant</td>
    
  </tr>
  <tr>
    <td>CHOOSE food you like</td>
    
  </tr>
  <tr>
    <td>PAY at deliver</td>
    
  </tr>
   <tr>
    <td>ENJOY the food!!!!!!</td>
    
  </tr>
  
</table>
</div>
	
		

	
</div>

<div class="list">
<ul class="lt">
  <li class="lt">We Deliver The Food In The Shortest Time!!</li>
  <li class="lt">We Are The Only One To Allow PAY AT DELIVERY!!!!</li>
  <li class="lt">We Assure Fresh Food Delivery!!!!!!</li>
</ul>
</div>


<div class="footer" style="padding-left: 1050px; margin-top:80px;">For Any Recomendations Please  <span class="a">CONTACT</span> Us. </div>

</body>
</html>
