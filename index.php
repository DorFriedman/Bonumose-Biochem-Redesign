<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bonumose-theme
 */

get_header();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<ul>
	<li style="float:right" class="donate"><button class="donateButton">DONATE</button></li>
	<li style="float:right" class="dropdown"><button class="contactButton">Contact</button></li>
</ul>



<!-- Left Side -->
<div class="bigCont side-l">
	<div class="smallCont cont1"><button class="contButton but1">Section 1</button></div>
	<div class="smallCont cont2"><button class="contButton but2">Section 2</button></div>
	<div class="smallCont cont3"><button class="contButton but3">Section 3</button></div>
	<div class="smallCont cont4"><button class="contButton but4">Section 4</button></div>
	<div class="smallCont cont5"><button class="contButton but5">Section 5</button></div>
	<div class="smallCont cont6"><button class="contButton but6">Section 6</button></div>
	<div class="smallCont cont7"><button class="contButton but7">Section 7</button></div>
</div>

<div class="bigCont textLeft">
	<div class="smallCont text1"></div>
	<div class="smallCont text2"></div>
	<div class="smallCont text3"></div>
	<div class="smallCont text4"></div>
	<div class="smallCont text5"></div>
	<div class="smallCont text6"></div>
	<div class="smallCont text7"></div>
</div>



<!-- Right Side -->
<div class="bigCont side-r">
	<div class="smallCont cont8"><button class="contButton but8">Section 8</button></div>
	<div class="smallCont cont9"><button class="contButton but9">Section 9</button></div>
	<div class="smallCont cont10"><button class="contButton but10">Section 10</button></div>
	<div class="smallCont cont11"><button class="contButton but11">Section 11</button></div>
	<div class="smallCont cont12"><button class="contButton but12">Section 12</button></div>
	<div class="smallCont cont13"><button class="contButton but13">Section 13</button></div>
	<div class="smallCont cont14"><button class="contButton but14">Section 14</button></div>
</div>

<div class="bigCont textRight">
	<div class="smallCont text8"></div>
	<div class="smallCont text9"></div>
	<div class="smallCont text10"></div>
	<div class="smallCont text11"></div>
	<div class="smallCont text12"></div>
	<div class="smallCont text13"></div>
	<div class="smallCont text14"></div>
</div>


<script>

var hover1 = function() {
    if($(".text1").hasClass('moved1')){
    	$(".text1").removeClass('moved1');
    } else {
        $(".text1").addClass('moved1');
        $(".text2").removeClass('moved1 moved2');
        $(".text3").removeClass('moved1 moved2');
        $(".text4").removeClass('moved1 moved2');
        $(".text5").removeClass('moved1 moved2');
        $(".text6").removeClass('moved1 moved2');
        $(".text7").removeClass('moved1 moved2');
        $(".text8").removeClass('moved1 moved2');
        $(".text9").removeClass('moved1 moved2');
        $(".text10").removeClass('moved1 moved2');
        $(".text11").removeClass('moved1 moved2');
        $(".text12").removeClass('moved1 moved2');
        $(".text13").removeClass('moved1 moved2');
        $(".text14").removeClass('moved1 moved2');
    }
    $(".side-l").css("z-index", "4");
	$(".textLeft").css("z-index", "3");
	$(".side-r").css("z-index", "2");
	$(".textRight").css("z-index", "1");
}
var click1 = function() {
    if($(".text1").hasClass('moved2')){
        $(".text1").removeClass('moved2');
    } else {
        $(".text1").addClass('moved2');
        $(".text2").removeClass('moved2');
        $(".text3").removeClass('moved2');
        $(".text4").removeClass('moved2');
        $(".text5").removeClass('moved2');
        $(".text6").removeClass('moved2');
        $(".text7").removeClass('moved2');
        $(".text8").removeClass('moved1 moved2');
        $(".text9").removeClass('moved1 moved2');
        $(".text10").removeClass('moved1 moved2');
        $(".text11").removeClass('moved1 moved2');
        $(".text12").removeClass('moved1 moved2');
        $(".text13").removeClass('moved1 moved2');
        $(".text14").removeClass('moved1 moved2');
    }
    $(".side-l").css("z-index", "4");
	$(".textLeft").css("z-index", "3");
	$(".side-r").css("z-index", "2");
	$(".textRight").css("z-index", "1");
}
$('.but1').click(click1).hover(hover1);

