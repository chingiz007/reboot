<?php 
session_start()
 ?>
<html>
<head>


	<meta charset="UTF-8">
	<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:700' rel='stylesheet' type='text/css'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css">
<style>

.skate{
	width: 100%; 
	height: 500px; 
	background: url(images/skate.jpg) 35% 70%; 
	background-size: cover; 
	float: left;
	-webkit-filter: brightness(50%);
	position: relative;
}
.skate:hover{

	-webkit-filter: brightness(100%);

}
.skate:hover::after{
	content: attr(data-title); /* Выводим текст */
    position: absolute; /* Абсолютное позиционирование */
    left: 10%; top: 10%; /* Положение подсказки */
    z-index: 1; /* Отображаем подсказку поверх других элементов */
    background: rgba(255,255,230,0.9); /* Полупрозрачный цвет фона */
    font-family: josefin sans; /* Гарнитура шрифта */
    font-size: 40px; /* Размер текста подсказки */
    padding: 5px 10px; 
    /* Поля */
     /* Параметры рамки */
}




.surf{
width: 100%;
 height: 300px;
  background: url(images/variant_surfing.jpg) 90% 60%;
   float: left; 
   background-size:cover;
-webkit-filter: brightness(50%);;position: relative;
}
.surf:hover{
	-webkit-filter: brightness(100%);
}
.surf:hover::after{
	content: attr(data-title); /* Выводим текст */
    position: absolute; /* Абсолютное позиционирование */
    left: 5%; top: 5%; /* Положение подсказки */
    z-index: 1; /* Отображаем подсказку поверх других элементов */
    background: rgba(255,255,230,0.9); /* Полупрозрачный цвет фона */
    font-family: josefin sans; /* Гарнитура шрифта */
    font-size: 25px; /* Размер текста подсказки */
    padding: 5px 10px;
}
.inline-vert{
	width: 100%;
	 height: 500px;
	  background: url(images/variant_inline_vert.jpg) 30% 10%; 
	  background-size: cover; 
	  float: left;
	  -webkit-filter: brightness(50%);;
	  position: relative;
	}
