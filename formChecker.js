
function validate() {
	
  //validate user and password not null
  var v1 = document.getElementById("user").value;
  var v2 = document.getElementById("pass").value;

  if(v1 == "") {
	  alert("Username must have least one character.");
  }
  if(v2=="")  {
      alert("Password must have least one character.");
  }

  //validate number entries
  var n1 = document.getElementById("pizzaNum").value;
  var n2 = document.getElementById("dpgNum").value;
  var n3 = document.getElementById("chocNum").value;

  if(n1 < 0 || n2 < 0 ||n3 < 0) {
          alert("Cannot have a negative value!");
  }
  
//validate radio button selected
var checked = document.querySelector("input[type=radio]:checked");
 if (!checked) {
        alert("You need to select a shipping option");
 }
}
