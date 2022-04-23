<!DOCTYPE html>
<html>

<body>
<h2>Multiplication table</h2>


<div id = "fullTable"> </div>
<button id = genTable onclick = "createTable();"> Click for Table </button>

<script>


function createTable(){
  var table;
  table = '<table id = mtable">';

  var size = 100;

  for(let i = 1; i <= size; i++) {
    table += '<tr>';
    for(i = 1; i <= size; i++) {
      table += '<td>'+ i + '</td>';
    }
     table+='</tr>';
  }
  table += '</table>';

  document.getElementById("fullTable").innerHTML = table;
}
</script>
</body>
</html>