.inline-vert:hover{
		  -webkit-filter: brightness(100%);

}
.inline-vert:hover::after{
	content: attr(data-title); /* Выводим текст */
    position: absolute; /* Абсолютное позиционирование */
    left: 10%; top: 10%; /* Положение подсказки */
    z-index: 1; /* Отображаем подсказку поверх других элементов */
    background: rgba(255,255,230,0.9); /* Полупрозрачный цвет фона */
    font-family: josefin sans; /* Гарнитура шрифта */
    font-size: 40px; /* Размер текста подсказки */
    padding: 5px 10px;
}
.wingsuit{
	position: relative;
	width: 100%; 
	height: 300px;
	 background: url(images/variant_wingsuit.jpg) 50% 60% ; 
	 float: left; 
	 background-size:cover;
	 -webkit-filter: brightness(50%);
}
.wingsuit:hover{
	 -webkit-filter: brightness(100%);
}
.wingsuit:hover::after{
	content: attr(data-title); /* Выводим текст */
    position: absolute; /* Абсолютное позиционирование */
    left: 10%; top: 10%; /* Положение подсказки */
    z-index: 1; /* Отображаем подсказку поверх других элементов */
    background: rgba(255,255,230,0.9); /* Полупрозрачный цвет фона */
    font-family: josefin sans; /* Гарнитура шрифта */
    font-size: 30px; /* Размер текста подсказки */
    padding: 5px 10px;
}
.deltaplane{
	position: relative;
	width: 100%; height: 300px; background: url(images/variant_deltaplane.jpg) 50% 60%; float: right; background-size:cover;
-webkit-filter: brightness(50%);
}
.deltaplane:hover{
	-webkit-filter:brightness(100%);
}
.deltaplane:hover::after{
	content: attr(data-title); /* Выводим текст */
    position: absolute; /* Абсолютное позиционирование */
    right: 10%; top: 10%; /* Положение подсказки */
    z-index: 1; /* Отображаем подсказку поверх других элементов */
    background: rgba(255,255,230,0.9); /* Полупрозрачный цвет фона */
    font-family: josefin sans; /* Гарнитура шрифта */
    font-size: 30px; /* Размер текста подсказки */
    padding: 5px 10px;
}
.snowboard{
	position: relative;width: 100%; height: 300px; background: url(images/variant_snowboard.jpg) 100% 60%; float: left; background-size:cover;	-webkit-filter:brightness(50%);

}
.snowboard:hover{	-webkit-filter: brightness(120%)
}
.snowboard:hover::after{
	content: attr(data-title); /* Выводим текст */
    position: absolute; /* Абсолютное позиционирование */
    left: 10%; bottom: 10%; /* Положение подсказки */
    z-index: 1; /* Отображаем подсказку поверх других элементов */
    background: rgba(255,255,230,0.9); /* Полупрозрачный цвет фона */
    font-family: josefin sans; /* Гарнитура шрифта */
    font-size: 25px; /* Размер текста подсказки */
    padding: 5px 10px;
}
.bmx{
	position: relative;width: 100%; height: 300px; background: url(images/dust_bike.jpg) 50% 80%; background-size: cover; float: left;-webkit-filter: brightness(50%);
}
.bmx:hover{
	
		-webkit-filter: brightness(150%)


}
.bmx:hover::after{
	content: attr(data-title); /* Выводим текст */
    position: absolute; /* Абсолютное позиционирование */
    right: 3%; top: 10%; /* Положение подсказки */
    z-index: 1; /* Отображаем подсказку поверх других элементов */
    background: rgba(255,255,230,0.9); /* Полупрозрачный цвет фона */
    font-family: josefin sans; /* Гарнитура шрифта */
    font-size: 36px; /* Размер текста подсказки */
    padding: 5px 10px;
}




	
	
	div.container{
		width: 100%;
		max-width: 1355px;
		margin: 0 auto;
		margin-left: auto;
		margin-right: auto;
		position: 
	}
	
	img{top: -20px;
		max-width: 100%;
		height: auto;
		position: relative}
	#top{width: 100%;
		height: 650px;
		background-image: url(images/surf.jpg);
		background-size: 1349px 650px;
		padding-top: 20px
	}

	#menu{  /*высота шапки в пикселях*/
   position: fixed;
   
   left: 0px;
   right: 0px;
   z-index: 1;
		width: 600px;
		height: auto;
		margin-left: auto;
		margin-right: auto;
		border-top: 3px solid 	#F0FFFF;
		border-bottom: 3px solid 	#F0FFFF;
		
		
	}

	ul{padding-top: 20px;
		padding-bottom: 20px;
		text-align: center;
		list-style:none;
	}
	ul li{
		color: #8B0000;
		
		font: bold normal 25px Josefin Sans;
		display: inline;
		padding: 0px 20px 0px 20px;
		
		cursor: pointer;
	}
	
	ul li:hover{
		color: yellow;

	}
	ul li:active{
	color: white
	}
	@media(max-width: 600px){
		#menu{padding-left: 0px;
			width: 400px
		}

	}
	@media(max-width: 740px){
		#cytata p{display: none
		}
		#cytata{background-color: transparent}
	}
	@media(max-width: 400px){
		#menu ul{text-align: left;

		}
		#menu ul li{padding-left: 1px

		}
	}
	#cytata{width: 750px;
		height: auto;
		margin-left: auto;
		margin-right: auto;
		color: black;
		font: bold italic 20px Josefin Sans;
text-align: center;
background: linear-gradient(to top, transparent, white, transparent ) ;
border-radius: 50px;
margin-top: 160px;
position: relative;
	}
	
	video{
object-fit: inherit;
}

.input{
float: right;
margin-right: 30px;
width: 200px;height: 210px;  background: linear-gradient(rgb(2, 153, 169), transparent, rgb(2, 153, 169)); padding: 15px 0px 5px 20px; border-radius: 20px}
 @media screen and (max-width: 496px){
 	.input{margin-top: 5px;
 		float: left;
 		margin-left: 50px}
 }

