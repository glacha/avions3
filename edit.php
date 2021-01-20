<?php

if ( session_id() === "" ) { session_start(); }

//session_start();

include 'startDB.php';

$databaseID = $_GET['index'];

//print $databaseID;

$query = "SELECT * FROM plane WHERE p_ID = $databaseID";
$res = $conn->query($query);


?>

<html>

<head>

<style>

.myButton {
	box-shadow:inset 0px 1px 0px 0px #97c4fe;
	background:linear-gradient(to bottom, #3d94f6 5%, #1e62d0 100%);
	background-color:#3d94f6;
	border-radius:6px;
	border:1px solid #337fed;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 7px;
	text-decoration:none;
	text-shadow:0px 1px 0px #1570cd;
	width: 95px;
	text-align: center;
	margin: 3px;
}
.myButton:hover {
	background:linear-gradient(to bottom, #1e62d0 5%, #3d94f6 100%);
	background-color:#1e62d0;
}
.myButton:active {
	position:relative;
	top:1px;
}	


textarea { 

	display:block;
	border-radius: 5px;
 	resize: none;


}	

.remarks {

	width: 295px;

}



#contenu {
	width: 100%;
	background-color: #E9E7F5;
	height: 450px;
	
}

#main {

width: 870px;


background-color: #E9E7F5;
padding-top: 2px;
padding: 5px;
}

.borderBottom {
	
	border-bottom-right-radius: 5px;
	border-bottom-left-radius: 5px;

	border-bottom: solid white 2px; 
	border-right: solid white 2px; 
	border-left: solid white 2px; 
	 

}


*:focus {
  outline: none;
  border-color: black;
}

div input {

	border: solid black 1px;
	color: black;
	font-size: 13px;
	height: 25px;
	border-radius: 3px;
}

.styleTables {

	background: linear-gradient(to top, #a3aec2 0%, #c2c9d6 100%);
	border: solid black 1px;
	border-radius: 5px;
	height: 55px;

}

input.middle:focus {
    outline-width: 0;
}

.styleLinks {

	color: navy;
	text-decoration: none;
	margin-right: 16px;

}

body {

	background-color: #E9E7F5;
	font-family: 'PT Serif', serif;

}

#styleInput {

	padding: 0px;
	margin: 0px;
	border-bottom-color: solid black 2px;	
	

}

.borderBottom {

	border-bottom-color: #BBBBBB;


}

.styleBottomTable {

	border: solid white 2px;
	border-radius: 5px;

}

.myRed {
  background-color: #F2B0B0;
}

#hide {

	padding: 5px;
	background-color: #ffe6e6;
	color: black;
	border-radius: 6px;
	border: solid red 1px;
	margin-top: 2px;
	height: auto;
	font-size: 14px;

}

#hideRed { 

	padding: 5px;
	background-color: #ffe6e6;
	color: black;
	border-radius: 6px;
	border: solid red 1px;
	margin-top: 6px;
	height: 18px;
	font-size: 14px;

}

#yellow {

	padding: 5px;
	background-color: #FEF9E7;
	color: black;
	border-radius: 6px;
	border: solid yellow 1px;
	margin-top: 2px;
	height: 15px;
	font-size: 14px;

}

#hideGreen{

	padding: 5px;
	background-color: #e6f9e5;
	color: black;
	border-radius: 6px;
	border: solid green 1px;
	margin-top: 6px;
	height: 18px;
	font-size: 14px;
}


#warningRed {

	padding: 5px;
	color: black;
	border-radius: 6px;
	border: solid red 1px;
	margin-top: 6px;
	height: 18px;

}

.stylePageHeading {

	padding-left: 12px;
	padding-right: 12px;
	background-image: linear-gradient(#EEEEEE, #AAAAAA);
	border: solid white 3px;
	color: black;
	border-radius: 5px;
	font-size: 14px;

}

#yellowWarning {

	padding: 5px;
	color:black;
	background-color: yellow;
	color: black;
	border-radius: 6px;
	border: solid green 1px;
	margin-top: 6px;
	
	font-size: 14px;
	width: 462px;

}

#subInput {

  	border: solid green 0.2px;
  	background-color: orange;
  	border-radius: 5px;


}


#redInput {

	padding: 5px;
	background-color: #ffe6e6;
	color: black;
	border-radius: 6px;
	border: solid red 1px;
	margin-top: 6px;
	height: 18px;
	font-size: 14px;
	width: 440px;
	margin-left: 28px;
	margin-bottom: 12px;

}

