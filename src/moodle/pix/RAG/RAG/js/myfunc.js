$(document).ready(function(){

$('.arrow').hide();
$('.showContent').hide();

var next=0
var previous=0
$(document).on('click','.nextControl',function(){

	next++;
	previous++
	if(next>0){
		$('.showContent').fadeIn(1200)
	}
	else{
		$('.showContent').fadeOut(1200)
	}
if(next==1){

	$('.arrow.one').fadeIn(1200);
	$('<p class=i'+next+'>Step 1: One instance of R1 is allocated to P1</p>').appendTo('.showContent');
}
if(next==2){

	$('.arrow.two').fadeIn(1200);
	$('<p class=i'+next+'>Step 2:One instance of R2 is allocated to P3 </p>').appendTo('.showContent');
}
if(next==3){

	$('.arrow.three').fadeIn(1200);
	$('<p class=i'+next+'>Step 3:One instance of R3 is allocated to P2</p>').appendTo('.showContent');
}
if(next==4){

	$('.arrow.four').fadeIn(1200);
	$('<p class=i'+next+'>Step 4:One instance of R3 is allocated to P1</p>').appendTo('.showContent');
}

if(next==5){

	$('.arrow.five').fadeIn(1200);
	$('<p class=i'+next+'>Step 5:P2 requests an instance of R1</p>').appendTo('.showContent');
	
}
if(next==6){
$('<p class=i'+next+'>Step 6:The request of P2 can be granted when P1 finishes using the instance  of R1 and releases it</p>').appendTo('.showContent');
}
if(next==7){

	$('.arrow.one').fadeOut(1200);
	$('<p class=i'+next+'>Step 7:P1 releases R1</p>').appendTo('.showContent');
	
}
if(next==8){
var now=0;
var k=$( document ).width();
if(k>800)
{
now=47;
}
else{
	now=71;
	}
$('.arrow.five').removeClass('rotateBack');
	$('.arrow.five').addClass('rotate');
	$('<p class=i'+next+'>Step 8:P2 is granted its request and one instance of R1 is allocated to it.</p>').appendTo('.showContent');
	$('.arrow.five').css('-webkit-transform','rotate('+now+'deg)'); 
      $('.arrow.five').css('-moz-transform','rotate('+now+'deg)');
      $('.arrow.five').css('transform','rotate('+now+'deg)');
	

}
if(next==9){

	$('.arrow.six').fadeIn(1200);
	$('<p class=i'+next+'>Step 9:One instance of R4 is allocated to P2</p>').appendTo('.showContent');
	
}
if(next==10){

	$('.arrow.seven').fadeIn(1200);
	$('<p class=i'+next+'>Step 10:P3 requests an instance for R4</p>').appendTo('.showContent');
	
}
if(next==11){

	$('.arrow.eight').fadeIn(1200);
	$('<p class=i'+next+'>Step 11:P2 requests an instance of R2</p>').appendTo('.showContent');
	
}
if(next==12){
//seven six eight two
var path='images/arrowRed.png'
$('.arrow.eight img').fadeOut(1000)
$('.arrow.seven img').fadeOut(1000)
$('.arrow.six img').fadeOut(1000)
$('.arrow.two img').fadeOut(1000)
	$('.arrow.eight img').attr('src',path).fadeIn(1000);
	$('.arrow.seven img').attr('src',path).fadeIn(1000);
	$('.arrow.six img').attr('src',path).fadeIn(1000);
	$('.arrow.two img').attr('src',path).fadeIn(1000);
	$('.circle.two').addClass('box-shadow');
	$('.circle.three').addClass('box-shadow');
	$('.rectangle.two').addClass('box-shadow');
	$('.rectangle.four').addClass('box-shadow');
	$('<p class=i'+next+'>Step 12:A cycle is formed <strong>P2,R2,P3,R4</strong>.  P3 is waiting for P2 to release R4 and P2 is waiting for P3 to release R2. This is a <strong>DEADLOCK</strong> situation Cycle in resource allocation graph indicated deadlock!</p>').appendTo('.showContent');
	
}
if(next<0  || next>12){
	next=0;
	previous=0;
	var path='images/arrow.png'
$('.arrow').fadeOut(1200);
$('.showContent').fadeOut(1200);	
$('.showContent').empty();
$('.circle, .rectangle').removeClass('box-shadow');
	$('.arrow.eight img').attr('src',path).fadeIn(1000);
	$('.arrow.seven img').attr('src',path).fadeIn(1000);
	$('.arrow.six img').attr('src',path).fadeIn(1000);
	$('.arrow.two img').attr('src',path).fadeIn(1000);
}

});

$(document).on('click','.previousControl',function(){
	
if(previous==1){

	
	$('p').last().fadeOut(1200);
	$('.arrow.one').fadeOut(1200);
	$('.i'+previous).remove();
	}


if(previous==2){

	$('.arrow.two').fadeOut(1200);
	$('.i'+previous).remove();
}
if(previous==3){

	$('.arrow.three').fadeOut(1200);
	$('.i'+previous).remove();
}
if(previous==4){

	$('.arrow.four').fadeOut(1200);
	$('.i'+previous).remove();
}
if(previous==5){

	$('.arrow.five').fadeOut(1200);
	$('.i'+previous).remove();
	
}
if(previous==6){
	$('.i'+previous).remove();
}
if(previous==7){

	$('.arrow.one').fadeIn(1200);
	$('.i'+previous).remove();
	
}
if(previous==8){
var now=0;
var k=$( document ).width();
if(k>800)
{
now=247;
}
else{
	now=251;
	}
$('.arrow.five').removeClass('rotate');
	$('.arrow.five').addClass('rotateBack');
	$('.i'+previous).remove();
	
	$('.arrow.five').css('-webkit-transform','rotate('+now+'deg)'); 
      $('.arrow.five').css('-moz-transform','rotate('+now+'deg)');
      $('.arrow.five').css('transform','rotate('+now+'deg)');
	

}
if(previous==9){

	$('.arrow.six').fadeOut(1200);
	$('.i'+previous).remove();
	
}
if(previous==10){

	$('.arrow.seven').fadeOut(1200);
	$('.i'+previous).remove();
	
}
if(previous==11){

	$('.arrow.eight').fadeOut(1200);
	$('.i'+previous).remove();
}
if(previous==12){
//seven six eight two
var path='images/arrow.png'
$('.arrow.eight img').fadeOut(1000)
$('.arrow.seven img').fadeOut(1000)
$('.arrow.six img').fadeOut(1000)
$('.arrow.two img').fadeOut(1000)
	$('.arrow.eight img').attr('src',path).fadeIn(1000);
	$('.arrow.seven img').attr('src',path).fadeIn(1000);
	$('.arrow.six img').attr('src',path).fadeIn(1000);
	$('.arrow.two img').attr('src',path).fadeIn(1000);
	$('.circle, .rectangle').removeClass('box-shadow');
	$('.i'+previous).empty();
	
}

next--;
previous--;
if(previous < 0 || previous > 12){

	next=0;
previous=0;
var path='images/arrow.png'
$('.arrow').fadeOut(1200);
$('.showContent').fadeOut(1200);	
$('.showContent').empty();
$('.circle, .rectangle').removeClass('box-shadow');
	$('.arrow.eight img').attr('src',path).fadeIn(1000);
	$('.arrow.seven img').attr('src',path).fadeIn(1000);
	$('.arrow.six img').attr('src',path).fadeIn(1000);
	$('.arrow.two img').attr('src',path).fadeIn(1000);
}
if(next>0){
		$('.showContent').fadeIn(1200)
	}
	else{
		$('.showContent').fadeOut(1200)
	}	
	});

$(document).on('click','.resetControl',function(){
previous=0;
next=0;
var path='images/arrow.png'
$('.arrow').fadeOut(1200);
$('.showContent').fadeOut(1200);	
$('.showContent').empty();
$('.circle, .rectangle').removeClass('box-shadow');
	$('.arrow.eight img').attr('src',path).fadeIn(1000);
	$('.arrow.seven img').attr('src',path).fadeIn(1000);
	$('.arrow.six img').attr('src',path).fadeIn(1000);
	$('.arrow.two img').attr('src',path).fadeIn(1000);
});	
});