.no-gutter > [class*='col-'] {
    padding-right:0;
    padding-left:0;
}
.jumbotron img{float: left; 
	width: 30%; 
	position: relative;
	 margin: 10px 10px 10px 0;
	min-width: 500px
}
@media(max-width: 768px){
	.jumbotron img{
		width: auto;
		float: none;
		margin: 15px auto;
		min-width: auto;
		position: relative;
	}
}
.jumbotron{background-color: powderblue;
}
@media(max-width: 1000px){
	#top{background: url(images/surf.jpg) 70% 50%;
		background-size: cover;
		}
}
/*@media(max-width: 680px){
	#top{background: url(images/surf.jpg) 60% 50%;
		background-size: cover;
		height: 450px}
}*/
.img-container {border: 1px solid black;
	-webkit-filter: grayscale(100%);
	padding: 20px 20px 20px 20px;
	background-size: cover
}
.img-container:hover {-webkit-filter: grayscale(0%);
cursor: pointer;
}
.img-container img{
	width: 100%;
	height: 30%
	
}
.logo{
	max-width: 150px;

}
.logo img{
	-webkit-filter: brightness(50%);
	
}
.logo:hover img{
	-webkit-filter: brightness(100%);
	background-color: red
}
.skating .container .img-container img{
	width: 100%;
	height: auto
}
</style>

</head>
<body>


<div id="top">

	<div id="menu"><ul>
		<a href="#"><li>Home</li></a>
		<a href="#vid"><li>Master classes</li></a>
<a href="#content"><li>Content</li></a>
<a href="#news"><li>News</li></a>


	</ul></div>
	<div id="cytata"><p>–Better movement - only to move forward!
to the new, to the unknown and surprising.</p>
</div>

<div class="jumbotron" style="margin-left: 60px; display: inline">
<?php 
if(isset($_SESSION['username'])){
	echo '<div style="top:0; margin-left: 20px; font:normal normal 20px josefin sans; background-color: orange; width: 150px">'.$_SESSION['username'].'<a href="logout.php" style="margin-left:10px">log out</a></div>';
}else{
?>    
    
    <div style="float: left">
 <p>
    
    <input name="username" id="username" type="text" size="10" maxlength="20" placeholder="Username">
    </p>


 
    <p>

    
    <input name="password" type="password" id="password" size="10" maxlength="20" placeholder="Password">
    </p>

    

    <p>
    <button onclick="logCheck()" class="btn btn-primary" type="submit" name="submit">Sign in</button>
 
 
    </p>
</div>

<div style="float:right">
<form method="post" action="asd.php"><p>
<input type="text" name="username" placeholder="Username" required></p>
<p>
<input type="password" name="password" placeholder="Password" required></p>
<p><input type="password" name="re_password" placeholder="Repeat password" required></p>
<p><input type="text" name="email" placeholder="E-mail" required></p>
<input type="submit" class="btn btn-warning" name="submit" value="register"></form></div></div>
    
    
   
<?php }?>    

    
</div>
	
<hr>
<p style="text-align: center; font: normal normal 30px josefin sans; margin-top: 30px"><a name="vid" style="text-decoration: none">From the life of Extremals</a></p>
<div class="container"  >
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		
		<video width="100%"
		controls="controls" poster="images/inline vert.jpg";><source src="inline vert.mp4"></video>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<video width="100%" poster="images/bicycle.jpg"
		controls="controls";><source src="bmx.mp4"></video>
		<div class="clearfix visible-sm"></div></div></div>
		<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<video width="100%" poster="images/wing.jpg"
		controls="controls";><source src="wingsuit.mp4"></video>
		</div>		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<video width="100%" poster="images/skating.jpg"
		controls="controls";><source src="skate.mp4"></video>
		</div>

	</div>
</div>
<!--<div class="container">
	<div class="well hidden-sm">
		<p> Screen &lt;768px</p>
	</div>
</div>-->
<hr>
<p style="text-align: center; font: normal normal 30px josefin sans; margin-top: 15px; margin-top: 50px"><a name="content" style="text-decoration: none">Extreme stuff</a></p>
<div class="container">
	 <div class="row no-gutter"><div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
	
		<div class="dropdown">
		<div class="dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="true" data-toggle="dropdown"><div class="skate" data-title="Skateboard"></div></div>
		<span class="caret"></span>
		<ul class="dropdown-menu pull-right">
			<li><a href="#zero"><div class="logo img-responsible"><img src="images/skateboards/zero_logo.png" style="margin: 0 auto"></div></a></li>
			<li><a href="#element"><div class="logo img-responsible"><img src="images/skateboards/element_logo.png"></div></a></li>
			<li><a href="#habitat"><div class="logo img-responsible"><img src="images/skateboards/habitat_logo.png"></div></a></li>
			<li><a href="#powell"><div class="logo img-responsible"><img src="images/skateboards/powell_logo.gif"></div></a></li>
			
		</ul>
	</div>
	


	</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="dropdown">
		<div class="dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="true" data-toggle="dropdown">
	<div class="inline-vert" data-title="Rollers"></div></div>
	<span class="caret"></span>