.styleNumOfRecords {

	background-color: #4A71AD;
	color: white;
	
	padding-top: 0px;
	
	padding-left: 9px;
	padding-right: 9px;
	border-radius: 5px;
	margin-top: 10px;
	margin-bottom: 10px;


}

.styleMenu {

	text-decoration: none;
	color: white;
	margin: 6px;
}

#childWrap {

	width: 900px;
	background-color: #466289;
	
	text-align: right;


}

body {

	background-color: #E9E7F5;
	font-family: 'PT Serif', serif;

}


</style>	

<link rel="stylesheet" href="styles.css">
<link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">

<script src="c.js"></script>

<script src="a.js"></script>

<script src="ac.js"></script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script type="text/javascript" src="test.js"></script>


<script>

var x = document.referrer;
let filename = x.split('/').pop();
//alert (filename);



$(document).ready(function(){

	$('input[name="check[]"]').on('change', function() {
	  $(this).closest('tr').toggleClass('myRed', $(this).is(':checked'));
	});

});

function hideYellowMessage () {

	document.getElementById('message').style.display='none';
	document.getElementById("flight").focus();

}

function makeLink(r) {

	alert('hello there.');

}

function hideYellowBox() {

	document.getElementById('yellow').style.display='none';
	document.getElementById('hide').style.display='none';

}


// begining of import fuctions for route and flight auto population
function checkForDuplicates() {
 
  var str = document.getElementById("flight").value; 

  //alert(str);

  var xhttp;
  if (str == "") {
  		document.getElementById("message").innerHTML = "";  
    return;
  } 

  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	document.getElementById("message").innerHTML = this.responseText;
    	document.getElementById('redInput').style.display='none';
    }
  };
  xhttp.open("GET", "lookup.php?q="+str, true);
  xhttp.send();
}

// end of import

var first;
var second;
var third;

//begining section for FROM 

function complete(){

	var inputValue = document.getElementById("codeField").value;

	//swith to uppercase
	var inputValue = inputValue.toUpperCase();

	if (inputValue.length >= 1) {

		//document.getElementById("airline").value = "guy";

		//search throught array with inputvalue

		searchJS(inputValue);


	} 		 
}

function searchJS(code){

	for( var i = 0, len = c_code.length; i < len; i++ ) {
	    if( c_code[i][0] === code ) {

	    	first = c_code[i][0];
	    	second = c_code[i][1];
	    	third = c_code[i][2];

	    	document.getElementById("codeField").value = first;
	    	document.getElementById("airline").value = second;
	    	document.getElementById("city2").value = third;

	    	//document.getElementById("route").focus();


	        //alert(first);
			//alert(second);
			//alert(third);


	        break;
	    }
	}

	

}	

function erase(){

	document.getElementById("airline").value = "";
	document.getElementById("city").value = "";
	document.getElementById("codeField").value = "";

}


// END section for FROM

//begining section for TO 

var firstTO;
var secondTO;
var thirdTO;

function completeTO(){

	var inputValueTO = document.getElementById("codeFieldTO").value;

	//swith to uppercase
	var inputValueTO = inputValueTO.toUpperCase();

	if (inputValueTO.length >= 1) {

		//document.getElementById("airline").value = "guy";

		//search throught array with inputvalue

		searchJSTO(inputValueTO);


	} 		 
}

function searchJSTO(code){

	for( var i = 0, len = c_code.length; i < len; i++ ) {
	    if( c_code[i][0] === code ) {

	    	firstTO = c_code[i][0];
	    	secondTO = c_code[i][1];
	    	thirdTO = c_code[i][2];

	    	document.getElementById("codeFieldTO").value = firstTO;
	    	document.getElementById("airlineTO").value = secondTO;
	    	document.getElementById("cityTO").value = thirdTO;

	    	//document.getElementById("flight").focus();

	        //alert(first);
			//alert(second);
			//alert(third);


	        break;
	    }
	}

	

}	

function eraseTO(){

	document.getElementById("airlineTO").value = "";
	document.getElementById("cityTO").value = "";
	document.getElementById("codeFieldTO").value = "";

}

// END section for TO

//begining section for A_code and A_name

var firstA;
var secondA;
var thirdA;

function completeA(){

	var inputValueA = document.getElementById("codeFieldA").value;

	//swith to uppercase
	var inputValueA = inputValueA.toUpperCase();

	if (inputValueA.length >= 0) {

		//document.getElementById("airline").value = "guy";

		//search throught array with inputvalue

		searchJSA(inputValueA);


	} 		 
}