var hover2 = function() {
    if($(".text2").hasClass('moved1')){
    	$(".text2").removeClass('moved1');
    } else {
        $(".text2").addClass('moved1');
        $(".text1").removeClass('moved1 moved2');
        $(".text3").removeClass('moved1 moved2');
        $(".text4").removeClass('moved1 moved2');
        $(".text5").removeClass('moved1 moved2');
        $(".text6").removeClass('moved1 moved2');
        $(".text7").removeClass('moved1 moved2');
        $(".text8").removeClass('moved1 moved2');
        $(".text9").removeClass('moved1 moved2');
        $(".text10").removeClass('moved1 moved2');
        $(".text11").removeClass('moved1 moved2');
        $(".text12").removeClass('moved1 moved2');
        $(".text13").removeClass('moved1 moved2');
        $(".text14").removeClass('moved1 moved2');
    }
    $(".side-l").css("z-index", "4");
	$(".textLeft").css("z-index", "3");
	$(".side-r").css("z-index", "2");
	$(".textRight").css("z-index", "1");
}
var click2 = function() {
    if($(".text2").hasClass('moved2')){
        $(".text2").removeClass('moved2');
    } else {
        $(".text2").addClass('moved2');
        $(".text1").removeClass('moved2');
        $(".text3").removeClass('moved2');
        $(".text4").removeClass('moved2');
        $(".text5").removeClass('moved2');
        $(".text6").removeClass('moved2');
        $(".text7").removeClass('moved2');
        $(".text8").removeClass('moved1 moved2');
        $(".text9").removeClass('moved1 moved2');
        $(".text10").removeClass('moved1 moved2');
        $(".text11").removeClass('moved1 moved2');
        $(".text12").removeClass('moved1 moved2');
        $(".text13").removeClass('moved1 moved2');
        $(".text14").removeClass('moved1 moved2');
    }
    $(".side-l").css("z-index", "4");
	$(".textLeft").css("z-index", "3");
	$(".side-r").css("z-index", "2");
	$(".textRight").css("z-index", "1");
}
$('.but2').click(click2).hover(hover2);

var hover3 = function() {
    if($(".text3").hasClass('moved1')){
    	$(".text3").removeClass('moved1');
    } else {
        $(".text3").addClass('moved1');
        $(".text2").removeClass('moved1 moved2');
        $(".text1").removeClass('moved1 moved2');
        $(".text4").removeClass('moved1 moved2');
        $(".text5").removeClass('moved1 moved2');
        $(".text6").removeClass('moved1 moved2');
        $(".text7").removeClass('moved1 moved2');
        $(".text8").removeClass('moved1 moved2');
        $(".text9").removeClass('moved1 moved2');
        $(".text10").removeClass('moved1 moved2');
        $(".text11").removeClass('moved1 moved2');
        $(".text12").removeClass('moved1 moved2');
        $(".text13").removeClass('moved1 moved2');
        $(".text14").removeClass('moved1 moved2');
    }
    $(".side-l").css("z-index", "4");
	$(".textLeft").css("z-index", "3");
	$(".side-r").css("z-index", "2");
	$(".textRight").css("z-index", "1");
}
var click3 = function() {
    if($(".text3").hasClass('moved2')){
        $(".text3").removeClass('moved2');
    } else {
        $(".text3").addClass('moved2');
        $(".text2").removeClass('moved2');
        $(".text1").removeClass('moved2');
        $(".text4").removeClass('moved2');
        $(".text5").removeClass('moved2');
        $(".text6").removeClass('moved2');
        $(".text7").removeClass('moved2');
        $(".text8").removeClass('moved1 moved2');
        $(".text9").removeClass('moved1 moved2');
        $(".text10").removeClass('moved1 moved2');
        $(".text11").removeClass('moved1 moved2');
        $(".text12").removeClass('moved1 moved2');
        $(".text13").removeClass('moved1 moved2');
        $(".text14").removeClass('moved1 moved2');
    }
    $(".side-l").css("z-index", "4");
	$(".textLeft").css("z-index", "3");
	$(".side-r").css("z-index", "2");
	$(".textRight").css("z-index", "1");
}
$('.but3').click(click3).hover(hover3);

