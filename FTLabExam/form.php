<!DOCTYPE html>
<html>
<head>
<title>Search Page</title>
</head>
<body>
<h1>Search Faculty</h1>
<div class="formDiv">
		<label>Search By Faculty Name:</label><br>
		<input type="text" name="factName" id="factName"><br><br>
		<label>Search By Research Interest:</label><br>
		<input type="text" name="interest" id="interest"><br><br>
		<label for="designation">Search By Designation:</label><br>
		<select id="designation">
  			<option selected="select" value="">Select Designation</option>
  			<option selected="select" value="Lecturer">Lecturer</option>
  			<option selected="select" value="Assistant Professor">Assistant Professor</option>
  			<option selected="select" value="Professor">Professor</option>
		</select>
		<br><br><br><br><br><input type="submit" name="search" onclick="formValidation()" value="Search">
		<p id="error"></p>
</div>
<div id="display"></div>
<script type="text/javascript" src="myjs.js"></script>
</body>
</html>