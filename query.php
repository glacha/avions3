<?php

include 'startDB.php';

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>

	function start() {

	//hide 2nd condition.
	var hideFirst = document.getElementById("un");
	var hideSecond = document.getElementById("deux");
	

	hideFirst.style.display = "block";
	hideSecond.style.display = "none";
		
	}

	function choseAmount() {

    var e = document.getElementById("conditions");
    var result = e.options[e.selectedIndex].value;
    
    var hideFirst = document.getElementById("un");
	var hideSecond = document.getElementById("deux");
	

	hideFirst.style.display = "none";
	hideSecond.style.display = "none";
	

	if (result == '1') {

   		hideFirst.style.display = "block";

   	}
   	else if (result == '2') {

   		hideFirst.style.display = "block";
   		hideSecond.style.display = "block";

   	}
  
}

function myFunctionOnBlur() {
  var x = document.getElementById("firstUpperCase");
  x.value = x.value.toUpperCase();
}

function myFunctionOnBlurSecond() {
  var x = document.getElementById("secondUpperCase");
  x.value = x.value.toUpperCase();
}

function checkValidation() {

	document.getElementById('first').style.borderColor = "black";
	document.getElementById('second').style.borderColor = "black";
	document.getElementById('headers').style.borderColor = "black";

	firstBox = document.getElementById("first").value 
	secondBox = document.getElementById("second").value; 
	fields = document.getElementById("headers").value;

	var n = document.getElementById("headers").options.length;

	empty = true;

	for (var i = 0;i < n; i++){
        if (document.getElementById("headers").options[i].selected === true){
        	empty = false;
        }     
    }


	if (firstBox == "") {

		document.getElementById('first').style.borderColor = "red";
		document.getElementById("message").innerHTML = "PLEASE ENTER A VALUE IN THE HIGHLIGHTED BOX.";
		document.getElementById("first").focus();

		return false;

	}
	else if (secondBox == "") {

		document.getElementById('second').style.borderColor = "red";
		document.getElementById("message").innerHTML = "PLEASE ENTER A VALUE IN THE HIGHLIGHTED BOX.";
		document.getElementById("second").focus();


		return false;

	} else if (empty == true) {

		document.getElementById('headers').style.borderColor = "red";
		document.getElementById("message").innerHTML = "PLEASE ENTER AT LEAST ONE FIELD IN YOUR SEARCH.";
		document.getElementById("headers").focus();

		return false;

	}
	else {

		return true;

	}


}
/*

function highlight (field) {

	document.getElementById('first').style.borderColor = "black";
	document.getElementById('second').style.borderColor = "black";
	document.getElementById('headers').style.borderColor = "black";

	document.getElementById(field).style.borderColor = "red";

}

*/

function setColors () {

	document.getElementById('first').style.borderColor = "black";
	document.getElementById('second').style.borderColor = "black";
	document.getElementById('third').style.borderColor = "black";

	//document.getElementById("myDiv").style.borderColor = "red";


}


/*
function loadDoc() {

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };

  var fieldToSearch = document.getElementById("one").value;


  var newVar = "fetchArray.php?field=" + fieldToSearch;

   //alert(newVar);

  xhttp.open("GET", newVar, true);
  xhttp.send();
}


*/

</script>

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


	.mainTable {

		width: 900px;
		padding: 10px;
		background: linear-gradient(to top, #a3aec2 0%, #c2c9d6 100%);
		border: solid black 1px;
	}
	#one {
		width: 270px;
		height: 24px;
		border: solid black 1px;
		margin-left: 10px;
		margin-right: 10px;
		
	}

	#two {
		width: 270px;
		height: 24px;
		border: solid black 1px;
		margin-left: 10px;
		margin-right: 10px;

	}

	.inputField {

		width: 270px;
		height: 24px;
		border-radius: 2px;
		margin-left: 10px;
		margin-right: 10px;

	}

	body {
		background-color: #E9E7F5;
		margin: 0px;

	}

	#mainWrap {

		width: 100%;
		background-color: #466289;
		vertical-align: top;
	
	}

	#childWrap {

		width: 900px;
		background-color: #466289;
		
		text-align: right;
	}

	.title {

	float: left;
	font-size: 40px;
	padding-bottom: 0px;
	padding-top: 0px;
	color: white;
	
	}

	#mainBar {

	height: 8px;
	background-image: linear-gradient(#EEEEEE, #CCCCCC);

	}

	span {

		margin: 9px;

	}

	#lowerForm {
		width: 900px;	
		padding: 10px;
		background: linear-gradient(to top, #a3aec2 0%, #c2c9d6 100%);
			
		float: left;
	}

	#subInput {

  	border: solid green 0.2px;
  	background-color: lightgreen;
  	border-radius: 5px;


	}

	.styleMenu {

	text-decoration: none;
	font-color: white;
	margin: 5px;
	color: white;





}