var hover4 = function() {
    if($(".text4").hasClass('moved1')){
    	$(".text4").removeClass('moved1');
    } else {
        $(".text4").addClass('moved1');
        $(".text2").removeClass('moved1 moved2');
        $(".text3").removeClass('moved1 moved2');
        $(".text1").removeClass('moved1 moved2');
        $(".text5").removeClass('moved1 moved2');
        $(".text6").removeClass('moved1 moved2');
        $(".text7").removeClass('moved1 moved2');
        $(".text8").removeClass('moved1 moved2');
        $(".text9").removeClass('moved1 moved2');
        $(".text10").removeClass('moved1 moved2');
        $(".text11").removeClass('moved1 moved2');
        $(".text12").removeClass('moved1 moved2');
        $(".text13").removeClass('moved1 moved2');
        $(".text14").removeClass('moved1 moved2');
    }
    $(".side-l").css("z-index", "4");
	$(".textLeft").css("z-index", "3");
	$(".side-r").css("z-index", "2");
	$(".textRight").css("z-index", "1");
}
var click4 = function() {
    if($(".text4").hasClass('moved2')){
        $(".text4").removeClass('moved2');
    } else {
        $(".text4").addClass('moved2');
        $(".text2").removeClass('moved2');
        $(".text3").removeClass('moved2');
        $(".text1").removeClass('moved2');
        $(".text5").removeClass('moved2');
        $(".text6").removeClass('moved2');
        $(".text7").removeClass('moved2');
        $(".text8").removeClass('moved1 moved2');
        $(".text9").removeClass('moved1 moved2');
        $(".text10").removeClass('moved1 moved2');
        $(".text11").removeClass('moved1 moved2');
        $(".text12").removeClass('moved1 moved2');
        $(".text13").removeClass('moved1 moved2');
        $(".text14").removeClass('moved1 moved2');
    }
    $(".side-l").css("z-index", "4");
	$(".textLeft").css("z-index", "3");
	$(".side-r").css("z-index", "2");
	$(".textRight").css("z-index", "1");
}
$('.but4').click(click4).hover(hover4);

var hover5 = function() {
    if($(".text5").hasClass('moved1')){
    	$(".text5").removeClass('moved1');
    } else {
        $(".text5").addClass('moved1');
        $(".text2").removeClass('moved1 moved2');
        $(".text3").removeClass('moved1 moved2');
        $(".text4").removeClass('moved1 moved2');
        $(".text1").removeClass('moved1 moved2');
        $(".text6").removeClass('moved1 moved2');
        $(".text7").removeClass('moved1 moved2');
        $(".text8").removeClass('moved1 moved2');
        $(".text9").removeClass('moved1 moved2');
        $(".text10").removeClass('moved1 moved2');
        $(".text11").removeClass('moved1 moved2');
        $(".text12").removeClass('moved1 moved2');
        $(".text13").removeClass('moved1 moved2');
        $(".text14").removeClass('moved1 moved2');
    }
    $(".side-l").css("z-index", "4");
	$(".textLeft").css("z-index", "3");
	$(".side-r").css("z-index", "2");
	$(".textRight").css("z-index", "1");
}
var click5 = function() {
    if($(".text5").hasClass('moved2')){
        $(".text5").removeClass('moved2');
    } else {
        $(".text5").addClass('moved2');
        $(".text2").removeClass('moved2');
        $(".text3").removeClass('moved2');
        $(".text4").removeClass('moved2');
        $(".text1").removeClass('moved2');
        $(".text6").removeClass('moved2');
        $(".text7").removeClass('moved2');
        $(".text8").removeClass('moved1 moved2');
        $(".text9").removeClass('moved1 moved2');
        $(".text10").removeClass('moved1 moved2');
        $(".text11").removeClass('moved1 moved2');
        $(".text12").removeClass('moved1 moved2');
        $(".text13").removeClass('moved1 moved2');
        $(".text14").removeClass('moved1 moved2');
    }
    $(".side-l").css("z-index", "4");
	$(".textLeft").css("z-index", "3");
	$(".side-r").css("z-index", "2");
	$(".textRight").css("z-index", "1");
}
$('.but5').click(click5).hover(hover5);

