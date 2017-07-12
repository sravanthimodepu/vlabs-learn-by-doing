function endaudio(){var alertdiv=document.createElement('div');
alertdiv.id='alertdiv';
alertdiv.style.backgroundColor="black"
alertdiv.style.position="fixed";
alertdiv.style.opacity=0.9;
alertdiv.style.width="100%";
alertdiv.style.height="85%";
alertdiv.style.display="block";

var alertbox=document.createElement('div');
alertbox.id='alertbox';
alertbox.style.backgroundColor="white"
alertbox.style.position="absolute";
alertbox.style.opacity=0.9;
alertbox.style.width="30%";
alertbox.style.height="20%";
alertbox.style.top="30%";
alertbox.style.left="35%";
alertbox.style.display="block";
alertdiv.appendChild(alertbox);

var closebtn=document.createElement('div');

closebtn.id='clsbtn';
closebtn.style.backgroundImage="url"+"(img/cls.png)";

closebtn.style.backgroundSize="100% 100% ";
closebtn.style.backgroundPosition="Cover"
closebtn.style.position="absolute";

closebtn.style.width="10%";
closebtn.style.height="20%";
closebtn.style.top="-7%";
closebtn.style.left="94%";
closebtn.style.display="block";
alertbox.appendChild(closebtn);

var content=document.createElement('div');
content.id='clsbtn';

content.style.backgroundImage="url"+"(img/pop.png)";

content.style.backgroundSize="100% 100% ";
content.style.backgroundPosition="Cover"

content.style.position="relative";
content.style.width="100%";
content.style.height="30%";
content.style.top="35%";
content.style.left="0%";
content.style.display="block";
alertbox.appendChild(content);

/*
closebtn.id='clsctn';
closebtn.style.backgroundImage="url"+"(img/cls.png)";

closebtn.style.backgroundSize="100% 100% ";
closebtn.style.backgroundPosition="Cover"
closebtn.style.position="absolute";

closebtn.style.width="10%";
closebtn.style.height="20%";
closebtn.style.top="45%";
closebtn.style.left="94%";
closebtn.style.display="block";
alertbox.appendChild(closebtn);
*/
document.body.appendChild(alertdiv);
document.body.appendChild(alertbox);

closebtn.onmouseup=function(){
	closebtn.style.backgroundImage="url"+"(img/cls_c.png)";
		};
closebtn.onmouseout=function(){
	closebtn.style.backgroundImage="url"+"(img/cls.png)";
		};
		
closebtn.onclick=function(){
	document.body.removeChild(alertbox);
	document.body.removeChild(alertdiv);
	}
	
}