function searchJSA(codeA){

	for( var i = 0, len = a_code.length; i < len; i++ ) {
	    if( a_code[i][0] === codeA ) {

	    	firstA = a_code[i][0];
	    	secondA = a_code[i][1];
	    	thirdA = a_code[i][2];

	    	document.getElementById("codeFieldA").value = firstA;
	    	document.getElementById("airlineA").value = secondA;
	    	document.getElementById("city").value = thirdA;

	    	//document.getElementById("flight").focus();

	        //alert(first);
			//alert(second);
			//alert(third);


	        break;
	    }
	}

	

}	

function eraseA(){

	document.getElementById("airlineA").value = "";
	//document.getElementById("cityA").value = "";
	document.getElementById("codeFieldA").value = "";

}


// END section of A_code, and A_name 


//begining section for AC_code and AC_name

var firstAC;
var secondAC;
//var thirdAC;

function completeAC(){

	var inputValueAC = document.getElementById("codeFieldAC").value;

	//swith to uppercase
	inputValueAC = inputValueAC.toUpperCase();

	if (inputValueAC.length >= 1) {

		//document.getElementById("airline").value = "guy";

		//search throught array with inputvalue

		searchJSAC(inputValueAC);


	} 		 
}



function searchJSAC(codeAC){;


	for( var i = 0, len = ac_code.length; i < len; i++ ) {
	    if( ac_code[i][0] === codeAC ) {

	    	secondAC = ac_code[i][1];
	    	thirdAC = ac_code[i][2];

	    	
	    	temp = document.getElementById("codeFieldAC").value;
	    	temp = temp.toUpperCase();
	    	document.getElementById("codeFieldAC").value = temp;

	    	document.getElementById("airlineAC").value = secondAC;

	    	document.getElementById("type").value = thirdAC;


	    	break;
	    }
	}

	

}	

function eraseAC(){

	document.getElementById("airlineAC").value = "";
	document.getElementById("codeFieldAC").value = "";

}


// END of AC_CODE




//highlight section

function highlight (field) {




	document.getElementById('codeField').style.backgroundColor = "white";
	//document.getElementById('airline').style.backgroundColor = "white";
	//document.getElementById('city').style.backgroundColor = "white";

	document.getElementById('codeFieldTO').style.backgroundColor = "white";
	//document.getElementById('airlineTO').style.backgroundColor = "white";
	//document.getElementById('cityTO').style.backgroundColor = "white";

	document.getElementById('codeFieldA').style.backgroundColor = "white";
	//document.getElementById('a_name').style.backgroundColor = "white";
	document.getElementById('flight').style.backgroundColor = "white";
	document.getElementById('route').style.backgroundColor = "white";

	document.getElementById('codeFieldAC').style.backgroundColor = "white";
	//document.getElementById('ac_name').style.backgroundColor = "white";
	document.getElementById('frequency').style.backgroundColor = "white";
	document.getElementById('remarks').style.backgroundColor = "white";
	//document.getElementById('subInput').style.backgroundColor = "#AAAAAA";

	document.getElementById('subInput').style.backgroundColor = "orange";




	document.getElementById(field).style.backgroundColor = "white";

	if (field === "subInput") {

		document.getElementById('subInput').style.backgroundColor = "orange";
		//document.getElementById(field).style.color = "white";

	}
	
}



function setColors () {

	document.getElementById('airline').style.backgroundColor = "#CCCCCC";
	document.getElementById('city').style.backgroundColor = "#CCCCCC";
	document.getElementById('airlineTO').style.backgroundColor = "#CCCCCC";
	document.getElementById('cityTO').style.backgroundColor = "#CCCCCC";
	document.getElementById('airlineA').style.backgroundColor = "#CCCCCC";
	document.getElementById('airlineAC').style.backgroundColor = "#CCCCCC";
	document.getElementById('type').style.backgroundColor = "#CCCCCC";
	document.getElementById('city2').style.backgroundColor = "#CCCCCC";
	document.getElementById('subInput').style.backgroundColor = "#fbab60";


}


$(function(){



 $('#focusguard-1').on('focus', function() {
  $('#subInput').focus();
});



});

$(document).keyup(function(e) {
     if (e.key === "Escape") { // escape key maps to keycode `27`
        location.reload()
    }
});

function populateRoute() {

	var dep = document.getElementById("codeField").value;
	var des = document.getElementById("codeFieldTO").value;

	if ((dep != "") && (des != "")) {

		var routeField = dep + "-" + des;

		//alert(routeField);
		document.getElementById("route").value = routeField;

	}

	document.getElementById('redInput').style.display='none';

}