<ul class="dropdown-menu pull-right">
			<li><a href="#seba"><div class="logo img-responsible"><img src="images/rollers/seba_logo.png" style="margin: 0 auto"></div></a></li>
			<li><a href="#tron"><div class="logo img-responsible"><img src="images/rollers/tron_logo.png"></div></a></li>
			<li><a href="#fila"><div class="logo img-responsible"><img src="images/rollers/fila_logo.png"></div></a></li>
			<li><a href="#remz"><div class="logo img-responsible"><img src="images/rollers/remz_logo.png"></div></a></li>
			
		</ul>
	</div></div>
<div class="row no-gutter"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="deltaplane col-lg-6 col-md-6 col-sm-6" data-title="Deltaplane"></div></div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="dropdown">
		<div class="dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="true" data-toggle="dropdown">
<div class="surf " data-title="Surfing board"></div></div>
<span class="caret"></span><ul class="dropdown-menu pull-right">
			<li><a href="#bic"><div class="logo img-responsible"><img src="images/surf/bic_logo.png" style="margin: 0 auto"></div></a></li>
			<li><a href="#byrne"><div class="logo img-responsible"><img src="images/surf/byrne_logo.png"></div></a></li>
			
			
		</ul>
	</div></div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="dropdown">
		<div class="dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="true" data-toggle="dropdown">
<div class="snowboard " data-title="Snowboard"></div></div>
<span class="caret"></span><ul class="dropdown-menu">
			<li><a href="#k2"><div class="logo img-responsible"><img src="images/snowboard/k2_logo.png" style="margin: 0 auto"></div></a></li>
			<li><a href="#arbor"><div class="logo img-responsible"><img src="images/snowboard/arbor_logo.png"></div></a></li>
			
			
		</ul>
	</div>
</div>
<div class="row no-gutter"><div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<div class="dropdown">
<div class="dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="true" data-toggle="dropdown">
<div class="bmx" data-title="BIKES"></div></div>
<span class="caret"></span>
<ul class="dropdown-menu pull-right">
	<li><a href="#gt"><div class="logo img-responsible"><img src="images/bikes/gt_logo.png"></div></a></li>
	<li><a href="#bmx"><div class="logo img-responsible"><img src="images/bikes/bmx_logo.png"></div></a></li>
	<li><a href="#giant"><div class="logo img-responsible"><img src="images/bikes/giant_logo..png"></div></a></li>
</ul>
</div></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<a href="#wingsuit"><div class="wingsuit" data-title="Wingsuit"></div></a></div>

	

	</div>
	<hr>
<div class="container" style="margin-top: 30px">
<div class="jumbotron" style="min-height: 470px">
	<p style="text-align: center; font: bold normal 40px josefin sans"><a name="news" style="text-decoration: none">News</a></p>
<img src="images/toweks.jpg">In the sports world lacks extreme, committing the most reckless acts. One of them - the Frenchman Candide Toveks regularly uploaded to the Internet video, under the heading "Do not try it again." Another creation is the headline as "One Day in the Life freerider" eyes of the freerider. 32-year-old native of La Clusaz knows all slopes home ski resort of Val Thorens at their fingertips.

But the tricks perpetrated Toveksom, it is breathtaking! It does not confuse even the existence of tunnels in the rocks. Looking at the video footage it is impossible to believe that there was a fracture of the spine in 2007 in Candida. At the bottom of the station he could rest, eat and drink a hot cup of coffee. But it is not right for him -Toveks skiing calls in the cabin lift and starts over again.


</div>
</div>
	<hr>
	<div class="skating"> 
<div class="container" style="margin-top: 100px"><p style="text-align: center; font: bold normal 50px josefin sans"><a name="zero">ZERO</a></p>
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/zero_1.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/zero_2.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/zero_3.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/zero_4.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>



	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/zero_5.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/zero_6.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/zero_7.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/zero_8.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>


	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/zero_9.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/zero_10.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/zero_11.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/zero_12.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>
</div>

<div class="container" style="margin-top: 100px"><p style="text-align: center; font: bold normal 50px josefin sans"><a name="element">ELEMENT</a></p>
	
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/element_1.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/element_2.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/element_3.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/element_4.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>

	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/element_5.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/element_6.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/element_7.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/element_8.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
		</div>


		<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/element_9.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/element_10.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/element_11.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/element_12.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>
