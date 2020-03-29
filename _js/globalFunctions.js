function newWindow(filename, w,h){  
        popWin = window.open(filename,"popup","height="+h+",width="+w+",scrollbars=yes, resize=no, leftmargin=0, topmargin=0", "dependent") ; popWin.focus ("popup");
}


function closePopUp () {
		if (popWin.document) {
			popWin.close(); return false;	}
			}


function goTo(URL) {
	location.href = URL;
		}
		
function voidThis() {}


function killError() {
  		return true;
		}

window.onerror = killError;

window.defaultStatus = ""


function findPosX(obj)
{
	var curleft = 0;
	if (obj.offsetParent)
	{
		while (obj.offsetParent)
		{
			curleft += obj.offsetLeft
			obj = obj.offsetParent;
		}
	}
	else if (obj.x)
		curleft += obj.x;
	return curleft;
}

function findPosY(obj)
{
	var curtop = 0;
	if (obj.offsetParent)
	{
		while (obj.offsetParent)
		{
			curtop += obj.offsetTop
			obj = obj.offsetParent;
		}
	}
	else if (obj.y)
		curtop += obj.y;
	return curtop;
}

function getURLVar(urlVarName) {

	var urlHalves = String(document.location).split('?');
	var urlVarValue = '';
	
	if(urlHalves[1]){

		var urlVars = urlHalves[1].split('&');
	//loop over the list, and find the specified url variable
		for(i=0; i<=(urlVars.length); i++){
			if(urlVars[i]){
				var urlVarPair = urlVars[i].split('=');
				
				if (urlVarPair[0] && urlVarPair[0] == urlVarName) {
					urlVarValue = urlVarPair[1];
				}
			}
		}
	}
	
	return urlVarValue; 
	
}