function hideRedWarning() {

	document.getElementById('warningRed').style.display='none';

}

function populateFlight() {

	var airlineCodeInput = document.getElementById("codeFieldA").value; 
	var airlineNameInput = document.getElementById("airlineA").value; 	

	if (airlineNameInput != "") {

		document.getElementById("flight").value = airlineCodeInput;
		document.getElementById("flight").focus();

	}

} 

function validateData() {


document.getElementById('redInput').style.display='none';	

/* set all borders to black
document.getElementById("codeField").style.bordercolor = "black";	
document.getElementById("codeFieldTO").style.bordercolor = "black";
document.getElementById("codeFieldA").style.bordercolor = "black";
document.getElementById("flight").style.bordercolor = "black";
document.getElementById("route").style.bordercolor = "black";
document.getElementById("codeFieldAC").style.bordercolor = "black";
document.getElementById("frequency").style.bordercolor = "black";

document.getElementById("codeField").style.backgroundColor = "white";	
document.getElementById("codeFieldTO").style.backgroundColor = "white";
document.getElementById("codeFieldA").style.backgroundColor = "white";
document.getElementById("flight").style.backgroundColor = "white";
document.getElementById("route").style.backgroundColor = "white";
document.getElementById("codeFieldAC").style.backgroundColor = "white";
document.getElementById("frequency").style.backgroundColor = "white";

*/


 //retrieve input values from form
 var depCode = document.getElementById("codeField").value;

 var depName = document.getElementById("airline").value; 

 var desCode = document.getElementById("codeFieldTO").value;
 var desName = document.getElementById("airlineTO").value;

 var airlineName = document.getElementById("airlineA").value;
 var airlineCode = document.getElementById("codeFieldA").value;


 var flightInput = document.getElementById("flight").value;
 var flightLength = flightInput.length;

 var routeInput = document.getElementById("route").value;

 var aircraftName = document.getElementById("airlineAC").value;
 var aircraftCode = document.getElementById("codeFieldAC").value;


// check if frequency field is a number between 1 and 9
 var frequencyInput = document.getElementById("frequency").value;
 var parse = parseInt(frequencyInput);
 var frequencyCharCount = Number.isInteger(parse);

 
 if ((depName === "") || (depCode === "")){

 	//alert('helo');

 	document.getElementById("redInput").innerHTML = "<div align=top><font color=black size=2><img src='images/delete.jpg' width=16>&nbsp;&nbsp;&nbsp;PLEASE ENTER A VALID AIRLINE CODE IN THE DEPARTURE BOX.</font></div>";

 	document.getElementById('redInput').style.display='block';


 	//document.getElementById("codeField").style.backgroundColor = "white";

 	document.getElementById("codeField").style.bordercolor = "red";
 	document.getElementById("codeField").focus();
 	
 	return false;

 }
 else if ((desName === "") || (desCode === "")) {

 	document.getElementById("redInput").innerHTML = "<div align=top><font color=black size=2><img src='images/delete.jpg' width=16>&nbsp;&nbsp;&nbsp;PLEASE ENTER AN AIRLINE CODE IN THE DESTINATION BOX.</font></div>";

 	document.getElementById('redInput').style.display='block';

 	document.getElementById("codeFieldTO").style.bordercolor = "red";
 	document.getElementById("codeFieldTO").focus();
 	
 	return false;
 }
 else if ((airlineName === "") || (airlineCode === "")) {

 	document.getElementById("redInput").innerHTML = "<div align=top><font color=black size=2><img src='images/delete.jpg' width=16>&nbsp;&nbsp;&nbsp;PLEASE ENTER AN AIRLINE CODE IN THE APPROPRIATE BOX.</font></div>";
 	document.getElementById('redInput').style.display='block';

 	document.getElementById("codeFieldA").style.bordercolor = "red";
 	document.getElementById("codeFieldA").focus();
 	
 	return false;
 }
 else if (flightLength <= 2) {

 	document.getElementById("redInput").innerHTML = "<div align=top><font color=black size=2><img src='images/delete.jpg' width=16>&nbsp;&nbsp;&nbsp;PLEASE ENTER AN VALID FLIGHT VALUE.</font></div>";
 	document.getElementById('redInput').style.display='block';

 	document.getElementById("flight").style.bordercolor = "red";
 	document.getElementById("flight").focus();
 	
 	return false;
 }
  else if (routeInput === "") {

 	document.getElementById("redInput").innerHTML = "<div align=top><font color=black size=2><img src='images/delete.jpg' width=16>&nbsp;&nbsp;&nbsp;PLEASE ENTER A ROUTE VALUE.</font></div>";
 	document.getElementById('redInput').style.display='block';

 	document.getElementById("route").style.bordercolor = "red";
 	document.getElementById("route").focus();
 	
 	return false;
 }
else if ((aircraftName === "") || (aircraftCode === "")) {

	document.getElementById("redInput").innerHTML = "<div align=top><font color=black size=2><img src='images/delete.jpg' width=16>&nbsp;&nbsp;&nbsp;PLEASE ENTER AN AIRCRAFT CODE IN THE APPROPRIATE BOX.</font></div>";
	document.getElementById('redInput').style.display='block';
	document.getElementById("codeFieldAC").style.bordercolor = "red";
	document.getElementById("codeFieldAC").focus();

return false;

}

else if (frequencyInput === "") {

 	document.getElementById("redInput").innerHTML = "<div align=top><font color=black size=2><img src='images/delete.jpg' width=16>&nbsp;&nbsp;&nbsp;PLEASE ENTER A VALID FREQUENCY VALUE.</font></div>";
 	document.getElementById('redInput').style.display='block';

 	document.getElementById("frequency").style.bordercolor = "red";
 	document.getElementById("frequency").focus();
 	
 	return false;
 }

 else if (frequencyCharCount === false) {

 	document.getElementById("redInput").innerHTML = "<div align=top><font color=black size=2><img src='images/delete.jpg' width=16>&nbsp;&nbsp;&nbsp;PLEASE ENTER A FREQUENCY VALUE BETWEEN 1 AND 9</font></div>";
 	document.getElementById('redInput').style.display='block';

 	document.getElementById("frequency").style.bordercolor = "red";
 	document.getElementById("frequency").focus();
 	
 	return false;

 }
 else {

 	return true;

 }

}

