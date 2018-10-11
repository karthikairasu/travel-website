<?php
   
   $conn = mysqli_connect("localhost","root","","travel");
   
   $from =$_POST['pickup'];
   $to =$_POST['drop'];
   $checkin =$_POST['date-start'];
   $checkout =$_POST['date-end'];
   $adult =$_POST['adult'];
   
   
   $sql= "insert into plans(fromadd,toadd,checkin,checkout,adult)
          values('$from','$to','$checkin','$checkout','$adult')";
		  
	$status= mysqli_query($conn,$sql);
	
	echo $sql;
    
    if($status)
    {
		echo "data saved success";
		header("Location:viewplan.php");
	}		
	else
	{
		echo "error";
	}

?>