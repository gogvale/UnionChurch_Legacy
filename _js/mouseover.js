/*	Drop Down Function */
sfHover = function() {
	var sfEls = document.getElementById("nav").getElementsByTagName("LI");
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);



/*	MouseOver Function */
var offSuffix = "_off";
var hovSuffix = "_hov";

function roll(e, img)		//Rolls image based on event state and current image
{
	switch (e.type)
		{
		case "mouseover":return display(true, img);break;
		case "mouseout" :return display(false,img);break;
		}
		
	return true;
}

function display(state,img)		//Rolls image based on explicit state and current image
{
	var imgSrc,posDot;
	if((posDot=(imgSrc=new String(img.src)).lastIndexOf('.'))<0)return true;
	switch (state + imgSrc.toLowerCase().substring(posDot-4,posDot))
		{
		case "true_off"  :img.src = imgSrc.substring(0,posDot-4)+ hovSuffix + imgSrc.substring(posDot,imgSrc.length);break;
		case "false_hov" :img.src = imgSrc.substring(0,posDot-4)+ offSuffix + imgSrc.substring(posDot,imgSrc.length);break;
		}
	return true;
}

function preloadRoll()			//Loads all rollover images in background
{
	var imgSrc,loc,dex;
	for (dex=0;dex<document.images.length;dex++)
		{
			imgSrc=new String(document.images[dex].src);
			if((loc=imgSrc.lastIndexOf('.'))<0)return true;
			if(imgSrc.toLowerCase().substring(loc-4,loc)== offSuffix)
			{
				(new Image()).src=imgSrc.substring(0,loc-4) + hovSuffix + imgSrc.substring(loc,imgSrc.length);
			}
		}
	return true;
}

window.onload = preloadRoll;