function link(i) {


	document.getElementById("route").value = i;

	//var x = document.getElementById("hideRed");
	//x.style.display = "none";

	document.getElementById("route").focus();

	
 	

}


function completeRoute() {

	var x = document.getElementById("hide");
	x.style.display = "none";

	var y = document.getElementById("hideGreen");
	y.style.display = "none";

	var u = document.getElementById("redInput");
	u.style.display = "none";
	

}

function delay() {

	//alert('hello');
	document.getElementById('hideRed').style.display='none';
	//document.getElementById('hideGreen').style.display='none';

}

function delayGreen() {

	//alert('hello');
	document.getElementById('hideGreen').style.display='none';
	//document.getElementById('hideGreen').style.display='none';

}

function hideRedNotification() {

	document.getElementById('redInput').style.display='none';


}



function startAtZero() {

	//document.getElementById('flight').value = '';
	document.getElementById('flight').focus();
	document.getElementById('hide').style.display='none';


}



</script>

</head>

<body onload="setColors(); setTimeout(delay, 5000); setTimeout(delayGreen, 5000); hideRedNotification();">

<!--heading starts here-->
<center>	
	<div style="width: 100%; background-color: #466289;">
		<div style="height: 75px; padding-left: 25px; width: 900px;">
			<div>
				<div style="float: left; padding-top: 24px;">
					<img src="images/plane.png" height="75" style="padding-right: 9px;">
				</div>	
				<div class="title" style="padding-top: 0px; font-size: 40px; vertical-align: top; padding-top: 25px;">
					<font style="word-spacing: 6px; font-size: 33px;">OFFICIAL AIRLINE GUIDE</font><font size=3 style="padding-left: 12px; word-spacing: 4px;">DATA TOOL</font>
				</div>	
				<div style="padding-top: 6px; float: right;">
					<a class="mybutton" href="index.php">DATA ENTRY</a>
					<a class="myButton" href="query.php">SEARCH</a>
				</div>
			</div>	
		</div>
	</div>		
</center>	

<div id="mainBar" style="margin-bottom: 5px;"></div><br>

<!--heading ends here-->

<?php