var hover6 = function() {
    if($(".text6").hasClass('moved1')){
    	$(".text6").removeClass('moved1');
    } else {
        $(".text6").addClass('moved1');
        $(".text2").removeClass('moved1 moved2');
        $(".text3").removeClass('moved1 moved2');
        $(".text4").removeClass('moved1 moved2');
        $(".text5").removeClass('moved1 moved2');
        $(".text1").removeClass('moved1 moved2');
        $(".text7").removeClass('moved1 moved2');
        $(".text8").removeClass('moved1 moved2');
        $(".text9").removeClass('moved1 moved2');
        $(".text10").removeClass('moved1 moved2');
        $(".text11").removeClass('moved1 moved2');
        $(".text12").removeClass('moved1 moved2');
        $(".text13").removeClass('moved1 moved2');
        $(".text14").removeClass('moved1 moved2');
    }
    $(".side-l").css("z-index", "4");
	$(".textLeft").css("z-index", "3");
	$(".side-r").css("z-index", "2");
	$(".textRight").css("z-index", "1");
}
var click6 = function() {
    if($(".text6").hasClass('moved2')){
        $(".text6").removeClass('moved2');
    } else {
        $(".text6").addClass('moved2');
        $(".text2").removeClass('moved2');
        $(".text3").removeClass('moved2');
        $(".text4").removeClass('moved2');
        $(".text5").removeClass('moved2');
        $(".text1").removeClass('moved2');
        $(".text7").removeClass('moved2');
        $(".text8").removeClass('moved1 moved2');
        $(".text9").removeClass('moved1 moved2');
        $(".text10").removeClass('moved1 moved2');
        $(".text11").removeClass('moved1 moved2');
        $(".text12").removeClass('moved1 moved2');
        $(".text13").removeClass('moved1 moved2');
        $(".text14").removeClass('moved1 moved2');
    }
    $(".side-l").css("z-index", "4");
	$(".textLeft").css("z-index", "3");
	$(".side-r").css("z-index", "2");
	$(".textRight").css("z-index", "1");
}
$('.but6').click(click6).hover(hover6);