</style>

<body onLoad="start(); setColors();">

<!--heading starts here-->
<center>
	<div style="width: 100%; background-color: #466289;">
	
		<div id="childWrap" style="height: 75px; padding-left: 25px; width: 900px;">
			<div>
				<div style="float: left; padding-top: 24px;">
					<img src="images/plane.png" height="75" style="padding-right: 9px;">
				</div>	
				<div class="title" style="padding-top: 10px; vertical-align: top; padding-top: 25px;">
					<font style="word-spacing: 6px; font-size: 33px;">OFFICIAL AIRLINE GUIDE</font><font size=3 style="padding-left: 12px; word-spacing: 4px;">DATA TOOL</font>
				</div>	
				<div style="padding-top: 6px; float: right;">
					<!--<span class="stylePageHeading">DATA ENTRY</span>-->
					<a class="mybutton" href="index.php">DATA ENTRY</a>
					<a class="myButton" href="query.php">SEARCH</a>
				</div>
			</div>	
		</div>	
			
	</div>
</center>		




<div id="mainBar" style="margin-bottom: 5px;"></div>

<!--heading ends here-->
<center>
<table style="width: 733px; margin-left: 25px; margin-bottom: 7px; float:left;">
	<tr style="width: 733px;">	
		<td style="text-align: right; padding-left: 1px; color: green; font-size: 21px; text-shadow: 1px 1px 1px lightgreen;">
			SEARCH DATABASE
		</td>
	</tr>		
</table>

<form method='get' action="queryResults.php" onsubmit="return checkValidation();"> 


<div style="width: 900px;">	

<div>
	<div style="float: left; font-size: 16px;">
		CONDITION #1
	</div>
	<div style="float: right; font-size: 16px; padding-bottom: 4px;">
		SEARCH DATABASE WITH
		<select name="numConditions" id="conditions" onchange="choseAmount();">
		  <option value="1" selected>ONE</option>
		  <option value="2">TWO</option>
		</select>
		CONDITION(s)
	</div>	
</div>

<center>

<div id="un">
	<table class="mainTable" style="margin-bottom: 10px;">
		<tr>
			<td>
				SEARCH 
				<select id="one" name="conditionOne">
				  <option value="p_dep_code">DEPARTURE CODE</option>
				  <option value="p_dep_city">DEPARTURE CITY</option>
				  <option value="p_dep_country">DEPARTURE COUNTRY</option>
				  <option value="p_des_code">DESTINATION CODE</option>
				  <option value="p_des_city">DESTINATION CITY</option>
				  <option value="p_des_country">DESTINATION COUNTRY</option>
				  <option value="p_airline_code">AIRLINE CODE</option>
				  <option value="p_airline_name">AIRLINE NAME</option>
				  <option value="p_airline_country">AIRLINE COUNTRY</option>
				  <option value="p_flight">FLIGHT</option>
				  <option value="p_route">ROUTE</option>
				  <option value="p_frequency">FREQUENCY</option>
				  <option value="p_aircraft_code">AIRCRAFT CODE</option>
				  <option value="p_aircraft_name">AIRCRAFT NAME</option>
				  <option value="p_type">TYPE</option>
				  <option value="p_remarks">REMARKS</option>
				</select> FIELD 

				HAVING A VALUE OF 
				<input id="first" type="text" name="firstCondition" class="inputField" autocomplete="off" id="firstUpperCase" onblur="myFunctionOnBlur();">
			</td>	
		</tr>
	</table>
</div>
</center>

<div id="deux">	
	<div style="text-align: left; font-size: 16px;">CONDITION #2</div>
	<table class="mainTable" style="margin-bottom: 14px;">
		<tr>
			<td>
				SEARCH 
				<select id="two" name="conditionTwo">
				  <option value="p_dep_code">DEPARTURE CODE</option>
				  <option value="p_dep_city">DEPARTURE CITY</option>
				  <option value="p_dep_country">DEPARTURE COUNTRY</option>
				  <option value="p_des_code">DESTINATION CODE</option>
				  <option value="p_des_city">DESTINATION CITY</option>
				  <option value="p_des_country">DESTINATION COUNTRY</option>
				  <option value="p_airline_code">AIRLINE CODE</option>
				  <option value="p_airline_name">AIRLINE NAME</option>
				  <option value="p_airline_country">AIRLINE COUNTRY</option>
				  <option value="p_flight">FLIGHT</option>
				  <option value="p_route">ROUTE</option>
				  <option value="p_frequency">FREQUENCY</option>
				  <option value="p_aircraft_code">AIRCRAFT CODE</option>
				  <option value="p_aircraft_name">AIRCRAFT NAME</option>
				  <option value="p_type">TYPE</option>
				  <option value="p_remarks">REMARKS</option>
				</select> FIELD

				HAVING A VALUE OF 
				<input id="second" type="text" name="secondCondition" class="inputField" autocomplete="off" id="secondUpperCase" onblur="myFunctionOnBlurSecond();">
			</td>	
		</tr>
	</table>
