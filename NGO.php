<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--Get your own code at fontawesome.com-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">
	<title>Welcome to NGO Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
		header {
			background-color: #7DCEA0;
			color: #fff;
			padding: 20px;
			text-align: center;
			font-size: 24px;
		}
		.container {
			margin: 50px auto;
			max-width: 800px;
			padding: 20px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
			text-align: center;
		}
		h1 {
			font-size: 48px;
			margin-top: 0;
			margin-bottom: 20px;
			color: #7DCEA0;
		}
		p {
			font-size: 24px;
			line-height: 1.5;
			margin-bottom: 20px;
		}
		button {
			background-color: #7DCEA0;
			color: #fff;
			padding: 10px 20px;
			font-size: 24px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		button:hover {
			background-color: #2ECC71;
		}
	</style>
</head>
<body>
	<header>
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Welcome to NGO Dashboard &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <a href="Main Login.html"><button>Log Out</button></a>
	</header>
	<div class="container">
		<h1>Check Your NGO's Progress</h1>
		<p>We are a non-profit organization committed to making a difference in the world. We can achieve our mission and make a positive impact on the lives of people in need.</p>
		<a href="donation.php"><button>View Donations</button></a>
	</div>
    <?php
        $user_id=$_SESSION['user_id'];
        $_SESSION['user_id']=$user_id;
    ?>
</body>
</html>