var hover7 = function() {
    if($(".text7").hasClass('moved1')){
    	$(".text7").removeClass('moved1');
    } else {
        $(".text7").addClass('moved1');
        $(".text2").removeClass('moved1 moved2');
        $(".text3").removeClass('moved1 moved2');
        $(".text4").removeClass('moved1 moved2');
        $(".text5").removeClass('moved1 moved2');
        $(".text6").removeClass('moved1 moved2');
        $(".text1").removeClass('moved1 moved2');
        $(".text8").removeClass('moved1 moved2');
        $(".text9").removeClass('moved1 moved2');
        $(".text10").removeClass('moved1 moved2');
        $(".text11").removeClass('moved1 moved2');
        $(".text12").removeClass('moved1 moved2');
        $(".text13").removeClass('moved1 moved2');
        $(".text14").removeClass('moved1 moved2');
    }
    $(".side-l").css("z-index", "4");
	$(".textLeft").css("z-index", "3");
	$(".side-r").css("z-index", "2");
	$(".textRight").css("z-index", "1");
}
var click7 = function() {
    if($(".text7").hasClass('moved2')){
        $(".text7").removeClass('moved2');
    } else {
        $(".text7").addClass('moved2');
        $(".text2").removeClass('moved2');
        $(".text3").removeClass('moved2');
        $(".text4").removeClass('moved2');
        $(".text5").removeClass('moved2');
        $(".text6").removeClass('moved2');
        $(".text1").removeClass('moved2');
        $(".text8").removeClass('moved1 moved2');
        $(".text9").removeClass('moved1 moved2');
        $(".text10").removeClass('moved1 moved2');
        $(".text11").removeClass('moved1 moved2');
        $(".text12").removeClass('moved1 moved2');
        $(".text13").removeClass('moved1 moved2');
        $(".text14").removeClass('moved1 moved2');
    }
    $(".side-l").css("z-index", "4");
	$(".textLeft").css("z-index", "3");
	$(".side-r").css("z-index", "2");
	$(".textRight").css("z-index", "1");
}

var hover8 = function() {
    if($(".text8").hasClass('moved3')){
    	$(".text8").removeClass('moved3');
    } else {
        $(".text8").addClass('moved3');
        $(".text2").removeClass('moved3 moved4');
        $(".text3").removeClass('moved3 moved4');
        $(".text4").removeClass('moved3 moved4');
        $(".text5").removeClass('moved3 moved4');
        $(".text6").removeClass('moved3 moved4');
        $(".text7").removeClass('moved3 moved4');
        $(".text1").removeClass('moved3 moved4');
        $(".text9").removeClass('moved3 moved4');
        $(".text10").removeClass('moved3 moved4');
        $(".text11").removeClass('moved3 moved4');
        $(".text12").removeClass('moved3 moved4');
        $(".text13").removeClass('moved3 moved4');
        $(".text14").removeClass('moved3 moved4');
    }
    $(".side-l").css("z-index", "2");
	$(".textLeft").css("z-index", "1");
	$(".side-r").css("z-index", "4");
	$(".textRight").css("z-index", "3");
}
var click8 = function() {
    if($(".text8").hasClass('moved4')){
        $(".text8").removeClass('moved4');
    } else {
        $(".text8").addClass('moved4');
        $(".text2").removeClass('moved4');
        $(".text3").removeClass('moved4');
        $(".text4").removeClass('moved4');
        $(".text5").removeClass('moved4');
        $(".text6").removeClass('moved4');
        $(".text7").removeClass('moved4');
        $(".text1").removeClass('moved3 moved4');
        $(".text9").removeClass('moved3 moved4');
        $(".text10").removeClass('moved3 moved2');
        $(".text11").removeClass('moved3 moved4');
        $(".text12").removeClass('moved3 moved4');
        $(".text13").removeClass('moved3 moved4');
        $(".text14").removeClass('moved3 moved4');
    }
    $(".side-l").css("z-index", "2");
	$(".textLeft").css("z-index", "1");
	$(".side-r").css("z-index", "4");
	$(".textRight").css("z-index", "3");
}
$('.but8').click(click8).hover(hover8);