if ($res->num_rows > 0) {

if ($row = $res->fetch_assoc()) {

?>
<center>
<table style="width: 904px; margin-left: 25px; margin-bottom: 0px;">
	<tr style="width: 904px;">	
		<td style="text-align: left; padding-left: 1px; padding: 0px;">
			MODIFYING CURRENT RECORD
		</td>
		<td style="text-align: right; padding-left: 1px; color: darkorange; font-size: 20px; text-shadow: 1px 1px 1px tomato;">
			EDITING RECORD
		</td>
	</tr>		
</table>
<table style="width: 904px; margin-left: 30px; border: solid black 1px; margin-bottom: 25px;" rules=all>
	<tr style="background-color: #466289; border:solid black 1px; padding: 8em; color: white;">
		<td align="center">CODE</td><td style="text-align: left; padding-left: 15px;">DEPARTURE</td><td align="center">CODE</td><td style="text-align: left; padding-left: 15px;">DESTINATION</td><td style="text-align: left; padding-left: 15px;">FLIGHT#</td><td align=center>FRQ</td><td align="left" style="padding-left: 12px;">ROUTE</td><td align="center" style="text-align: left; padding-left: 15px;">AC</td>
	</tr>
	<tr class="borderBottom" class="fade" style="border: solid black 1px; border-bottom-color: black; background-color: white;">
		<td align="center" style="text-align: left; padding-left: 15px;">
			<?=$row['p_dep_code'];?>
		</td>
		<td style="text-align: left; padding-left: 15px;">
			<?=$row['p_dep_city'];?>
		</td>	
		<td align="center">
			<?=$row['p_des_code'];?>
		</td>
		<td style="text-align: left; padding-left: 15px;">
			<?=$row['p_des_city'];?>
		</td>
		<td style="text-align: left; padding-left: 15px;">
			<?=$row['p_flight'];?>
		</td>
		<td align=center>
			<?=$row['p_frequency'];?>
		</td>
		<td align='left' style="padding-left: 12px;">
			<?=$row['p_route'];?>
		</td>
		<td align="center">
			<?=$row['p_aircraft_code'];?>
		</td>
	</tr>
</table>
<div style="width: 910px; text-align: right;">

</center>	

<?php

  	//retreive values from main page.
	$dep_code = $row["p_dep_code"];
	$dep_city = $row["p_dep_city"];
	$dep_country = $row["p_dep_country"];

	$des_code = $row["p_des_code"];
	$des_city = $row["p_des_city"];
	$des_country = $row["p_des_country"];

	$airline_code = $row["p_airline_code"];
	$airline_name = $row["p_airline_name"];
	$airline_country = $row["p_airline_country"];

	$flight = $row["p_flight"];

	//make var $flight uppercase.
	$flight = strtoupper($flight);


	$route = $row["p_route"];
	$frequency = $row["p_frequency"];

	$aircraft_code = $row["p_aircraft_code"];
	$aircraft_name = $row["p_aircraft_name"];

	$type = $row["p_type"];
	$remarks = $row["p_remarks"];

  }
} 

?>


<!--<form method="get" id="rowsForm" action="updateRecord.php">-->
	

<!--END OF RECORDS TABLE-->

<center>

<?php	if (isset($_SESSION['message'])) {
?>
			<div id="hideGreen" style="margin-bottom: 10px; height: 23px; margin-top: 0px; width: 884px; border-radius: 4px; border: solid green 0.5px; background-color: #e6ffe7; margin-left: 30px; padding-top: 0px; padding-right: 10px;">
				<div style="float: left; padding-top: 4px;"><img src="images/check.jpg" width=20 style="float: left; margin: 0px; padding-right: 5px;">
<?php						
					print $_SESSION['message'];
					unset($_SESSION['message']);

?>				</div>
			</div>
<?php	}
			
?>	


<form method="get" action="updateRecord.php" onsubmit="return validateData();">

