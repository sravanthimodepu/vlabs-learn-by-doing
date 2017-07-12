// JavaScript Document

$(document).ready(page1);

function page1(){
	
	var start ;
	start=0;
	document.getElementById("ost").style.height="50%"
	
	
	var j1,j2,j3,arr,arr1,arr2;
	j1=document.getElementById("j1");
	j2=document.getElementById("j2");
	j3=document.getElementById("j3");
	arr=document.getElementById("arr");
	arr1=document.getElementById("arr1");
	arr2=document.getElementById("arr2");
j1.style.left="5%";
j1.style.top="33%";
j1.style.width="5%";
j1.style.height="5%";
j2.style.left="5%";
j2.style.top="42%";
j2.style.width="5%";
j2.style.height="5%";
j3.style.left="5%";
j3.style.top="50%";
j3.style.width="5%";
j3.style.height="5%";
j1.style.visibility="visible";
			j2.style.visibility="visible";
			j3.style.visibility="visible";
j1.src="img/j1.png";
			j2.src="img/j2.png";
			j3.src="img/j3.png";
arr.style.visibility="hidden";
			arr1.style.visibility="hidden";
			arr2.style.visibility="hidden";
			
	$('#start').mousedown(function(e) {

	document.getElementById("start").style.backgroundImage="url(img/start_ov.png)";
	    	  
    });

$('#start').mouseup(function(e) {
		
	document.getElementById("start").style.backgroundImage="url(img/start.png)";
	    	  
    });
$('#start').click(function(eve)
{
playanim();
	
	});
	$('#reset').mousedown(function(e) {

	document.getElementById("reset").style.backgroundImage="url(img/refresh1.png)";
	    	  
    });

$('#reset').mouseup(function(e) {
		
	document.getElementById("reset").style.backgroundImage="url(img/refresh.png)";
	    	  
    });
	$('#reset').click(function(eve2)
{
	location.reload();
	
});
	};
	function go(){
		
	setInterval(function animate(){
		
		
		if (parseInt(j1.style.left,10)<=26){
			console.log(j1.style.left)
		document.getElementById("ost").style.height=parseInt(document.getElementById("ost").style.height,10)-1+"%";
		
		j1.style.left=parseInt(j1.style.left,10)+1+"%";
		//j1.style.top=parseInt(j1.style.top,10)+1+"%";
		//j1.style.width=parseInt(j1.style.width,10)-.01+"%";
		//j1.style.height=parseInt(j1.style.height,10)-.01+"%";
		j2.style.left=parseInt(j2.style.left,10)+1+"%";
	//	j2.style.top=parseInt(j2.style.top,10)+1+"%";
		
		j3.style.left=parseInt(j3.style.left,10)+1+"%";
		//j3.style.top=parseInt(j3.style.top,10)+1+"%";
		}else if (parseInt(j1.style.left,10)>26){
			j1.src="img/j1_c.png";
			j2.src="img/j2_c.png";
			j3.src="img/j3_c.png";
			go2();
			}
		},150);
		
	}
	function go2(){
		
		setInterval(function animate(){
		if (parseInt(j1.style.left,10)<=45){
			console.log(j1.style.left)
			
		j1.style.left=parseInt(j1.style.left,10)+1+"%";
		j1.style.top=parseInt(j1.style.top,10)-1+"%";
		//j1.style.width=parseInt(j1.style.width,10)-.01+"%";
		//j1.style.height=parseInt(j1.style.height,10)-.01+"%";
		j2.style.left=parseInt(j2.style.left,10)+1+"%";
	j2.style.top=parseInt(j2.style.top,10)-1+"%";
		
		j3.style.left=parseInt(j3.style.left,10)+1+"%";
		//j3.style.top=parseInt(j3.style.top,10)+1+"%";
		}else if (parseInt(j1.style.left,10)>42){
			j1.style.visibility="hidden";
			j2.style.visibility="hidden";
			j3.style.visibility="hidden";
			b1.src="img/b1_c.png";
			
			b3.src="img/b3_c.png";
			go3();
			}
		},5000);
		
		}
function go3(){
arr.style.visibility="visible";
			arr1.style.visibility="visible";
			arr2.style.visibility="visible";
}

function playanim(){
	
	start=1;
if (start==1){
start=0;
go();}
	}

setTimeout(function() { playanim() },2000);	