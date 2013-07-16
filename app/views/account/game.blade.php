@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
:: Products
@stop

{{-- Content --}}
<style>
body
{ 
width: 100%; 
margin: 0 auto; 
padding: 0; 
} 

.bubb
{ 
position: absolute; 
width:30px; 
height: 30px; 
font: bold 14px verdana; 
background-color: yellow; 
text-align: center; 
-webkit-border-radius: 20px; 
-moz-border-radius: 20px; 
vertical-align: middle; 
padding: 5px; 
} 


#score
{
font-size:46px; 
top: 25px; 
right: 50px; 
display: none; 
text-align:right; 
} 

#start
{ 
width: 50px; 
padding: 10px 15px; 
text-align: center; 
font:bold 15px arial; 
background-color: #dedede; 
color: #000; 
-webkit-border-radius: 6px; 
-moz-border-radius: 6px; 
position: absolute; 
} 

#start:hover
{ 
cursor: pointer; 
}

</style>
<script>

$(document).keydown( function(event)
{
var keycode = event.keyCode;


var width = screen.width - 100;
var height = screen.height - 200;


var k = Math.floor(Math.random() * ( 90 - 65 + 1 )) + 65;
var ch = String.fromCharCode(k);



function randomColor(){
var color = '';
var values = ['a', 'b', 'c', 'd', 'e', 'f', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
for (c = 0; c < 6; c++) {
no = Math.floor(Math.random() * 15);
color += values[no];
}
return color;
}
});


</script>
<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
// Getting screen resolutions and positioning the start button
var width = screen.width - 100;
var height = screen.height - 200;
var code = 0;
$('#start').css(
{ 
"top" : (height/2)+'px', 
"left" : (width/2)+'px' 
});

$('#start').click( function()
{
$(this).fadeOut('slow');
$('#score').show();
genLetter();
});

// Dealing KeyEvents and fading out matched bubble
$(document).keydown( function(event) 
{
var keycode = event.keyCode;
$('.bubb'+keycode).animate(
{ 
"top" : height+"px", "opacity" : 0 
}, 'slow'); 

$('.bubb'+keycode).fadeOut('slow').hide( 'slow', function()
{
code += 20;
$('#score').html(code);
$(this).remove();
}
);
});

// Generating a random alphabet between A-Z
function genLetter()
{
var color = randomColor();
var k = Math.floor(Math.random() * ( 90 - 65 + 1 )) + 65;
var ch = String.fromCharCode(k);
var top = Math.floor(Math.random() * height );
var left = Math.floor(Math.random() * width );
$('body').append('<span class="bubb bubb'+ k +'" style="left: '+ left +'; top: '+ top +'; background-color:'+ color +'">'+ ch +'</span>');
setTimeout(genLetter, 1000);
}

// Generating a random color
function randomColor()
{
var color = '';
var values = ['a', 'b', 'c', 'd', 'e', 'f', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
for (c = 0; c < 6; c++) 
{
no = Math.floor(Math.random() * 15);
color += values[no];
}
return color;
}
});
</script>

@section('content')
<div class="page-header">
	<h1> Game</h1>
</div>

<div id="score">0</div> 
<div id="start">Start</div>



@stop