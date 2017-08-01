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
	<div class="smallCont cont1"><button class="contButton but1">Hi</button></div>
	<div class="smallCont cont2"><button class="contButton but2">Hello</button></div>
	<div class="smallCont cont3"><button class="contButton but3">Hey there</button></div>
	<div class="smallCont cont4"><button class="contButton but4">Hey there</button></div>
	<div class="smallCont cont5"><button class="contButton but5">Hey there</button></div>
	<div class="smallCont cont6"><button class="contButton but6">Hey there</button></div>
	<div class="smallCont cont7"><button class="contButton but7">Hey there</button></div>
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
<div class="bigCont side-r"></div>


<script>
$('.but1').click(function(){
    if($(".text1").hasClass('moved')){
        $(".text1").removeClass('moved');
    } else {
        $(".text1").addClass('moved');
        $(".text2").removeClass('moved');
        $(".text3").removeClass('moved');
        $(".text4").removeClass('moved');
        $(".text5").removeClass('moved');
        $(".text6").removeClass('moved');
        $(".text7").removeClass('moved');
    }
});
$('.but2').click(function(){
    if($(".text2").hasClass('moved')){
        $(".text2").removeClass('moved');
    } else {
        $(".text2").addClass('moved');
        $(".text1").removeClass('moved');
        $(".text3").removeClass('moved');
        $(".text4").removeClass('moved');
        $(".text5").removeClass('moved');
        $(".text6").removeClass('moved');
        $(".text7").removeClass('moved');
    }
});
$('.but3').click(function(){
    if($(".text3").hasClass('moved')){
        $(".text3").removeClass('moved');
    } else {
        $(".text3").addClass('moved');
        $(".text1").removeClass('moved');
        $(".text2").removeClass('moved');
        $(".text4").removeClass('moved');
        $(".text5").removeClass('moved');
        $(".text6").removeClass('moved');
        $(".text7").removeClass('moved');
    }
});
$('.but4').click(function(){
    if($(".text4").hasClass('moved')){
        $(".text4").removeClass('moved');
    } else {
        $(".text4").addClass('moved');
        $(".text1").removeClass('moved');
        $(".text2").removeClass('moved');
        $(".text3").removeClass('moved');
        $(".text5").removeClass('moved');
        $(".text6").removeClass('moved');
        $(".text7").removeClass('moved');
    }
});
$('.but5').click(function(){
    if($(".text5").hasClass('moved')){
        $(".text5").removeClass('moved');
    } else {
        $(".text5").addClass('moved');
        $(".text1").removeClass('moved');
        $(".text2").removeClass('moved');
        $(".text4").removeClass('moved');
        $(".text3").removeClass('moved');
        $(".text6").removeClass('moved');
        $(".text7").removeClass('moved');
    }
});
$('.but6').click(function(){
    if($(".text6").hasClass('moved')){
        $(".text6").removeClass('moved');
    } else {
        $(".text6").addClass('moved');
        $(".text1").removeClass('moved');
        $(".text2").removeClass('moved');
        $(".text4").removeClass('moved');
        $(".text5").removeClass('moved');
        $(".text3").removeClass('moved');
        $(".text7").removeClass('moved');
    }
});
$('.but7').click(function(){
    if($(".text7").hasClass('moved')){
        $(".text7").removeClass('moved');
    } else {
        $(".text7").addClass('moved');
        $(".text1").removeClass('moved');
        $(".text2").removeClass('moved');
        $(".text4").removeClass('moved');
        $(".text5").removeClass('moved');
        $(".text6").removeClass('moved');
        $(".text3").removeClass('moved');
    }
});
</script>

<?php get_footer(); ?>