</div>

<div class="container" style="margin-top: 100px"><p style="text-align: center; font: bold normal 50px josefin sans"><a name="habitat">HABITAT</a></p>
	
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/habitat_1.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/habitat_2.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/habitat_3.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/habitat_4.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>

	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/habitat_5.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/habitat_6.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/habitat_7.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/habitat_8.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
		</div>


		<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/habitat_9.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/habitat_10.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/habitat_11.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/habitat_12.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>
</div>




<div class="container" style="margin-top: 100px"><p style="text-align: center; font: bold normal 50px josefin sans"><a name="powell">POWELL</a></p>
	
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/powell_1.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/powell_2.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/powell_3.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/powell_4.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>

	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/powell_5.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/powell_6.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/powell_7.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/powell_8.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
		</div>


		<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/powell_9.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/powell_10.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/powell_11.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/skateboards/powell_12.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>
</div>


<!--<div class="container">
	<div class="dropdown">
		<img src="art.jpg" class="img-responsive dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="true" data-toggle="dropdown">
		<span class="caret"></span>
		<ul class="dropdown-menu">
			<li><a href="#">fsdfdfs</a></li>
			<li><a href="#">fsdfdfs</a></li>
			<li><a href="#">fsdfdfs</a></li><li><a href="#">fsdfdfs</a></li>
			
		</ul>
	</div>
</div>
-->

<hr>
<br>
<div class="container" style="margin-top: 100px"><p style="text-align: center; font: bold normal 50px josefin sans"><a name="seba">SEBA</a></p>
	
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/seba_1.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/seba_2.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/seba_3.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/seba_4.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>

	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/seba_5.jpg."><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/seba_6.jpg."><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/seba_7.jpg."><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/seba_8.jpg."><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
		</div>


		<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/seba.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/sebba.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/seba_12.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/seba_11.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>
</div>

<div class="container" style="margin-top: 100px"><p style="text-align: center; font: bold normal 50px josefin sans"><a name="tron">TRON</a></p>
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/tron_1.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/tron_2.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/tron_3.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/tron_4.jpeg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>



	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/tron_5.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/tron_6.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/tron_7.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/tron_8.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>


	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/tron_9.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/tron_10.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/tron_11.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/tron_12.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>
</div>


<div class="container" style="margin-top: 100px"><p style="text-align: center; font: bold normal 50px josefin sans"><a name="fila">FILA SKATES</a></p>
	
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/fila_1.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/fila_2.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/fila_3.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/fila_4.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>

	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/fila_5.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/fila_6.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/fila_7.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/fila_8.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
		</div>


		<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/fila_9.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/fila_10.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/fila_11.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/fila_12.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>
</div>




<div class="container" style="margin-top: 100px"><p style="text-align: center; font: bold normal 50px josefin sans"><a name="remz">REMZ</a></p>
	
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/remz_1.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/remz_2.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/remz_3.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/remz_4.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>

	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/remz_5.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/remz_6.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/remz_7.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/remz_8.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
		</div>


		<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/remz_9.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/remz_10.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/remz_11.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/rollers/remz_12.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>
</div>




<div class="container" style="margin-top: 100px"><p style="text-align: center; font: bold normal 50px josefin sans"><a name="bic">BIC SURF</a></p>
	
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/surf/bic_1.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/surf/bic_2.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/surf/bic_3.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/surf/bic_4.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>

	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/surf/bic_5.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/surf/bic_6.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/surf/bic_7.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/surf/bic_8.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
		</div>


		<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/surf/bic_9.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/surf/bic_10.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/surf/bic_11.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/surf/bic_12.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>
</div>







<div class="container" style="margin-top: 100px"><p style="text-align: center; font: bold normal 50px josefin sans"><a name="byrne">BYRNE</a></p>
	
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/surf/byrne_1.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/surf/byrne_2.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/surf/byrne_3.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/surf/byrne_4.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>

	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/surf/byrne_5.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/surf/byrne_6.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/surf/byrne_7.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/surf/byrne_8.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
		</div>


		
</div>






