function formValidation()
{
	var factName=document.getElementById("factName").value;	
	var interest=document.getElementById("interest").value;
	var tempdesig=document.getElementById("designation");
	var designation = tempdesig.options[tempdesig.selectedIndex].value;

	if(factName=="" && interest=="" && designation=="")
	{
		document.getElementById('error').innerHTML="Insert al least one data";
		return false;
	}
	else
	{
	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
     	 document.getElementById("display").innerHTML = this.responseText;
    	}
		else
		{
			 document.getElementById("display").innerHTML = this.status;
		}
  	};


   xhttp.open("POST", "/FTLabExam/control.php", true);
   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xhttp.send("factName="+factName+"&interest="+interest+"&designation="+designation);
  }

}