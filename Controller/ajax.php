<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../Controller/dataLoad.css">
	<title>UserProfile</title>
</head>
<body>
	 <h2> User Profile</h2>
	<button id="load">Show</button>
	<div id="main">
	</div>
	<script src="../Controller/jquery.js"></script>
	<script>
		$(document).ready(function(){
			$("#load").on("click",function(e){
				$.ajax({
					url:"../Controller/dataLoad.php",
					type:"post",
					success:function(data){
						$("#main").html(data);
					}
				});
			});
		});
	</script>
</body>
</html>