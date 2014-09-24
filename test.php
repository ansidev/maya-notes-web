// <?php
// session_start();  
// if(isset($_SESSION['views']))
//     $_SESSION['views'] = $_SESSION['views']+ 1;
// else
//     $_SESSION['views'] = 1;

// echo "views = ". $_SESSION['views']; 
// ?>
<?php
	require 'sql_connect.php';
	$query = "SELECT * FROM `user` WHERE `id` = 1";
	$result = mysqli_query($con, $query);
	echo "Step 1";
	echo $result;
	echo "Step 2";
	echo $result['email'];
?>