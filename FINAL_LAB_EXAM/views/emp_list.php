
<?php
	require_once('sessionHeader.php');
	require_once('db.php');
	
?>
<!DOCTYPE html>
<html >
<head>

  <title>search</title>
</head>
<body>
  Search <input type="text" id="search" onkeyup="searchEmployers()">
  <div></div>
  <script>

    function searchEmployers() {
		var search = document.getElementById('search').value;

    	  var xhttp = new XMLHttpRequest();
			xhttp.open('POST', 'emo_listController.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('search='+search);
			
			xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
			document.getElementsByTagName('div')[0].innerHTML = this.responseText;
        }
      }
    }
  </script>
  
  
</body>
</html>