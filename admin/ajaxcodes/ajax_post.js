var xmlhttp;
 function GetXMLHttp()
 {
	 if(window.XMLHttpRequest)
	 {
		 return new(XMLHttpRequest);
	 }
	 if(window.ActiveXObject)
	 {
		 return new ActiveXObject("Microsoft.XMLHTTP");
	 }
 }
 function select_patientss(str)
 {
	 xmlhttp=GetXMLHttp();
	 if(xmlhttp==null)
	 {
		 alert("Empty Result");
	 }
	 var url="select_post.php";
	 url=url+"?x="+str;
	 xmlhttp.onreadystatechange= function()
	 {
		 if(xmlhttp.readyState==4)
		 {
			 document.getElementById("tableds").innerHTML=xmlhttp.responseText;
		 }
	 }
	 xmlhttp.open("GET",url,true);
	 xmlhttp.send(null);
 }