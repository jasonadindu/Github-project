<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Forms</title>
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/3.0.2/normalize.css">
	<link rel="stylesheet" href="_/css/styles.css" />
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Roboto:400,300,500,700|Lato:400,300,700|Raleway:400,300,700,600|Open+Sans+Condensed:300,700|Asap:400,700|Merriweather+Sans:400,700,300' rel='stylesheet' type='text/css'>
	<style>/*Inline css*/</style>
</head>
<body>
	<div id="form-wrapper">
		<form action="action.php" method="post">
			<h1>Reservations</h1>
			<label for="name">Name</label>
			<input name="name" type="text" value="Name">

			<label for="email">Email</label>
			<input name="email" type="text" value="Email">
			
			<label for="checkin">Check In</label>
			<input name="checkin" type="text" value="dd/mm/yyyy" id="datepicker">

			<label for="select">Location</label>
			<select name="select" id="">
				<option value="Text">Select and option</option>
				<option value="Text">Option 1</option>
				<option value="Text">Option 2</option>
				<option value="Text">Option 3</option>
			</select>

			<input type="submit">
		</form>
	</div>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- jQuery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script>
"use strict"

myJs();

function myJs(){

	var nameField = document.querySelectorAll('input');

	for (var i = 0; i < nameField.length; i++) {
		
		nameField[i].addEventListener('focus', function (e) {	

			// find the target field value
			var fieldValue = e.target.value;
			// remove value is not a submit
			if (e.target.type !== 'submit') {
				e.target.value = "";
			}; // if statement
			// add class
			e.target.previousElementSibling.setAttribute('class', 'selected');
			
			e.target.addEventListener('blur', function (f) {
				console.log(e.target.value);
				// restore the field value
				if (e.target.type !== 'submit') {
					f.target.value = fieldValue;
				}; // if statement
				// remove class 
				e.target.previousElementSibling.removeAttribute('class', 'selected');
			}, false) // blur event
		}, false) // focus event

		nameField[i].addEventListener('click', function(g) {
				console.log(this.type);
			
			// find submit
			if (g.target.type === 'submit') {
				console.log('yay')
				// g.preventDefault()
			} // if statement
		}) // click event
	}; // for loop
}; // self executing func

// activate jQueryUI datepicker
$(function() {
	$( "#datepicker" ).datepicker();
});

</script>
</body>
</html>