var hover9 = function() {
    if($(".text9").hasClass('moved3')){
    	$(".text9").removeClass('moved3');
    } else {
        $(".text9").addClass('moved3');
        $(".text2").removeClass('moved3 moved4');
        $(".text3").removeClass('moved3 moved4');
        $(".text4").removeClass('moved3 moved4');
        $(".text5").removeClass('moved3 moved4');
        $(".text6").removeClass('moved3 moved4');
        $(".text7").removeClass('moved3 moved4');
        $(".text1").removeClass('moved3 moved4');
        $(".text8").removeClass('moved3 moved4');
        $(".text10").removeClass('moved3 moved4');
        $(".text11").removeClass('moved3 moved4');
        $(".text12").removeClass('moved3 moved4');
        $(".text13").removeClass('moved3 moved4');
        $(".text14").removeClass('moved3 moved4');
    }
    $(".side-l").css("z-index", "2");
	$(".textLeft").css("z-index", "1");
	$(".side-r").css("z-index", "4");
	$(".textRight").css("z-index", "3");
}
var click9 = function() {
    if($(".text9").hasClass('moved4')){
        $(".text9").removeClass('moved4');
    } else {
        $(".text9").addClass('moved4');
        $(".text2").removeClass('moved4');
        $(".text3").removeClass('moved4');
        $(".text4").removeClass('moved4');
        $(".text5").removeClass('moved4');
        $(".text6").removeClass('moved4');
        $(".text7").removeClass('moved4');
        $(".text1").removeClass('moved3 moved4');
        $(".text8").removeClass('moved3 moved4');
        $(".text10").removeClass('moved3 moved2');
        $(".text11").removeClass('moved3 moved4');
        $(".text12").removeClass('moved3 moved4');
        $(".text13").removeClass('moved3 moved4');
        $(".text14").removeClass('moved3 moved4');
    }
    $(".side-l").css("z-index", "2");
	$(".textLeft").css("z-index", "1");
	$(".side-r").css("z-index", "4");
	$(".textRight").css("z-index", "3");
}
$('.but9').click(click9).hover(hover9);

var hover10 = function() {
    if($(".text10").hasClass('moved3')){
    	$(".text10").removeClass('moved3');
    } else {
        $(".text10").addClass('moved3');
        $(".text2").removeClass('moved3 moved4');
        $(".text3").removeClass('moved3 moved4');
        $(".text4").removeClass('moved3 moved4');
        $(".text5").removeClass('moved3 moved4');
        $(".text6").removeClass('moved3 moved4');
        $(".text7").removeClass('moved3 moved4');
        $(".text1").removeClass('moved3 moved4');
        $(".text9").removeClass('moved3 moved4');
        $(".text8").removeClass('moved3 moved4');
        $(".text11").removeClass('moved3 moved4');
        $(".text12").removeClass('moved3 moved4');
        $(".text13").removeClass('moved3 moved4');
        $(".text14").removeClass('moved3 moved4');
    }
    $(".side-l").css("z-index", "2");
	$(".textLeft").css("z-index", "1");
	$(".side-r").css("z-index", "4");
	$(".textRight").css("z-index", "3");
}
var click10 = function() {
    if($(".text10").hasClass('moved4')){
        $(".text10").removeClass('moved4');
    } else {
        $(".text10").addClass('moved4');
        $(".text2").removeClass('moved4');
        $(".text3").removeClass('moved4');
        $(".text4").removeClass('moved4');
        $(".text5").removeClass('moved4');
        $(".text6").removeClass('moved4');
        $(".text7").removeClass('moved4');
        $(".text1").removeClass('moved3 moved4');
        $(".text9").removeClass('moved3 moved4');
        $(".text8").removeClass('moved3 moved2');
        $(".text11").removeClass('moved3 moved4');
        $(".text12").removeClass('moved3 moved4');
        $(".text13").removeClass('moved3 moved4');
        $(".text14").removeClass('moved3 moved4');
    }
    $(".side-l").css("z-index", "2");
	$(".textLeft").css("z-index", "1");
	$(".side-r").css("z-index", "4");
	$(".textRight").css("z-index", "3");
}
$('.but10').click(click10).hover(hover10);

