@extends('layout.master')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Demo Playject</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">  
    
     <!-- Le styles -->
        <style type="text/css">


html { height: 100% }
body {
    background-color: #dddddd;
    background-image: -webkit-gradient(radial, 50% 0%,100,50% 150%,100, from(#333333), to(#dddddd));
    background-image: -webkit-radial-gradient(50% 100%, #dddddd, #333333);
    background-image: -moz-radial-gradient(50% 100%, #dddddd, #333333);
    background-image: -o-radial-gradient(50% 100%, #dddddd, #333333);
    background-image: -ms-radial-gradient(50% 100%, #dddddd, #333333);
    background-image: radial-gradient(50% 100%, #dddddd, #333333);
    color: #fff;
    overflow: hidden;
    height: 100%;
    -webkit-text-size-adjust: 100%; /* Stops Mobile Safari from auto-adjusting font-sizes */
}
/* Navi */
#nav {
    width: 800px;
    margin: 50px auto;
    overflow: hidden;
}
#nav ul {
    float: left;
    height: 55px;
    width: 800px;
    opacity: 0.95;
    border-radius: 5px;
    list-style-type: none;
    box-shadow: 0 250px 150px rgba(0,0,0,.2);
    margin: 0;
    padding: 0;
}
#nav ul li {
    float: left;
    height: 55px;
}
#nav ul li a {
    font: bold 21px/52px "Lato","Trebuchet MS", Arial, Helvetica, sans-serif;
    display: block;
    height: 55px;
    border-bottom: 5px solid #143157;
    background-color: #0f6fb2;
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgb(15, 111, 178)), to(rgb(34, 65, 112)));
    background-image: -webkit-linear-gradient(top, rgb(15, 111, 178), rgb(34, 65, 112));
    background-image: -moz-linear-gradient(top, rgb(15, 111, 178), rgb(34, 65, 112));
    background-image: -o-linear-gradient(top, rgb(15, 111, 178), rgb(34, 65, 112));
    background-image: -ms-linear-gradient(top, rgb(15, 111, 178), rgb(34, 65, 112));
    background-image: linear-gradient(top, rgb(15, 111, 178), rgb(34, 65, 112));
    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,StartColorStr='#0f6fb2', EndColorStr='#224170');
    color: #fff;
    text-decoration: none;
    box-shadow: inset 0 1px 0 #0081bd,inset 0 2px 0 #0078b0,inset 0 3px 0 #0070a3, 0 0 10px rgba(0,0,0,0.2);
    box-sizing: border-box;
    transition: all .2s ease-in;
    -o-transition: all .2s ease-in;
    -moz-transition: all .2s ease-in;
    -webkit-transition: all .2s ease-in;
}
#nav ul li a { width: 160px }
#nav ul li:first-child a {
    -webkit-border-top-left-radius: 5px;
    -webkit-border-bottom-left-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-bottomleft: 5px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}
#nav ul li:last-child a {
    -webkit-border-top-right-radius: 5px;
    -webkit-border-bottom-right-radius: 5px;
    -moz-border-radius-topright: 5px;
    -moz-border-radius-bottomright: 5px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}
#nav ul li a:hover {
    box-shadow: inset 0 1px 0 #0070a3,inset 0 0 30px 0 #142a4a;
    text-shadow: 0 1px 3px #143157;
    border-bottom: 5px solid #0e223d;
}
#nav ul li a:active,
#nav ul li a.active {
    border-bottom: 1px solid #0e223d;
    height: 55px;
    padding-top: 2px;
    box-shadow: inset 0 1px 0 #0070a3,inset 0 0 40px 0 #0d1b30;
}
#nav ul li a span {
    border-left: 1px solid #143157;
    border-right: 1px solid #1563a3;
    height: 100%;
    display: block;
    width: 100%;
    text-align: center;
    box-sizing: border-box;
}
#nav ul li:first-child a span { border-left: none }
#nav ul li:last-child a span { border-right: none }
</style>
</head>
  <body>
  	<nav id="nav">	
	<ul>		
		<li>
			<a href="javascript:void(0);"><span>Home</span></a>
		</li>
		<li>
			<a href="javascript:void(0);"><span>My Projects</span></a>
		</li>
		<li>
			<a href="javascript:void(0);"><span>Documents</span></a>
		</li>
		<li>
			<a href="javascript:void(0);"><span>About</span></a>
		</li>
		<li>
			<a href="javascript:void(0);"><span>Contact</span></a>
		</li>
	</ul>
</nav> 

	<div class="container">
  <div class="row-fluid">
  <div class="span6"><div class="well"> 

<form class="form-horizontal">
  <div class="control-group">
      <label class="control-label" for="inputEmail">Email</label>
      
    <div class="controls">
      <input type="text" id="inputEmail" placeholder="Email">

    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    
    <div class="controls">
      <input type="password" id="inputPassword" placeholder="Password">
    </div>
  </div>


  <div class="control-group">
    <div class="controls">
      <label class="checkbox">
        <input type="checkbox"> Remember me
      </label>
  
      <button class="btn btn-info" type="button"><a href='<?php echo URL:: to('/master/playject');?>'>Submit</a></button>
<button class="btn btn-info" type="button"><a href='<?php echo URL:: to('/registration');?>'>Register</a></button>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
</form>

    </body>
 
 
</html>

