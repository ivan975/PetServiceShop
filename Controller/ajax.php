<html>
<body
	 <h2> Ajax data loaded from the database </h2><br>
	<button id="load">Load data</button>
	<div id="main">
	</div>
	<script src="../Controller/jquery.js"></script>
	<script>
		$(document).ready(function(){
			$("#load").on("click",function(e){
				$.ajax({
					url:"userProfile.php",
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