var hover11 = function() {
    if($(".text11").hasClass('moved3')){
    	$(".text11").removeClass('moved3');
    } else {
        $(".text11").addClass('moved3');
        $(".text2").removeClass('moved3 moved4');
        $(".text3").removeClass('moved3 moved4');
        $(".text4").removeClass('moved3 moved4');
        $(".text5").removeClass('moved3 moved4');
        $(".text6").removeClass('moved3 moved4');
        $(".text7").removeClass('moved3 moved4');
        $(".text1").removeClass('moved3 moved4');
        $(".text9").removeClass('moved3 moved4');
        $(".text10").removeClass('moved3 moved4');
        $(".text8").removeClass('moved3 moved4');
        $(".text12").removeClass('moved3 moved4');
        $(".text13").removeClass('moved3 moved4');
        $(".text14").removeClass('moved3 moved4');
    }
    $(".side-l").css("z-index", "2");
	$(".textLeft").css("z-index", "1");
	$(".side-r").css("z-index", "4");
	$(".textRight").css("z-index", "3");
}
var click11 = function() {
    if($(".text11").hasClass('moved4')){
        $(".text11").removeClass('moved4');
    } else {
        $(".text11").addClass('moved4');
        $(".text2").removeClass('moved4');
        $(".text3").removeClass('moved4');
        $(".text4").removeClass('moved4');
        $(".text5").removeClass('moved4');
        $(".text6").removeClass('moved4');
        $(".text7").removeClass('moved4');
        $(".text1").removeClass('moved3 moved4');
        $(".text9").removeClass('moved3 moved4');
        $(".text10").removeClass('moved3 moved2');
        $(".text8").removeClass('moved3 moved4');
        $(".text12").removeClass('moved3 moved4');
        $(".text13").removeClass('moved3 moved4');
        $(".text14").removeClass('moved3 moved4');
    }
    $(".side-l").css("z-index", "2");
	$(".textLeft").css("z-index", "1");
	$(".side-r").css("z-index", "4");
	$(".textRight").css("z-index", "3");
}
$('.but11').click(click11).hover(hover11);

var hover12 = function() {
    if($(".text12").hasClass('moved3')){
    	$(".text12").removeClass('moved3');
    } else {
        $(".text12").addClass('moved3');
        $(".text2").removeClass('moved3 moved4');
        $(".text3").removeClass('moved3 moved4');
        $(".text4").removeClass('moved3 moved4');
        $(".text5").removeClass('moved3 moved4');
        $(".text6").removeClass('moved3 moved4');
        $(".text7").removeClass('moved3 moved4');
        $(".text1").removeClass('moved3 moved4');
        $(".text9").removeClass('moved3 moved4');
        $(".text10").removeClass('moved3 moved4');
        $(".text11").removeClass('moved3 moved4');
        $(".text8").removeClass('moved3 moved4');
        $(".text13").removeClass('moved3 moved4');
        $(".text14").removeClass('moved3 moved4');
    }
    $(".side-l").css("z-index", "2");
	$(".textLeft").css("z-index", "1");
	$(".side-r").css("z-index", "4");
	$(".textRight").css("z-index", "3");
}
var click12 = function() {
    if($(".text12").hasClass('moved4')){
        $(".text12").removeClass('moved4');
    } else {
        $(".text12").addClass('moved4');
        $(".text2").removeClass('moved4');
        $(".text3").removeClass('moved4');
        $(".text4").removeClass('moved4');
        $(".text5").removeClass('moved4');
        $(".text6").removeClass('moved4');
        $(".text7").removeClass('moved4');
        $(".text1").removeClass('moved3 moved4');
        $(".text9").removeClass('moved3 moved4');
        $(".text10").removeClass('moved3 moved2');
        $(".text11").removeClass('moved3 moved4');
        $(".text8").removeClass('moved3 moved4');
        $(".text13").removeClass('moved3 moved4');
        $(".text14").removeClass('moved3 moved4');
    }
    $(".side-l").css("z-index", "2");
	$(".textLeft").css("z-index", "1");
	$(".side-r").css("z-index", "4");
	$(".textRight").css("z-index", "3");
}
$('.but12').click(click12).hover(hover12);

