function validate() {

	//validate user and password not null
	var v1 = document.getElementById("user").value;
	var v2 = document.getElementById("pass").value;
	var invalid = false;
	
	if(v1 == ""|| v2 == "") {
			alert("Login fields must have least one character.");
			invalid = true;
	}

	//validate number entries
	var n1 = document.getElementById("pizzaNum").value;
	var n2 = document.getElementById("dpgNum").value;
	var n3 = document.getElementById("chocNum").value;
	if(n1 == ""||n2==""||n3=="") {
		alert("Cannot have empty field!");
		invalid = true;
	}
	
	if(n1 < 0 || n2 < 0 ||n3 < 0) {
			alert("Negative values not allowed! Indicate 0 or more items.");
			invalid = true;
	}

	//validate radio button selected
	var checked = document.querySelector("input[type=radio]:checked");
	if (!checked) {
		alert("You need to select a shipping option");
		invalid = true;
	}
	if(invalid)
	{
		event.preventDefault();
	}

}