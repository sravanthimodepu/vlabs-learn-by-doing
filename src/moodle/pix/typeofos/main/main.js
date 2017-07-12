// JavaScript Document
var mb1=document.getElementById('mb1');
var mb2=document.getElementById('mb2');
var mb3=document.getElementById('mb3');
var mb4=document.getElementById('mb4');
var aud=document.getElementById('aud1');





function screen2(){
	//console.log(aud.currentTime() );
	
	var iframe=document.getElementById('iframe');
	iframe.src="../typeofos.html";
	//setTimeout(function() { screen3() },29000);	
	}

function screen3(){
	var iframe=document.getElementById('iframe');
	iframe.src="../screen2.html";
	//setTimeout(function() { screen4() },12000);	
	}
	
	
function screen4(){
	var iframe=document.getElementById('iframe');
	iframe.src="../screen3.html";
	//setTimeout(function() { screen5() },18000);	
	}
	
function screen5(){
	var iframe=document.getElementById('iframe');
	iframe.src="../screen4.html";
	//setTimeout(function() { screen2() },24000);	
	}
	
	function reset(){location.reload();
		
		}
setTimeout(function() { mainfunc() },4000);	

function mainfunc(){
//var vid = document.getElementById('aud1');
//vid.autoplay = true;
//vid.load();
screen2();
}



