<?php
$validatename="";
$validateemail="";
$validatecheckbox="";
$validateradio="";
$v1=$v2=$v3="";
$name=$email=$gender=""; 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
if(empty($_REQUEST["name"]) || (strlen($_REQUEST["name"])<3))
{
    $validatename= "Name required";

}
else
{
    $name=$_REQUEST["name"];
}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="Email required";
}
else{
    $validateemail= "Your email is ".$email;
}
if(!isset($_REQUEST["vehicle1"])&&!isset($_REQUEST["vehicle2"])&&!isset($_REQUEST["vehicle3"]))
{
    $validatecheckbox = "Please select at least one checkbox";
    
}
else{
   if(isset($_REQUEST["vehicle1"]))
   {
       $v1= $_REQUEST["vehicle1"];
   }
   if(isset($_REQUEST["vehicle2"]))
   { 
       $v2= $_REQUEST["vehicle2"];
   }
   if(isset($_REQUEST["vehicle3"]))
   {
    $v3= $_REQUEST["vehicle3"];
   }
}
if(isset($_REQUEST["gender"]))
{
    $validateradio= $_REQUEST["gender"];
}
else{
    $validateradio= "Please select at least one radio";
}

}
?>
<?php
   	

	   $formdata = array(
	      'First name'=> $_POST["name"],
	      'Last name'=> $_POST["name1"],
	      'Age'=>$_POST["number"],
	      'Email'=> $_POST["email"],
          'Pasword'=> $_POST["pass"],
          'Designation'=> $_POST["fav_language"],
          
	   );
       $existingdata = file_get_contents('mydata.json');
       $tempJSONdata = json_decode($existingdata);


       $tempJSONdata[] =$formdata; 
      
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT); 

	 
	   if(file_put_contents("mydata.json", $jsondata)) { 
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";



     
?>