<div id="contenu" styles="font-family: Courier;">
	<div id="main">
		<div class="paper_help_note" onFocus="document.querySelector('.autofocus2').focus()"></div>

		<input type="hidden" name="ID" value="<?php echo $databaseID;?>">

		<div id="focusguard-1" tabindex="0"></div>
		<!--FROM FIELDS-->
		<div style="float: left;">DEPARTURE</div>
		<table class="styleTables" style="padding: 0px; border: solid black 1px; background-color: #B3BCCC; width: 900px; padding-left: 9px; border-radius: 0px; height: 55px; background: linear-gradient(to top, #a3aec2 0%, #c2c9d6 100%);">
			<tr>
				<td style="padding-left: 29px; padding-top: 5px; padding-right: 5px;">
					<font style="font-size: 14px; padding-right: 24px;">CODE</font>
					<input value="<?php echo $dep_code;?>" onblur="populateRoute();" onblur="hideRedWarning();" autocomplete="off" name="dep_code" class="autofocus1" tabindex="1" autofocus id="codeField" onfocus="highlight('codeField');" maxlength="3" style="width:40px; margin-right: 12px;" type="text" onkeyup="complete();">
					CITY <input value="<?php echo $dep_city;?>" name="dep_city" id="airline" style="width:275px; margin-right: 25px; margin-left: 9px;" readonly type="text" width="100">
					COUNTRY <input value="<?php echo $dep_country;?>" id="city2" name="dep_country" style="width:278px; padding-right: 0px; margin-left: 3px;" readonly type="text">
				</td>
				


				<!--<td>
					ROUTE <input type="text" style="width: 40px; margin: 10px;" id="route" onfocus="highlight('route');">
				</td>-->	
			</tr>	
		</table>		

		<!--TO FIELDS-->
		<div style="float: left; margin-top: 7px;">DESTINATION</div>
		<table class="styleTables" style="padding: 0px; border: solid black 1px; background-color: #B3BCCC; width: 900px; padding-left: 9px; border-radius: 2px; height: 55px;">
			<tr>
				<td style="padding-left: 29px; padding-top: 5px; padding-right: 5px;">
					<font style="font-size: 14px; padding-right: 24px;">CODE</font><input value="<?php echo $des_code;?>" onblur="populateRoute();" autocomplete="off" name="des_code" onblur="hideRedWarning();" tabindex="2" autofocus id="codeFieldTO" onfocus="highlight('codeFieldTO');" maxlength="3" style="width:40px; margin-right: 15px;" type="text" onkeyup="completeTO();">
					CITY <input value="<?php echo $des_city;?>" name="des_city" id="airlineTO" style="width: 275px; margin-right: 25px; margin-left: 9px;" readonly type="text">
					COUNTRY <input value="<?php echo $des_country;?>" name="des_country" id="cityTO" style="width: 278px; margin-right: 0px; margin-left: 3px;" readonly type="text">
				</td>
			<!--	<td>
					FLIGHT <input type="text" style="width: 40px; margin: 10px;" id="flight" onfocus="highlight('flight');">
				</td>	-->
			</tr>	
		</table>
		<div style="float: left; padding: 3px;">OTHER FIELDS</div>

		<table class="styleTable" style="background-color: #B3BCCC; padding-bottom: 6px; width: 900px; padding: 0px; padding-left: 9px; height: 55px; border: solid black 1px; border-radius: 5px;" rules="none">
			<tr>
				<td style="padding: 0px; padding-left: 31px; padding-top: 14px; width: 108px;">
					<font style="font-size: 13px;">AIRLINE</font><input value="<?php echo $airline_code;?>" onblur="hideRedWarning();"autocomplete="off" name="airline_code" maxlength="2" tabindex="3" type="text" id="codeFieldA" style="width: 50px; margin-left: 18px;" onfocus="highlight('codeFieldA');" onkeyup="completeA();" onblur="populateFlight();">	
				</td>
				<td style="padding-top: 12px; width: 356px;">
					<font style="font-size: 14px; padding-top: 14px;">NAME</font><input value="<?php echo $airline_name;?>" name="airline_name" type="text" readonly id="airlineA" style="width: 270px; margin-left: 12px;">
				</td>
				<td width="3" style="text-align: left; border-right: solid black 1px; padding-top: 12px;" colspan="2">
					
					COUNTRY <input value="<?php echo $airline_country;?>" name="airline_country" id="city" style="width:278px; padding-right: 0px;" readonly type="text">

					<!--REMARKS <input  tabindex="5" type="textarea" class="remarks" id="remarks" style="margin-left: 10px;" onfocus="highlight('remarks');">-->
				</td>	
			</tr>
			<tr>	
				<td style="padding-left: 50px; width: 108px; height: 35px; padding-top: 6px;">
					
					
					<!--Route : <input type="text" id="route">-->


					<font size="2">FLIGHT</font><input value="<?php echo $flight;?>" onblur="hideRedWarning();" maxlength="6" autocomplete="off" name="flight" id="flight" oninput="checkForDuplicates();" tabindex="4" type="text" style="width: 50px; margin: 4px;" onfocus="highlight('flight'); startAtZero();">
					<!--<font style="font-size: 12px; margin-right:2px;">AIRCRAFT</font><input tabindex="4" type="text" id ="codeFieldAC" style="width: 40px; margin: 8px;" onfocus="highlight('codeFieldAC');" onkeyup="completeAC();" maxlength="3">	
				
				-->
				</td>
				<td style="padding-top: 12px;">	
					<font size="2">ROUTE</font><input value="<?php echo $route;?>" onblur="hideRedWarning();" autocomplete="off" name="route" tabindex="5" type="text" style="width: 270px; margin-left: 10px;" id="route" onfocus="highlight('route');" onkeyup="completeRoute();">	
					<!--<font style="font-size: 14px;">NAME</font><input type="text" disabled id="airlineAC" style="width: 280px; margin: 10px;">-->
				</td>
				<td style="padding-top: 12px; padding-right: 14px; width: 125px;">

					<font size="2">FREQUENCY</font><input value="<?php echo $frequency;?>" onblur="hideRedWarning();" autocomplete="off" name="frequency" tabindex="7" style="width: 40px;" type="text" id="frequency" onfocus="highlight('frequency');" maxlength=1>
					<!--<font size="2">FREQUENCY</font><input tabindex="7" type="text" style="width: 47px; margin: 8px;" id="frequency" onfocus="highlight('frequency');">
					

					
					<font size="2">FLIGHT</font><input tabindex="8" type="text" style="width: 47px; margin: 8px;" id="flight" onfocus="highlight('flight');">
					<font size="2">ROUTE</font><input tabindex="9" type="text" style="width: 47px; margin: 8px;" id="route" onfocus="highlight('route');">	
				
					<font size="2">FREQUENCY</font><input tabindex="6" type="text" style="width: 42px; margin: 10px;" id="frequency" onfocus="highlight('frequency');">
					<font size="2">FLIGHT</font><input tabindex="7" type="text" style="width: 40px; margin: 10px;" id="flight" onfocus="highlight('flight');">
					<font size="2">ROUTE</font><input tabindex="8" type="text" style="width: 42px; margin: 10px;" id="route" onfocus="highlight('route');">
					-->
				</td>
				<td rowspan="2" style="vertical-align: top; padding-top: 10px;">
					REMARKS
					<textarea value="<?php echo $remarks;?>" autocomplete="off" tabindex="8" name="remarks" id="remarks" onfocus="highlight('remarks');" style="width: 216px; height: 41px; vertical-align: top; border: solid black 1px;" noresize></textarea>
				</td>		

			</tr>
			<tr>
				<td style="padding-left: 0px; text-align: right; width: 100px; vertical-align: top;" valign="top">
					
					<font style="font-size: 12px; margin-right:2px;">AIRCRAFT</font><input value="<?php echo $aircraft_code;?>" onblur="hideRedWarning();" autocomplete="off" name="aircraft_code" tabindex="6" type="text" id ="codeFieldAC" style="width: 50px; margin: 8px; text-align: left;" onfocus="highlight('codeFieldAC');" onkeyup="completeAC();" maxlength="3">	

					<!--
					<font size="2">REMARKS <input  tabindex="5" type="textarea" class="remarks" id="remarks" style="margin-left: 7px; margin-right: 10px;" onfocus="highlight('remarks');">
					TYPE <input type="text" style="width: 43px;" disabled id="type" tabindex="6"><br><br>
					-->
				</td>	
				<td>
					<font style="font-size: 14px;">NAME</font><input value="<?php echo $aircraft_name;?>" name="aircraft_name" type="text" readonly id="airlineAC" style="width: 273px; margin: 8px;">
				</td>

				<td style="padding: 0px; padding-left: 33px;">			
					TYPE <input value="<?php echo $type;?>" name="type" type="text" style="width: 43px;" readonly id="type">
				</td>
						
			</tr>
			<tr>
				<td colspan="2">
					<div id="message"></div>
					<div id="redInput"></div>
				</td>	
				<td colspan="2" style="padding-bottom: 12px; padding-right: 11px; padding-left: 70px;">
					<input class="autofocus2" id="subInput" onfocus="highlight('subInput');" tabindex="10" type="submit" value="UPDATE RECORD" style="height: 25px; width: 290px; color: black; float: right; margin-right: 14px; border: solid black 1px; background-color: orange;">
				</td>	
			</tr>	
		</table>
	</div>	

	</div>	
	<div tabindex=11 onFocus="document.querySelector('.autofocus1').focus()"></div>

	<div style="margin-bottom: 0px; height: 5px; margin-top: 60px; background-image: linear-gradient(#EEEEEE, grey);"></div>
	<div style="height: 100%; width: 100%; background-color: #466289; margin-bottom: 0px;"></div>
	
</div>	



</form>

</body>




</html>

<?php

include 'endDB.php';

?>

