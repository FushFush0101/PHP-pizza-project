<?php 
//connect to database
	$conn = mysqli_connect('localhost','congphu','123456','congphu_pizza');
	//check connection
	if(!$conn){
		echo 'connetion error: '. mysqli_connect_error();
	}
 ?>