<html>
	<head>
		<meta charset="utf-8">
		<title>AdBerry</title>
		
	</head>
	<body>
		<?php 
		session_start();
		if(!isset($_SESSION['user_session']))
		{?>
			<script language="javascript">
    		window.location.href = "assets/pages/index.php"
			</script>
			<?
		}
		else{
			?>
			<script language="javascript">
    		window.location.href = "assets/componets/login/index.php"
			</script>
			<?
		}
		?>
		
	</body>
</html>