<div class="container" style="margin-top: 100px"><p style="text-align: center; font: bold normal 50px josefin sans"><a name="k2">K2</a></p>
	
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/k2_1.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/k2_2.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/k2_3.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/k2_4.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>

	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/k2_5.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/k2_6.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/k2_7.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/k2_8.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
		</div>


		<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/k2_9.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/k2_10.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/k2_11.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/k2_12.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>
</div>



<div class="container" style="margin-top: 100px"><p style="text-align: center; font: bold normal 50px josefin sans"><a name="arbor">ARBOR</a></p>
	
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/arbor_1.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/arbor_2.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/arbor_3.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/arbor_4.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>

	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/arbor_5.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/arbor_6.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/arbor_7.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/arbor_8.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
		</div>


		<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/arbor_9.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/arbor_10.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/arbor_11.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/snowboard/arbor_12.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>
</div></div>




<div class="container" style="margin-top: 100px"><p style="text-align: center; font: bold normal 50px josefin sans"><a name="gt">GT</a></p>
	
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/gt_1.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/gt_2.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/gt_3.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/gt_4.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>

	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/gt_5.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/gt_6.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/gt_7.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/gt_8.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
		</div>


		<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/gt_9.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/gt_10.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/gt_11.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/gt_12.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>
</div>


<div class="container" style="margin-top: 100px"><p style="text-align: center; font: bold normal 50px josefin sans"><a name="bmx">BMX</a></p>
	
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/bmx_1.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/bmx_2.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/bmx_3.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/bmx_4.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>

	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/bmx_5.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/bmx_6.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/bmx_7.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/bmx_8.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
		</div>


		<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/bmx_9.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/bmx_10.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/bmx_11.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/bmx_12.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>
</div>





<div class="container" style="margin-top: 100px"><p style="text-align: center; font: bold normal 50px josefin sans"><a name="giant">GIANT</a></p>
	
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/giant_1.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/giant_2.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/giant_3.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/giant_4.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>

	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/giant_5.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/giant_6.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/giant_7.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/giant_8.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
		</div>


		<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/giant_9.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/giant_10.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/giant_11.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/bikes/giant_12.jpg"><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>
</div>





<div class="skating">
<div class="container" style="margin-top: 100px"><p style="text-align: center; font: bold normal 50px josefin sans"><a name="wingsuit">Wingsuits</a></p>

<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/wingsuit/vampire_alpine.jpg"><p style="float: right">Vampire alpine</p><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/wingsuit/vampire_sukhoi.jpg"><p style="float: right">Vampire sukhoi</p><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/wingsuit/havok_carve.jpg"><p style="float: right">Havok carve</p><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/wingsuit/hunter.jpg"><p style="float: right">Hunter</p><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>
<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/wingsuit/prodigy.jpg"><p style="float: right">Prodigy</p><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/wingsuit/shadow_edge.jpg"><p style="float: right">Shadow edge</p><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/wingsuit/phantom_edge.jpg"><p style="float: right">Phantom edge</p><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/wingsuit/venom_power.jpg"><p style="float: right">Venom power</p><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>


<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/wingsuit/apache.jpg"><p style="float: right">Apache</p><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/wingsuit/r-bird.jpg"><p style="float: right">R-bird</p><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/wingsuit/tracking_suit.jpg"><p style="float: right">Tracking suit</p><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
			<div class="img-container">
				<img src="images/wingsuit/x-bird.jpg"><p style="float: right">X-bird</p><div class="btn btn-warning" type="submit" name="submit" value="BUY">BUY</div>
			</div>
		</div>
	



	</div>



	</div>

</div>






<script src="jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
function logCheck(){
	var username=$('#username').val();
	var password=$('#password').val();
	$.ajax(
		'testreg.php',{
			data:'username='+username+'&password='+password,
			success:function(data){
				if(data=='success'){
					window.location.href='777.php';
				}
				if(data=='erlog'){
					$('#username').val('');
					$('#password').val('');
					alert("This user is not registered");
				}
			}
		}
		)
}
var h_hght = 20;
var h_mrg = 0;    
                 
$(function(){
 
    var elem = $('#menu');
    var top = $(this).scrollTop();
     
    if(top > h_hght){
        elem.css('top', h_mrg);
    }           
     
    $(window).scroll(function(){
        top = $(this).scrollTop();
         
        if (top+h_mrg < h_hght) {
            elem.css('top', (h_hght-top));
        } else {
            elem.css('top', h_mrg);
        }
    });
 
});
</script>

</body>
</html>