
<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="style.css">
<title>Reporting form</title>
</head>
<body class="report">
<div class="main">
	<hr noshade style="color:solidblack" size=5 style="top: 10px;">
	<form action="project.php"  method="POST" enctype="multipart/form-data">
	<h1>POLICE REPORT.</h1>                 	  
	<hr noshade style="color:black" size=5><br>

	<label for="Registration Number"><b>Case No:</b></label>
	<input type="text"placeholder="">


	<label for="date"><b>Date:</b></label>
	   <input type="Date" name="date"><br><br>
	<label for="Programme"><b>Reporting Officer:</b></label>
	   <input type="text" name="reporting Officer">
  
	
	<label for="name"> <b>Prepared By:</b> </label>
	<input type="text" placeholder="" name="name" required><br><br>
	<label for="incident"><b>Incident: </b></label><br>
	<textarea name="incident" cols="80" maxlength="1000"></textarea><br><br>

	    <hr noshade style="color:black" size=5>
	
	<label for="incident"><b>Detail of Event: </b></label><br>
	<textarea name="incident" cols="89" rows="5" maxlength="2000"></textarea><br><br>

	<label for="incident"><b>Area Taken: </b></label><br>
	<textarea name="incident" cols="89"  rows="5" maxlength="2000"></textarea><br><br>

	<label for="incident"><b>Summary: </b></label><br>
	<textarea name="incident" cols="89" rows="5" maxlength="2000"></textarea><br><br>





		<hr noshade style="color:black" size=5>
		<br>
</div>
</body>
</html>