</div>

<center>
<div id="lowerForm" style="vertical-align: top; width: 876px; padding-left: 15px; margin-top: 4px;">
	<div>
		<div style="float: left; margin-bottom: 0px;">SELECT FIELDS</div><br><br>
		<div style="float: left; vertical-align: top;">
			<select name="fields[]" id="headers" multiple="multiple" style="width: 347px; border-radius: 5px; overflow: hidden; font-size: 13px;" size=16 align="left">
			  <option value="p_dep_code">DEPARTURE CODE</option>
			  <option value="p_dep_city">DEPARTURE CITY</option>
			  <option value="p_dep_country">DEPARTURE COUNTRY</option>

			  <option value="p_des_code">DESTINATION CODE</option>
			  <option value="p_des_city">DESTINATION CITY</option>
			  <option value="p_des_country">DESTINATION COUNTRY</option>

			  <option value="p_airline_code">AIRLINE CODE</option>
			  <option value="p_airline_name">AIRLINE NAME</option>
			  <option value="p_airline_country">AIRLINE COUNTRY</option>

			  <option value="p_flight">FLIGHT</option>
			  <option value="p_route">ROUTE</option>
			  <option value="p_frequency">FREQUENCY</option>

			  <option value="p_aircraft_code">AIRCRAFT CODE</option>
			  <option value="p_aircraft_name">AIRCRAFT NAME</option>
			  <option value="p_type">TYPE</option>
			  <option value="p_remarks">REMARKS</option>
			</select>
		</div>	
		<div style="vertical-align: top; padding-left: 12px;">
			<div style="text-align: left;">
				<table style="width: 498px; float: right; margin-right: 14px; margin-bottom: 12px;">
					<tr>	
						<td style="font-size: 16px;">
							SORT SEARCH RESULTS BY THIS FIELD
							<select class="inputField" name="orderField" style="width: 174px;">
							  <option value="p_dep_code">DEPARTURE CODE</option>
							  <option value="p_dep_city">DEPARTURE CITY</option>
							  <option value="p_dep_country">DEPARTURE COUNTRY</option>
							  <option value="p_des_code">DESTINATION CODE</option>
							  <option value="p_des_city">DESTINATION CITY</option>
							  <option value="p_des_country">DESTINATION COUNTRY</option>
							  <option value="p_airline_code">AIRLINE CODE</option>
							  <option value="p_airline_name">AIRLINE NAME</option>
							  <option value="p_airline_country">AIRLINE COUNTRY</option>
							  <option value="p_flight">FLIGHT</option>
							  <option value="p_route">ROUTE</option>
							  <option value="p_frequency">FREQUENCY</option>
							  <option value="p_aircraft_code">AIRCRAFT CODE</option>
							  <option value="p_aircraft_name">AIRCRAFT NAME</option>
							  <option value="p_type">TYPE</option>
							  <option value="p_remarks">REMARKS</option>
							</select><br><br>
						</td>	
					</tr>	
					<tr>
						<td style="font-size: 15px; padding-left: 5px;">
							SORT BY THE FOLLOWING ORIENTATION 
							<select class="inputField" name="orderBy" style="width: 174px;">
							  <option value="asc">ASCENDING ORDER</option>
							  <option value="desc">DESCENDING ORDER</option> 
							</select><br>
						</td>
					</tr>		
				</table>	
			</div>
			<table valign="top" width=476 height=87 bgcolor=#d6e0f5 style="border-radius: 2px; border: solid black 1px;">
				<tr>
					<td valign="top" style="word-spacing: 3px; font-size: 14px; padding: 18px; color: black;">
						<div id="message">
							<i>PLEASE USE THE SEARCH FIELDS LISTED ABOVE TO NARROW DOWN YOUR SEARCH.  
							ON THE LEFT, HOLD DOWN THE CTRL KEY ON YOUR KEYBOARD TO SELECT MULTIPLE SEARCH FIELDS. YOU MAY ALSO USE THE SHIFT KEY AS WELL.</i>
						</div>		 
					</td>	
				</tr>
			</table><br>
			<input type="submit" id="subInput" name="submit" value="SEARCH" style="margin-top: 12px; margin-right: 25px; float: right; width: 280px; height: 29px; font-size: 16px;">
		</div>
	</div>		
</div>


</form>

</center>

</body>	

</div>


<div style="margin-bottom: 0px; height: 5px; margin-top: 450px; background-image: linear-gradient(#EEEEEE, grey);"></div>
<div style="height: 500px; width: 100%; background-color: #466289; margin-bottom: 0px;"></div>


<?php

include 'endDB.php';

?>