var hover13 = function() {
    if($(".text13").hasClass('moved3')){
    	$(".text13").removeClass('moved3');
    } else {
        $(".text13").addClass('moved3');
        $(".text2").removeClass('moved3 moved4');
        $(".text3").removeClass('moved3 moved4');
        $(".text4").removeClass('moved3 moved4');
        $(".text5").removeClass('moved3 moved4');
        $(".text6").removeClass('moved3 moved4');
        $(".text7").removeClass('moved3 moved4');
        $(".text1").removeClass('moved3 moved4');
        $(".text9").removeClass('moved3 moved4');
        $(".text10").removeClass('moved3 moved4');
        $(".text11").removeClass('moved3 moved4');
        $(".text12").removeClass('moved3 moved4');
        $(".text8").removeClass('moved3 moved4');
        $(".text14").removeClass('moved3 moved4');
    }
    $(".side-l").css("z-index", "2");
	$(".textLeft").css("z-index", "1");
	$(".side-r").css("z-index", "4");
	$(".textRight").css("z-index", "3");
}
var click13 = function() {
    if($(".text13").hasClass('moved4')){
        $(".text13").removeClass('moved4');
    } else {
        $(".text13").addClass('moved4');
        $(".text2").removeClass('moved4');
        $(".text3").removeClass('moved4');
        $(".text4").removeClass('moved4');
        $(".text5").removeClass('moved4');
        $(".text6").removeClass('moved4');
        $(".text7").removeClass('moved4');
        $(".text1").removeClass('moved3 moved4');
        $(".text9").removeClass('moved3 moved4');
        $(".text10").removeClass('moved3 moved2');
        $(".text11").removeClass('moved3 moved4');
        $(".text12").removeClass('moved3 moved4');
        $(".text8").removeClass('moved3 moved4');
        $(".text14").removeClass('moved3 moved4');
    }
    $(".side-l").css("z-index", "2");
	$(".textLeft").css("z-index", "1");
	$(".side-r").css("z-index", "4");
	$(".textRight").css("z-index", "3");
}
$('.but13').click(click13).hover(hover13);

var hover14 = function() {
    if($(".text14").hasClass('moved3')){
    	$(".text14").removeClass('moved3');
    } else {
        $(".text14").addClass('moved3');
        $(".text2").removeClass('moved3 moved4');
        $(".text3").removeClass('moved3 moved4');
        $(".text4").removeClass('moved3 moved4');
        $(".text5").removeClass('moved3 moved4');
        $(".text6").removeClass('moved3 moved4');
        $(".text7").removeClass('moved3 moved4');
        $(".text1").removeClass('moved3 moved4');
        $(".text9").removeClass('moved3 moved4');
        $(".text10").removeClass('moved3 moved4');
        $(".text11").removeClass('moved3 moved4');
        $(".text12").removeClass('moved3 moved4');
        $(".text13").removeClass('moved3 moved4');
        $(".text8").removeClass('moved3 moved4');
    }
    $(".side-l").css("z-index", "2");
	$(".textLeft").css("z-index", "1");
	$(".side-r").css("z-index", "4");
	$(".textRight").css("z-index", "3");
}
var click14 = function() {
    if($(".text14").hasClass('moved4')){
        $(".text14").removeClass('moved4');
    } else {
        $(".text14").addClass('moved4');
        $(".text2").removeClass('moved4');
        $(".text3").removeClass('moved4');
        $(".text4").removeClass('moved4');
        $(".text5").removeClass('moved4');
        $(".text6").removeClass('moved4');
        $(".text7").removeClass('moved4');
        $(".text1").removeClass('moved3 moved4');
        $(".text9").removeClass('moved3 moved4');
        $(".text10").removeClass('moved3 moved2');
        $(".text11").removeClass('moved3 moved4');
        $(".text12").removeClass('moved3 moved4');
        $(".text13").removeClass('moved3 moved4');
        $(".text8").removeClass('moved3 moved4');
    }
    $(".side-l").css("z-index", "2");
	$(".textLeft").css("z-index", "1");
	$(".side-r").css("z-index", "4");
	$(".textRight").css("z-index", "3");
}
$('.but14').click(click14).hover(hover14);

</script>

<?php get_footer(); ?>