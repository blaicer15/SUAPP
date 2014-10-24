$(document).ready(function(){
		var selected = $('#dropdownMenu1');

	$('dropdownMenu1').click(function(event){
		event.preventDefault();
		alert("Hola");

	});



	$('#op1').click(function(event){
		event.preventDefault();
		dropdownMenu1.text("Action")

	});

	$('#op2').click(function(event){
		dropdownMenu1.text("Another Action")

	});

	$('#op1').click(function(event){

		dropdownMenu1.text("Something else here")

	});

	$('#op1').click(function(event){

		dropdownMenu1.text("Separated link")

	});


});